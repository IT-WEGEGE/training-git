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
Route::get('home',function(){
    return 'home';
});
<<<<<<< HEAD


//hai

Route::get('/home', function() {
    return view('home');
});

//hai



=======
//ini komen
Route::get('home', function() {
    return 'home';
});

>>>>>>> 222abc1f5c73ee953ba2f28237870eb417410369
