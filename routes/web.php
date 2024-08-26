<?php

use Illuminate\Support\Facades\Route;
// Controllers
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NoteController;

/*
Route::get('/', function () {
    return view('welcome');
});*/

// When we go to the / will redirect to /note and also / is now dashboard, double redirection (TODO: fix this)
Route::redirect('/', '/note')->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    // Define routes for Notes
    /*
Route::get('/note', [NoteController::class, 'index'])->name('note.index');
Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
Route::post('/note', [NoteController::class, 'store'])->name('note.store');
Route::get('/note/{id}', [NoteController::class, 'show'])->name('note.show');
Route::get('/note/{id}/edit', [NoteController::class, 'edit'])->name('note.edit');
Route::put('/note/{id}', [NoteController::class, 'update'])->name('note.update');
Route::delete('/note/{id}', [NoteController::class, 'destroy'])->name('note.destroy');
*/
    // Using this line generate the same as the 7 lines above
    Route::resource('note', NoteController::class);
});

// Middleware auth and verified email, if one of them fails we can NOT access to the dashboard 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// To access the profile page the user must be authenticated
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
