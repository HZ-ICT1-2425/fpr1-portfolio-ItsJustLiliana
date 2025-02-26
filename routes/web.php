<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'welcome'])->name('home');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/games', [PageController::class, 'games'])->name('games');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');

Route::get('/sitefeedback', [BlogController::class, 'sitefeedback'])->name('sitefeedback');
Route::get('/studychoice', [BlogController::class, 'studychoice'])->name('studychoice');
Route::get('/programxp', [BlogController::class, 'programxp'])->name('programxp');
Route::get('/swotanalysis', [BlogController::class, 'swotanalysis'])->name('swotanalysis');
Route::get('/ictfieldwork', [BlogController::class, 'ictfieldwork'])->name('ictfieldwork');
Route::get('/firstfeedback', [BlogController::class, 'firstfeedback'])->name('firstfeedback');
