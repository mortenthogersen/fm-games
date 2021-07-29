<?php

namespace App\Http\Controllers;

use App\Models\Download;
use App\Models\Game;
use App\Models\GameGenre;
use App\Models\Genre;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use MarcReichel\IGDBLaravel\Builder as IGDB;
use MarcReichel\IGDBLaravel\Models\GameVideo;

class MainController extends Controller
{
    public function index()
    {

        $games = game::all();
        return view('index', compact('games'));
    }
    public function scrape()
    {

        $directories = File::directories(public_path('games'));

        $dirs = [];
        foreach ($directories as $dir) {

            if (!game::where('title', Str::of($dir)->basename())->exists()) {
                $igdb = new IGDB('games');
                $game = $igdb->where('name', '=', Str::of($dir)->basename())->where('rating', '!=', null)->with(['screenshots', 'cover',])->first();
                $cover = $game['cover'];
                $g = Game::create([
                    'api_id' => $game['id'],
                    'title' => $game['name'],
                    'rating' => $game['rating'],
                    'summary' => $game['summary'],
                    'release' => Carbon::createFromTimestamp($game['first_release_date'])->toDate(),
                    'cover' => Str::of($cover['url'])->basename(),
                    'link' => File::files($dir)[0]->getBasename(),

                ]);
                $url    = "https://images.igdb.com/igdb/image/upload/t_cover_big_2x/" . Str::of($cover['url'])->basename();
                $guzzle = new Client();
                $response = $guzzle->get($url);

                Storage::put('public/games/' . $g->id . '/' . Str::of($cover['url'])->basename(), $response->getBody());

                foreach ($game['screenshots'] as $screenshot) {
                    $url    = "https://images.igdb.com/igdb/image/upload/t_screenshot_huge/" . $screenshot['image_id'] . '.jpg';
                    $guzzle = new Client();
                    $response = $guzzle->get($url);

                    Storage::put('public/games/' . $g->id . '/screenshots/' . $screenshot['image_id'] . '.jpg', $response->getBody());
                }


                $g->genres()->sync($game['genres']);
            }
        }
        // return view('index');
    }
    public function data()
    {


        $igdb = new IGDB('games');
        $genres = $igdb->where('id', '=', 142494)->with(['screenshots', 'multiplayer_modes'])->get();
        dd($genres);



        // return view('index');
    }
    public function show($id)
    {



        $game = Game::FindOrFail($id);
        $igdb = new IGDB('games');
        $api = $igdb->where('id', '=', (int)$game->api_id)->with(['screenshots', 'cover', 'videos', 'platforms'])->first();


        $videos = [];

        foreach ($api['videos'] as $video) {
            $videos[] = $video['video_id'];
        }


        $files = Storage::allFiles("public/games/" . $game->id . "/screenshots");





        $screenshots = [];
        foreach ($files as $screenshot) {
            $screenshots[] = Str::of($screenshot)->basename()->__toString();
        };




        return view('show', compact(["game", "screenshots", "videos"]));
    }
    public function download($id)
    {
        $game = Game::findOrFail($id);

        if ($game) {

            $d = Download::create([
                'game_id' => $id,
            ]);

            $file = "games/" . $game->title . "/" . $game->link;

            return redirect($file);
        }
    }
    public function change_game(Request $request)
    {
        


        dd($request);
    }
}
