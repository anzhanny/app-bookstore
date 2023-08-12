<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PaymentmethodtController;
use App\Http\Controllers\TransactionController;





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

Route::get('/', function () {
    return view('welcome');
    // return Redirect::to('login');
});

Route::get('/users',[UsersController::class,'index']);
Route::get('/add-users', [UsersController::class, 'create']);
Route::post('/users/store',[UsersController::class, 'store']);
Route::get('/users/{id}',[UsersController::class, 'edit']);
Route::patch('/users/update/{id}',[UsersController::class, 'update']);
Route::get('/users/delete/{id}', [UsersController::class,'destroy']);

Route::get('/book',[BookController::class,'index']);
Route::get('/add-book', [BookController::class, 'create']);
Route::post('/book/store',[BookController::class, 'store']);
Route::get('/book/{id}', [BookController::class, 'edit']);
Route::patch('/book/update/{id}', [BookController::class,'update']);
Route::get('/book/delete/{id}', [BookController::class,'destroy']);

Route::get('/paymentmethod',[PaymentmethodController::class,'index']);
Route::get('/add-paymentmethod', [PaymentmethodController::class, 'create']);
Route::post('/paymentmethod/store',[PaymentmethodController::class, 'store']);
Route::get('/paymentmethod/{id}',[PaymentmethodController::class, 'edit']);
Route::patch('/paymentmethod/update/{id}',[PaymentmethodController::class, 'update']);
Route::get('/paymentmethod/delete/{id}', [PaymentmethodController::class,'destroy']);

Route::get('/transaction',[TransactionController::class,'index']);
Route::get('/add-transaction', [TransactionController::class, 'create']);
Route::post('/transaction/store',[TransactionController::class, 'store']);
Route::get('/transaction/{id}',[TransactionController::class, 'edit']);
Route::patch('/transaction/update/{id}',[TransactionController::class, 'update']);
Route::get('/transaction/delete/{id}', [TransactionController::class,'destroy']);
