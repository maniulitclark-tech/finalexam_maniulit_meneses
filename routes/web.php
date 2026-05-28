<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeecontroller;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');
    
    Route::get('employee', [App\Http\Controllers\employeecontroller::class, 'index']);
    Route::post('employee', [App\Http\Controllers\employeecontroller::class, 'index']);


    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    // Employee routes
    Route::get('employee', [\App\Http\Controllers\employeecontroller::class, 'index'])->name('employee.index');

    
    Route::get('student', [\App\Http\Controllers\employeecontroller::class, 'index'])->name('student.index');
    Route::get('student/create', [\App\Http\Controllers\employeecontroller::class, 'create'])->name('student.create');
    Route::put('student', [\App\Http\Controllers\employeecontroller::class, 'store'])->name('student.store');





    //Profile routes
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
