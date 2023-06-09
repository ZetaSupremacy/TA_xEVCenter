<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\emailController;
use Illuminate\Support\Facades\Hash;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pengunjung', PengunjungController::class);
Route::get('/pengunjung/reservasiConfirmation/{id}', [PengunjungController::class, 'reservasiConfirmation']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/test2', function () {
    return view('registrasi');
});

Route::get('/email/{group_code}',[emailController::class, 'emailVerifikasi']);
Route::post('/email/confirmationCode/{id}',[emailController::class, 'codeVerifikasi']);
Route::get('/email/deleted/{group_code}/{hashCode}',[emailController::class, 'registrationDeleted']);

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [UserController::class, 'login']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/testQR', [UserController::class, 'testQR']);
});

require __DIR__.'/auth.php';
