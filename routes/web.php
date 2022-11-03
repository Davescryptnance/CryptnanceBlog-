<?php

use App\Http\Controllers\MailController;
use App\Models;
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

Route::get('/',  [MailController::class, 'home']);
Route::post('/', [MailController::class, 'store']);
Route::get('/about',  [MailController::class, 'about']);
Route::get('/more1',  [MailController::class, 'read1']);
Route::get('/more2',  [MailController::class, 'read2']);
Route::get('/more3',  [MailController::class, 'read3']);
// Route::get('/store',  [PizzaController::class, 'store']);


