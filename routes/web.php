<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductsWebsiteController;
use App\Http\Controllers\WebScraperController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    // return Inertia::render('Welcome', [
    //     'canLogin' => Route::has('login'),
    //     'canRegister' => Route::has('register'),
    //     'laravelVersion' => Application::VERSION,
    //     'phpVersion' => PHP_VERSION,
    // ]);

    return Inertia::render('Auth/Login');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/products', [ProductsController::class, 'index'])->middleware(['auth', 'verified'])->name('products');
// Route::get('/register/website', [ProductsWebsiteController::class, 'index'])->middleware(['auth', 'verified'])->name('register.website');
Route::get('/scraper', [WebScraperController::class, 'index'])->middleware(['auth', 'verified'])->name('scraper');
Route::get('/schedule', [ScheduleController::class, 'index'])->middleware(['auth', 'verified'])->name('schedule');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // WEBSCRAPPERSCHEDULE
    Route::post('/create-schedule', [ScheduleController::class, 'store'])->name('schedule.store');

    // WEBSCRAPER
    Route::post('/create-product-schedule', [WebScraperController::class, 'createProductWebsite'])->name('scraper.create');
});

require __DIR__.'/auth.php';
