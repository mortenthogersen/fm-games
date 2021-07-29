<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Rating;

class GameRatings extends Component
{
    public $rating;
    public $comment;
    public $currentId;
    public $game;
    public $hideForm;

    protected $rules = [
        'rating' => ['required', 'in:1,2,3,4,5'],


    ];

    public function render()
    {
        $comments = Rating::where('game_id', $this->game->id)->where('status', 1);
        return view('livewire.game-ratings', compact('comments'));
    }

    public function mount()
    {

        $rating = Rating::where('game_id', $this->game->id)->first();
        if (!empty($rating)) {
            $this->rating  = $rating->rating;
            $this->currentId = $rating->id;
        }

        return view('livewire.game-ratings');
    }

    public function delete($id)
    {
        $rating = Rating::where('id', $id)->first();
        if ($rating && ($rating->user_id == auth()->user()->id)) {
            $rating->delete();
        }
        if ($this->currentId) {
            $this->currentId = '';
            $this->rating  = '';
        }
    }

    public function rate()
    {

        if (!empty($rating)) {

            $rating->game_id = $this->game->id;
            $rating->rating = $this->rating;

            $rating->status = 1;
            try {
                $rating->update();
            } catch (\Throwable $th) {
                throw $th;
            }
            session()->flash('message', 'Success!');
        } else {
            $rating = new Rating;
            $rating->game_id = $this->game->id;
            $rating->rating = $this->rating;
            $rating->status = 1;
            try {
                $rating->save();
            } catch (\Throwable $th) {
                throw $th;
            }
            $this->hideForm = true;
        }
    }
}
