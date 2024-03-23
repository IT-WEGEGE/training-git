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
<<<<<<< HEAD
Route::get('home',function(){
=======


//hai

Route::get('/home', function() {
    return view('home');
});

//hai



>>>>>>> 4df2be71fa02970f6b2ec4e23062ef06a1e85303
=======
//ini komen
Route::get('home', function() {
>>>>>>> 222abc1f5c73ee953ba2f28237870eb417410369
    return 'home';
});

>>>>>>> 222abc1f5c73ee953ba2f28237870eb417410369
