<?php

use Illuminate\Support\Facades\Route;

// 1. You will need to import the exact controller namespace path
use App\Http\Controllers\BooksController;

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

Route::get('/', [BooksController::class, 'index']);

// 2. Specify the method name which handles complete name registration
Route::post('/register-user', [BooksController::class, 'saveCompleteName']);

// 3. Specify the method name that lists the books available
Route::get('/select-books', [BooksController::class, 'listBooks']);

// 4. Specify the missing HTTP request method
Route::post('/reserve-books', [BooksController::class, 'reserveBooks']);

 // 5. Specify the missing endpoint that will be used for displaying the thank you page
Route::get('/thank-you', [BooksController::class, 'showThankYouPage']);