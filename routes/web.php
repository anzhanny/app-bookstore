<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PaymentMethodController;
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

Route::get('/paymentMethod',[PaymentMethodController::class,'index']);
Route::get('/add-paymentMethod', [PaymentMethodController::class, 'create']);
Route::post('/paymentMethod/store',[PaymentMethodController::class, 'store']);
Route::get('/paymentMethod/{id}',[PaymentMethodController::class, 'edit']);
Route::patch('/paymentMethod/update/{id}',[PaymentMethodController::class, 'update']);
Route::get('/paymentMethod/delete/{id}', [PaymentMethodController::class,'destroy']);

Route::get('/transaction',[TransactionController::class,'index']);
Route::get('/add-transaction', [TransactionController::class, 'create']);
Route::post('/transaction/store',[TransactionController::class, 'store']);
Route::get('/transaction/{id}',[TransactionController::class, 'edit']);
Route::patch('/transaction/update/{id}',[TransactionController::class, 'update']);
Route::get('/transaction/delete/{id}', [TransactionController::class,'destroy']);
