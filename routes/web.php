<?php

use Illuminate\Support\Facades\Route;

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
});
Route::get('/hello', function () {
   return view('hello');
});
Route::get('/hello1', function () {
  return view('hello1', ['user' => 'John']);
});
Route::get('/hello2/{user}', function ($user) {
  return view('hello2', ['user' => $user]);
});
use App\Http\Controllers\BookController;

Route::resource('books', BookController::class);

