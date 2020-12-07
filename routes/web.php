<?php

use Illuminate\Support\Facades\Route;
use App\Https\Controllers\Car;
use App\Https\Controllers\engine_type;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('cars',CarController::class);
Route::resource('engine_types',engine_typeController::class);
Route::resource('logins',LoginController::class);
Route::resource('Messages',MessageController::class);
Route::resource('Registers',RegisterController::class);
Route::resource('Roles',RoleController::class);
Route::resource('Sales',SaleController::class);
Route::resource('Transmission_types',Transmission_typeController::class);
Route::resource('Vehicle_types',Vehicle_typeController::class);