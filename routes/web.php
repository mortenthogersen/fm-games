<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/scrape', [MainController::class, 'scrape'])->name('scrape');
Route::get('/data', [MainController::class, 'data'])->name('data');
Route::get('/game/{id}', [MainController::class, 'show'])->name('show');
Route::get('/game/download/{id}', [MainController::class, 'download'])->name('download');
Route::patch('/game/change/{id}', [MainController::class, 'change_game'])->name('change_game');

require __DIR__ . '/auth.php';
