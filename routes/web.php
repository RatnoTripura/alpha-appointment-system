<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\BackendController;
use Illuminate\Support\Facades\Route;

/*
|-------------------------------------------------------------------------|
| Web Routes                                                              |
|-------------------------------------------------------------------------|
|                                                                         |
| Here is where you can register web routes for your application. These   |
| routes are loaded by the RouteServiceProvider and all of them will      |
| be assigned to the "web" middleware group. Make something great!        |
|                                                                         |
|-------------------------------------------------------------------------|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('backend/messages/store', [MessageController::class, 'store'])->name('backend.messages.store');
Route::get('backend/messages', [MessageController::class, 'index'])->name('backend.messages');
Route::get('backend/users', [BackendController::class, 'show_users'])->name('backend.users');

require __DIR__ . '/auth.php';
require __DIR__ . '/weeb.php';
