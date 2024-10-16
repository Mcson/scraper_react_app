<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ICPController;
use App\Http\Controllers\NonICPController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\WebScraperController;
use App\Http\Controllers\ProductsWebsiteController;

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


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ICP PAGE
    Route::get('/icp', [ICPController::class, 'index'])->name('icp');

    // NON ICP PAGE
    Route::get('/non-icp', [NonICPController::class, 'index'])->name('non-icp');

    // SCHEDULE PAGE
    Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule');

    // WEBSCRAPPERSCHEDULE
    Route::post('/create-schedule', [ScheduleController::class, 'store'])->name('schedule.store');
    Route::delete('/delete-product-schedule/{id}', [ScheduleController::class, 'destroy'])->name('product.destroy');
    Route::put('/update-schedule/{schedule}', [ScheduleController::class, 'update'])->name('schedule.update');

    // WEBSCRAPER
    Route::post('/create-product-schedule', [WebScraperController::class, 'createProductWebsite'])->name('scraper.create');
});

require __DIR__.'/auth.php';
