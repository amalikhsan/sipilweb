<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FullCalender;
use App\Http\Controllers\UserController;
use App\Http\Controllers\berandaController;
use App\Http\Controllers\DataBlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataAlumniController;
use App\Http\Controllers\DataDosenTendikController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::put('/change-profile-avatar', [DashboardController::class, 'changeAvatar'])->name('change-profile-avatar');
    Route::delete('/remove-profile-avatar', [DashboardController::class, 'removeAvatar'])->name('remove-profile-avatar');

    Route::resource('user', UserController::class);
    Route::middleware(['can:admin'])->group(function () {
        Route::resource('blog', DataBlogController::class);
        Route::resource('dosen', DataDosenTendikController::class);
        Route::resource('alumni', DataAlumniController::class);
        Route::get('/agenda', [FullCalender::class, 'index'])->name('agenda-index');
        Route::get('/agenda/create', [FullCalender::class, 'create'])->name('agenda-create');
    });
});


Route::get('/register', function () {
    return view('pages.auth.login');
})->middleware(['guest']);

Route::get('/', [berandaController::class, 'index']);