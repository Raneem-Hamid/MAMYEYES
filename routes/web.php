<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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
    return view('welcome');
});

// about page
Route::get('/about', function () {
    return view('Home.about');
});

// contact page
Route::get('/contact', function () {
    return view('Home.contact');
});

// sitters page
Route::get('/sitters', function () {
    return view('Home.sitters');
});

// login page
Route::get('/login', function () {
    return view('Users.login');
});

// register page
Route::get('/register', [UsersController::class,'create']);
Route::post('/register', [UsersController::class, 'store'])->name('register');

// profile page

Route::get('/profile/{id}', [UsersController::class, 'view']);
Route::get('/edit/{id}', [UsersController::class, 'show'])->name('edit');
Route::put('/edit/{id}', [UsersController::class, 'update'])->name('update');


// booking page
Route::get('/booking', function () {
    return view('Home.booking');
});

// booking page
Route::get('/card', function () {
    return view('Home.booking');
});

Route::get('/test', function () {
    return view('test');
});




// Route::resource('users', UsersController::class);