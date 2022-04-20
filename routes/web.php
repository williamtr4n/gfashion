<?php

use Illuminate\Support\Facades\Route;

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
// use app\Http\Controllers\usercontroller;
use App\Http\Controllers\usercontroller;
Route::get('/', function () {
    return view('menu');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::controller(usercontroller::class)->group(function () {
//     Route::get('/home', 'home');
//     // Route::get('/home/{id}', hello(5));
// });
Route::get('/login', [ usercontroller::class, 'loginnn']);
Route::post('/login', [userController::class,'process_login']);
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});