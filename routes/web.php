<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::name('note.')->group(function () {
    Route::resource('notes', \App\Http\Controllers\NoteController::class);
});
