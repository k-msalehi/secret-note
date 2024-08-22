<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Dashboard;
use App\Livewire\Notes\Create;
use App\Livewire\Notes\Edit;
use App\Livewire\Notes\Index;
use App\Livewire\Notes\Show;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('dashboard', Dashboard::class)->name('dashboard');

Route::name('notes.')->middleware('auth')->group(function () {
    Route::get('notes/create', Create::class)->name('create');
    Route::get('notes/edit/{id}', Edit::class)->name('edit');
    Route::get('notes/index', Index::class)->name('index');
    Route::get('notes/show/{id}', Show::class)->name('show');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
