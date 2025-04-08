<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');
    Route::get('students3', [\App\Http\Controllers\stud_list3Controller::class, 'index'])->name('students3.index');
    Route::get('students2', [\App\Http\Controllers\stud_list2Controller::class, 'index'])->name('students2.index');
    Route::get('students', [\App\Http\Controllers\stud_listController::class, 'index'])->name('students.index');
    Route::get('BSIT3A', [\App\Http\Controllers\bsit3aController::class, 'index'])->name('BSIT3A.lists');
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
