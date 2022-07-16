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

Route::get('/', function () {
    return view('welcome1');
});

Route::get('/about',function(){
    echo "<h1>สวัสดีครัช</h1>";
});

Route::get('/users/{fname}/{lname}',function($fname,$lname){
    echo "<h1>ชื่อจริง :  $fname</h1>";
    echo "<h1>นามสกุล :  $lname</h1>";
    

});