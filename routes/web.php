<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [BlogsController::class, 'index']);
// Route::get('/', [BlogsController::class, 'show']);
// Route::get('/', [BlogsController::class, 'showone']);

// Route::get('/user/profile', function () {
//     return view('blog');
// });

// Route::get('/user/blog', function () {
//     return view('components\blogpost');
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



Route::get('/', [App\Http\Controllers\BlogsController::class, 'index'])->name('welcome');