<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\ResetPasswordController;
use App\Http\Controllers\Frontend\WishListController;
use App\Http\Controllers\Frontend\Account_DashboardController;
use App\Http\Controllers\Frontend\Account_OrdersController;
use App\Http\Controllers\Frontend\Account_edit_AddressController;
use App\Http\Controllers\Frontend\Account_editController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\OrderCompleteController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckOutController;
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


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[AboutController::class,'index']);
Route::get('/contact',[ContactUsController::class,'index']);

Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginPost'])->name('login.post');
Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/register',[LoginController::class,'registerPost'])->name('register.post');

Route::get('/reset_password',[ResetPasswordController::class,'index']);
Route::get('/wishlist',[WishListController::class,'index']);
Route::get('/dashboard',[Account_DashboardController::class,'index']);
Route::get('/orders',[Account_OrdersController::class,'index']);
Route::get('/account_details',[Account_editController::class,'index']);
Route::get('/addresses',[Account_edit_AddressController::class,'index']);
Route::get('/cart',[CartController::class,'index']);
Route::get('/checkout',[CheckOutController::class,'index']);
Route::get('/orderComplete',[OrderCompleteController::class,'index']);



Route::get('/test',function(){


    return view('test');
});