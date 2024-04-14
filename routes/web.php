<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortfoliosController;
use App\Http\Controllers\MailController;


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


Route::get('/',[PortfoliosController::class,'home'])->middleware('alreadyLoggedIn');
Route::get('/homestudent',[PortfoliosController::class,'homestudent']);
/*
get portfolio info route
*/
Route::get('/Editinfo',[PortfoliosController::class,'editinfo'])->middleware('isLoggedIn');
/*
login user route
*/
Route::post('login-user',[PortfoliosController::class,'loginUser'])->name('login-user');

/*
logout user route
*/
Route::get('/logout',[PortfoliosController::class,'logout']);
/*
update portfolio user route
*/
Route::put('update-student/{id}',[PortfoliosController::class,'update']);

/*
mail sending password to your email
*/
Route::get('/send-email',[MailController::class,'sendEmail'])->name('send-email');


