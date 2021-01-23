<?php

use Illuminate\Support\Facades\Route;
use App\Https\Controllers\Car;
use App\Https\Controllers\Engine_type;
use App\Https\Controllers\Login;
use App\Https\Controllers\Message;
use App\Https\Controllers\Register;
use App\Https\Controllers\Role;
use App\Https\Controllers\Sale;
use App\Https\Controllers\Transmission_type;
use App\Https\Controllers\Vehicle;
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

Route::middleware(['auth'])->group(function () {

    /* homepage, primjetiti ->name('home') na kraju */
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

Route::resource('cars',CarController::class);
Route::resource('engine_types',engine_typeController::class);
Route::resource('logins',LoginController::class);
Route::resource('messages',MessageController::class);
Route::resource('registers',RegisterController::class);
Route::resource('roles',RoleController::class);
Route::resource('sales',SaleController::class);
Route::resource('transmission_types',Transmission_typeController::class);
Route::resource('vehicle_types',Vehicle_typeController::class);
Route::resource('users',UserController::class);
Route::resource('changePassword',ChangePasswordController::class);


});

/* ovdje su rute za login, registraciju, change password, itd. */
require __DIR__.'/auth.php';

