<?php

use App\Http\Controllers\PizzaController;
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

Route::get('/',  [PizzaController::class, 'home']);
Route::get('/about',  [PizzaController::class, 'about']);
Route::get('/more1',  [PizzaController::class, 'read1']);
Route::get('/more2',  [PizzaController::class, 'read2']);
Route::get('/more3',  [PizzaController::class, 'read3']);


