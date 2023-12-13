<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
/*
    Route::get('/players/create', [PlayerController::class, 'create'])->name('players.create');
    Route::get('/players/{player}', [PlayerController::class, 'show'])->name('players.show');
    Route::get('/players', [PlayerController::class, 'index'])->name('players.index');
    Route::post('/players', [PlayerController::class, 'store'])->name('players.store');
    Route::delete('/players/{player}', [PlayerController::class, 'destroy'])->name('players.destroy');
    Route::get('/players/{player}/edit', [PlayerController::class, 'edit'])->name('players.edit');
    Route::put('/players/{player}', [PlayerController::class, 'update'])->name('players.update');

    Route::get('/teams/create', [TeamController::class, 'create'])->name('teams.create');
    Route::get('/teams/{team}', [TeamController::class, 'show'])->name('teams.show');
    Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
    Route::post('/teams', [TeamController::class, 'store'])->name('teams.store');
    Route::delete('/teams/{team}', [TeamController::class, 'destroy'])->name('teams.destroy');
    Route::get('/teams/{team}/edit', [TeamController::class, 'edit'])->name('teams.edit');
    Route::put('/teams/{team}', [TeamController::class, 'update'])->name('teams.update');
    */
    Route::resource('players', PlayerController::class);
    Route::resource('teams', TeamController::class);
});

//Route::get('/teams/{team}', function ($team) {return view('teams', ['team' => $team]);});

//Route::get('/players', [PlayerController::class, 'index'])->name('players.index');

//Route::get('/players/{player}', [PlayerController::class, 'show'])->name('players.show');

require __DIR__.'/auth.php';
