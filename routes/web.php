<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\PortfolioController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/faqs', function () {
    return view('pages.faqs');
})->name('faqs');

Route::get('/services', [App\Http\Controllers\PortfolioController::class, 'services'])->name('services');

Route::get('/profiles', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profiles.index');
Route::get('/gallery', [App\Http\Controllers\PortfolioController::class, 'gallery'])->name('gallery');
Route::get('/exteriors', [App\Http\Controllers\PortfolioController::class, 'exteriors'])->name('exteriors');
Route::get('/interiors', [App\Http\Controllers\PortfolioController::class, 'interiors'])->name('interiors');
Route::get('/commercial', [App\Http\Controllers\PortfolioController::class, 'commercial'])->name('commercial');
Route::get('/portfolio', [App\Http\Controllers\PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/portfolio/{woodName}', [App\Http\Controllers\PortfolioController::class, 'show']);
Route::get('/search', [ProfilesController::class, 'search'])->name('search');
