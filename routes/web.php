<?php

use Inertia\Inertia;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Index', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // DASHBOARD
    Route::get('/dashboard', [Controller::class, 'index'])->name('dashboard');

    // SERVICES
    Route::get('/service/index', [ServiceController::class, 'index'])->name('service.index');
    Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
    Route::get('/service/store', [ServiceController::class, 'store'])->name('service.store');
    Route::get('/service/show', [ServiceController::class, 'show'])->name('service.show');
    Route::get('/service/edit', [ServiceController::class, 'edit'])->name('service.edit');
    Route::patch('/service/update', [ServiceController::class, 'update'])->name('service.update');
    Route::delete('/service/destroy', [ServiceController::class, 'destroy'])->name('service.destroy');
    
    // PORTFOLIO
    Route::get('/portfolio/index', [PortfolioController::class, 'index'])->name('portfolio.index');
    Route::get('/portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
    Route::get('/portfolio/store', [PortfolioController::class, 'store'])->name('portfolio.store');
    Route::get('/portfolio/show', [PortfolioController::class, 'show'])->name('portfolio.show');
    Route::get('/portfolio/edit', [PortfolioController::class, 'edit'])->name('portfolio.edit');
    Route::patch('/portfolio/update', [PortfolioController::class, 'update'])->name('portfolio.update');
    Route::delete('/portfolio/destroy', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');


    // PROFIL
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
