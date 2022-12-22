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
    $title = 'Benvenuto in Laravel' ;
    $navLinks = ['Home','test-1','test-2','Chi siamo'];

    return view('home', compact('title','navLinks'));

});

Route::get('/about', function(){
    $title = 'Chi Siamo' ;
    $navLinks = ['Home','test-1','test-2','Chi siamo'];

    return view('about', compact('title','navLinks'));
});
