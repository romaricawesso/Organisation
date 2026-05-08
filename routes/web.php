<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', [UserController::class, 'accueil'])->name('accueil');
Route::get('/apropos', [UserController::class, 'apropos'])->name('apropos');
Route::get('/evenement', [UserController::class, 'evenement'])->name('evenement');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/don', [UserController::class, 'don'])->name('don');
Route::get('/actualite', [UserController::class, 'actualite'])->name('actualite');
Route::get('/projet', [UserController::class, 'projet'])->name('projet');
Route::get('/evenement/education',  [UserController::class, 'educationDetail'])->name('event.education');
Route::get('/evenement/sante',      [UserController::class, 'santeDetail'])->name('event.sante');
Route::get('/evenement/nutrition',  [UserController::class, 'nutritionDetail'])->name('event.nutrition');
Route::get('/evenement/detail1',    [UserController::class, 'eventDetail1'])->name('event.detail1');
Route::get('/evenement/detail2',    [UserController::class, 'eventDetail2'])->name('event.detail2');
Route::get('/evenement/detail3',    [UserController::class, 'eventDetail3'])->name('event.detail3');
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['fr', 'en'])) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }
    return redirect()->back();
})->name('lang.switch');
