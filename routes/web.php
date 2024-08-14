<?php
use App\Http\Controllers\welcomecontroller;
use App\Http\Controllers\noteController;
use Illuminate\Support\Facades\Route;

Route::get('/',[welcomecontroller::class, 'welcome'])->name('welcome');

// Route::get('/note',[noteController::class, 'index'])->name('note.index');
// Route::get('/note/{id}',[noteController::class, 'show'])->name('note.show');
// Route::get('/note/create',[noteController::class, 'create'])->name('note.create');
// Route::post('/note',[noteController::class, 'store'])->name('note.store');
// Route::get('/note/{id}/edit',[noteController::class, 'edit'])->name('note.edit');
// Route::put('/note/{id}',[noteController::class, 'update'])->name('note.update');
// Route::delete('/note/{id}',[noteController::class, 'destroy'])->name('note.destroy');

Route::resource('note', noteController::class);
