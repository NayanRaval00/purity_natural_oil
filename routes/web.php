<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    // return view('welcome');
    return view('front.index');
});
Route::get('about',[UserController::class,'about']);
Route::get('contact-us',[UserController::class,'contactUs']);
Route::get('certificates',[UserController::class,'certificates']);
Route::get('product/{id}',[UserController::class,'prodcustDetails']);