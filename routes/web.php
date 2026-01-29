<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TiketController;
use App\Http\Controllers\Admin\HistoriesController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\EventController as UserEventController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\TiketTypeController;
use App\Http\Controllers\Admin\LokasiController;

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Auth
Route::middleware('auth')->group(function () {

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Events
    Route::get('/events/{event}', [UserEventController::class, 'show'])->name('events.show');

    // Admin
    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {

        // Dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // Categories
        Route::resource('categories', CategoryController::class);

        // Lokasi
        Route::resource('locations', LokasiController::class);

        // Events
        Route::resource('events', AdminEventController::class);

        // Tickets
        Route::resource('tickets', TiketController::class);

        // Payments
        Route::resource('payments', PaymentController::class);

        // Ticket Types
        Route::resource('ticket_types', TiketTypeController::class);

        // Histories
        Route::get('/histories', [HistoriesController::class, 'index'])->name('histories.index');
        Route::get('/histories/{id}', [HistoriesController::class, 'show'])->name('histories.show');
    });

    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
});

require __DIR__ . '/auth.php';
