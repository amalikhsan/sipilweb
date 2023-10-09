<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\DIVPJJController;
use App\Http\Controllers\TendikController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DIVTPTPController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\DataBlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataEventController;
use App\Http\Controllers\DataAlumniController;
use App\Http\Controllers\DIVPSDKUOKUController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\VisiDanMisiController;
use App\Http\Controllers\FullCalendarController;
use App\Http\Controllers\BeritaTerkiniController;
use App\Http\Controllers\BlogInformasiController;
use App\Http\Controllers\DataDosenTendikController;
use App\Http\Controllers\DIIITeknikSipilController;
use App\Http\Controllers\LowonganPekerjaanController;
use App\Http\Controllers\StrukturOrganisasiController;

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

Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::put('/change-profile-avatar', [DashboardController::class, 'changeAvatar'])->name('change-profile-avatar');
    Route::delete('/remove-profile-avatar', [DashboardController::class, 'removeAvatar'])->name('remove-profile-avatar');

    Route::middleware(['can:admin'])->group(function() {
        Route::resource('user', UserController::class);
        Route::resource('datadosen', DataDosenTendikController::class);
        Route::resource('datablog', DataBlogController::class);
        Route::resource('dataalumni', DataAlumniController::class);
        Route::resource('dataevent', DataEventController::class);
    });
});

Route::middleware(['guest'])->group(function () {
    Route::get('/register', function () {
        return view('pages.auth.login');
    });
    Route::get('/login', function () {
        return view('pages.auth.login');
    });
});

Route::get('/', [BerandaController::class,'index'])->name('beranda');

Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('Tentang_Kami');

Route::get('/visi-dan-misi', [VisiDanMisiController::class, 'index'])->name('Visi_&_Misi');

Route::get('/struktur-organisasi', [StrukturOrganisasiController::class, 'index'])->name('Struktur_Organisasi');

Route::get('/dosen', [DosenController::class, 'index'])->name('Dosen');

Route::get('/tendik', [TendikController::class, 'index'])->name('Tendik');

Route::get('/alumni', [AlumniController::class, 'index'])->name('Alumni');

Route::get('/diii-teknik-sipil', [DIIITeknikSipilController::class, 'index'])->name('DIII_TEKNIK_SIPIL');

Route::get('/div-pjj', [DIVPJJController::class, 'index'])->name('DIV_PJJ');

Route::get('/div-tptp', [DIVTPTPController::class, 'index'])->name('DIV_TPTP');

Route::get('/div-psdku-oku', [DIVPSDKUOKUController::class, 'index'])->name('DIV_PSDKU_OKU');

Route::get('/akademik', [AkademikController::class, 'index'])->name('Akademik');

Route::get('/berita-terkini', [BeritaTerkiniController::class, 'index'])->name('Berita_Terkini');

Route::get('/lowongan-pekerjaan', [LowonganPekerjaanController::class, 'index'])->name('Lowongan_Pekerjaan');

Route::get('/blog-informasi/{slug}', [BlogInformasiController::class, 'index'])->name('Blog_Informasi');
