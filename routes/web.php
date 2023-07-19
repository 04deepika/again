<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\DonorformController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\AdminController;

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
/*Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/donor', function () {
    return view('frontend.bedonor');
});
Route::get('/donorform', function () {
    return view('frontend.donor.donorform');
});*/
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/donorlist', function () {
    return view('frontend.donor.index');
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/shortestpath', [App\Http\Controllers\ShortestPathController::class, 'calculateDistance'])->name('distance');
//Route::resource('registers', SignupController::class);
Route::resource('donor', DonorformController::class);
Route::resource('receivers', RequestController::class);
Route::resource('admin', AdminController::class);
Route::get('/donorr', [App\Http\Controllers\AdminController::class, 'Donor'])->name('donorr');
Route::get('/requests', [App\Http\Controllers\AdminController::class, 'Request'])->name('requestlist');


