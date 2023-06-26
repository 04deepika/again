<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\DonorformController;


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

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/donor', function () {
    return view('frontend.bedonor');
});
Route::get('/donorform', function () {
    return view('frontend.donor.donorform');
});
Route::get('/NeedBlood', function () {
    return view('frontend.needblood');
});
Route::get('/log', function () {
    return view('frontend.signin');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::resource('registers', SignupController::class);
Route::resource('donor', DonorformController::class);

