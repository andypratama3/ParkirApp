<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Admin\DashboardController;
use Inertia\Inertia;
use App\Http\Controllers\ParkirController;
use App\Http\Controllers\KritikSaranController;
use App\Http\Controllers\Admin\KritikSaranController as DashboardKritikSaranController;

use App\Http\Controllers\Admin\UserController as DashboardUserController;
use App\Http\Controllers\Admin\ParkirController as DashboardParkirController;
use App\Http\Controllers\ProfileController;

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

Route::get('/parkir', [ParkirController::class, 'index'])->name('parkir.index');
Route::post('/parkirs/store', [ParkirController::class, 'store'])->name('parkirs.store');

Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');
Route::post('/kritik-saran/post', [KritikSaranController::class, 'store'])->name('kritik-saran.store');

Route::group(['prefix' => 'profile'], function () {

    Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
});

Route::group(['prefix' => 'admin'], function () {

    Route::resource('/parkirs', DashboardParkirController::class, ['names' => 'admin.parkirs']);
    Route::resource('/users', DashboardUserController::class, ['names' => 'admin.users']);
    Route::resource('/kritik-saran', DashboardKritikSaranController::class, ['names' => 'admin.kritik']);

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
