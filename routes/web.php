<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\EmpruntController;

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cars',[CarController::class, "index"]);

Route::get('/myrentals', [EmpruntController::class, "index"]);

Route::get('/myrentals-details', function () {
    return view('myrentals-details');
});

Route::get('/reservation/{id}', [CarController::class, "show"])->name("reservation");

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/register', [RegistrationController::class, 'create']);

Route::post('/register', [RegistrationController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);

Route::post('/login', [SessionController::class, 'store']);

Route::get('/logout', [SessionController::class, 'destroy']);

Route::get('/', IndexController::class);

Route::post('/emprunt', [EmpruntController::class, 'store'])->name('emprunt');