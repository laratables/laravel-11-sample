<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/users',\App\Http\Controllers\UserController::class);
Route::get('/datatables/users',[\App\Http\Controllers\UserController::class,'getDatatableData'])->name('datatables');
