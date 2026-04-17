<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', [UserController::class, 'accueil'])->name('accueil');
Route::get('/apropos', [UserController::class, 'apropos'])->name('apropos');
Route::get('/evenement', [UserController::class, 'evenement'])->name('evenement');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/actualite', [UserController::class, 'actualite'])->name('actualite');
Route::get('/projet', [UserController::class, 'projet'])->name('projet');
