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
    $team = [
        [
            'img' => 'https://img.freepik.com/free-photo/blithesome-student-green-t-shirt-posing-with-laptop-indoor-photo-amazed-male-freelancer-isolated_197531-20164.jpg?w=2000',
            'name' => 'Karl Kingston',
            'descr' => 'Graphic Director',
        ],

        [
            'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaBcNbZnKavUISBWkEA46u4kRcAe0dMVM0UQ&usqp=CAU',
            'name' => 'Carla Carsten',
            'descr' => 'Systems engineer',
        ],

        [
            'img' => 'https://www.markeluk.com/link/9f235bc9bc08432ca28202d4172496b3.aspx',
            'name' => 'Joe Johnson',
            'descr' => 'Full-Stack Developer',
        ],

        [
            'img' => 'https://www.thebalancemoney.com/thmb/OXJZZUS9ZnHxmTnCMfpa2gg2xZY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/173807990-56a0667d3df78cafdaa16ab3.jpg',
            'name' => 'Marla James',
            'descr' => 'Human Sesources Manager',
        ],

        [
            'img' => 'https://www.hrmanagementapp.com/wp-content/uploads/2019/06/freelancer-2.jpg',
            'name' => 'Gina Müller',
            'descr' => 'Frontend Developer',
        ],

        [
            'img' => 'https://blog.amartha.com/wp-content/uploads/2020/11/cara-atur-keuangan-untuk-freelancer.jpg',
            'name' => 'Philipp Cimadirapa',
            'descr' => 'Backend Developer',
        ],

        [
            'img' => 'https://www.sunlife.co.id/content/dam/sunlife/legacy/assets/id/Life%20Moments/Starting%20My%20Career/4%20things%20every%20freelancer%20needs%20to%20succeed.jpg',
            'name' => 'Peter Lee Chen',
            'descr' => 'Marketing Manager',
        ],

        [
            'img' => 'https://assets-global.website-files.com/608930ba29312232c535dd3b/615ebad33a198d32318bcdac_60a7c5862bd8e051d0bdfb03_man-drinking-coffee-laptop-small.jpg',
            'name' => 'Larry Barry',
            'descr' => 'Coffee Drinker',
        ],
    ];

    return view('about', compact('title','navLinks','team'));
});
