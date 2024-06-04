<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Admin\DashboardController;
use Inertia\Inertia;
use App\Http\Controllers\Admin\UserController as DashboardUserController;
use App\Http\Controllers\Admin\ParkirController as DashboardParkirController;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });


Route::get('/', [LandingController::class, 'index'])->name('landing.index');

Route::get('/admin', DashboardController::class,)->name('admin.index');

Route::group(['prefix' => 'admin'], function () {
    Route::resource('/parkirs', DashboardParkirController::class, ['names' => 'admin.parkirs']);
    Route::resource('/users', DashboardUserController::class, ['names' => 'admin.users']);
});


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return Inertia::render('Dashboard');
//     })->name('dashboard');
// });
