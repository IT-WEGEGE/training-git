<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\studentController;
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

Route::get('hello',function(){
    return view('student');
});

<<<<<<< HEAD
//haloooooooo
//hai
=======
Route::get('/home', function() {
    return view('home');
});


>>>>>>> bfcd1ed3a8d47c6d491af5e23dacae29f233a883

