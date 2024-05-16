<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorizationController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
//Route::post('/login', [StripeController::class, 'order'])->name('order')->middleware('preventDirectAccess');
Route::get('/login', [AuthorizationController::class, 'indexLogin'])->name('login');
Route::get('/register', [AuthorizationController::class, 'indexRegister'])->name('register');
Route::post('/authLogin', [AuthorizationController::class, 'authLogin'])->name('authLogin');
Route::post('/authRegister', [AuthorizationController::class, 'authRegister'])->name('authRegister');


Route::middleware("auth")->group(function(){
    Route::get('/dashboard', [AuthorizationController::class, 'indexDashboard'])->name('dashboard');
});