<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BAController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StoCabangController;
use App\Http\Controllers\BeritaAcaraController;

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


Route::get('/', [AuthController::class, 'index'])->name("web.login")->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->name('web.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('web.logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/profile/{user:user_id}', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/edit-password/update', [ProfileController::class, 'updatePassword'])->name('password.update');

    //Route List Users
    Route::resource('/user', UserController::class)->middleware('admin');

    //Route Mitra
    Route::resource('/mitra', MitraController::class)->middleware('admin');

    //Route STO
    Route::resource('/sto', StoCabangController::class)->middleware('admin');

    //Route Berita Acara
    Route::resource('/baonline', BeritaAcaraController::class);
    Route::get('/status/approve/{id}', [StatusController::class, 'status_approve'])->name('status.approve');
    Route::get('/status/reject/{id}', [StatusController::class, 'status_reject'])->name('status.reject');
    Route::get('/status/approve-reject/{id}', [StatusController::class, 'status_approve_from_reject'])->name('status.approve-reject');

    Route::get('/approved', [BAController::class, 'approved'])->name('ba.approved');
    Route::get('/need-approved', [BAController::class, 'need_approved'])->name('ba.needapproved');
    Route::get('/rejected', [BAController::class, 'rejected'])->name('ba.rejected');
});
