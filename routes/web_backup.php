<?php

use Illuminate\Support\Facades\Route;
// Controllers
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\NoteController;


// Define the route, controller, method, and name(optional) associated to the route
Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');

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
