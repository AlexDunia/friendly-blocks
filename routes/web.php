<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\RegisterController;
use App\Models\User;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [RegisterController::class, 'index']);

// Route::get('/user/profile', function () {
//     return view('blog');
// });

// The next code is to send a post request to log out. 
Route::post('/logout', [RegisterController::class, 'logout']);

// Register user
Route::get('/user/register', [RegisterController::class, 'create']);
// Store user registered information to the database.
Route::post('/user', [RegisterController::class, 'store']);

// User profile 
Route::get('/profile', [RegisterController::class, 'profile']);

// Enabe user login. 
Route::get('/user/login', [RegisterController::class, 'login']);
// Verify and store users login
Route::post('/authenticate', [RegisterController::class, 'authenticate']);



Route::get('/', [App\Http\Controllers\RegisterController::class, 'index'])->name('welcome');