<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

//users: Display all users (index)
//users/create: Create a new user (create)
//users/{user}: Display a specific user (show)
//users/{user}/edit: Edit a specific user (edit)

Route::resource('users', UserController::class);

