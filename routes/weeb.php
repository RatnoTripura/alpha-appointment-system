<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DoctorController;

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

Route::resource('backend/roles', RoleController::class);
Route::resource('backend/doctors', DoctorController::class);

Route::get('/', [FrontEndController::class, 'index'])->name('frontend.home');
Route::get('/contact', [FrontEndController::class, 'contactUs'])->name('frontend.contactus');
// Route::get('/login', [FrontEndController::class, 'login'])->name('frontend.login');
// Route::get('/signup', [FrontEndController::class, 'signup'])->name('frontend.sign_up');
Route::get('/show', [FrontEndController::class, 'show'])->name('frontend.show');
Route::get('/book-now', [FrontEndController::class, 'booking'])->name('frontend.book-now');

Route::get('/backend', function () {
    return view('backend.index');
});
