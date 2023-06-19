<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\emailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\settingController;
use App\Http\Controllers\FeedbackController;
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
Route::post('/pengunjung/reservasiConfirmation/attendConfirmation', [PengunjungController::class, 'attendConfirmation']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/test2', function () {
    return view('registrasi');
});

//email
Route::get('/email/{group_code}',[emailController::class, 'emailVerifikasi']);
Route::post('/email/confirmationCode/{id}',[emailController::class, 'codeVerifikasi']);
Route::get('/email/deleted/{group_code}/{hashCode}',[emailController::class, 'registrationDeleted']);

//-------------------------------

//login
Route::get('/login', function () {
    return view('login');
})->name('login');;

Route::post('/login', [UserController::class, 'login']);
//---------------------------------

//auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/validateCode', [UserController::class, 'validateCode']);
    Route::post('/ConfirmationCode', [UserController::class, 'ConfirmationCode']);
    Route::post('/logout', [UserController::class])->name('logout');
    
    //dashboard
    Route::get('/dashboard', [DashboardController::class, 'Dashboard'])->name('dashboard');
    Route::get('/allowdate', function () {
        return view('admin.allowDate');
    });
    Route::get('/kuota', function () {
        return view('admin.kuota');
    });
    Route::get('/setting', [settingController::class, 'index']);
    Route::post('/allow_days', [settingController::class, 'updateAllowDays']);
    
    Route::get('/checkinDashboard', [DashboardController::class, 'checkinDashboard']);
    Route::get('/registrationDashboard', [DashboardController::class, 'registrationDashboard']);
    Route::get('/registrationDashboard/{encrypt}', [DashboardController::class, 'registrationDashboardDetail']);
    Route::get('/feedbackDashboard', [DashboardController::class, 'feedbackDashboard']);
});
//----------------------------------

//feedback
Route::resource('feedback', FeedbackController::class);

//----------------------------------
require __DIR__.'/auth.php';
