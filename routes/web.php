<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cars', function () {
    return view('cars');
});

Route::get('/myrentals', function () {
    return view('myrentals');
});

Route::get('/myrentals-details', function () {
    return view('myrentals-details');
});

Route::get('/register', [RegistrationController::class, 'create']);

Route::post('/register', [RegistrationController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);

Route::post('/login', [SessionController::class, 'store']);

Route::get('/logout', [SessionController::class, 'destroy']);

Route::get('/reservation', function () {
    return view('reservation');
});


// Route::get('/register', 'register');
// Route::post('/register', 'InscriptionController@processing');

// Route::get('/login', 'login');
// Route::get('/cars', 'cars');
// Route::get('/myrentals', 'myrentals');
// Route::get('/myrentals-details', 'myrentals-details');
// Route::get('/reservation', 'reservation');





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
