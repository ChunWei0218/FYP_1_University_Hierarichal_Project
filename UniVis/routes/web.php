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
    return view('welcome');
});

Route::get('/index', 'AppController@index');

Route::get('/faq', function(){
    return view('faq');
});

Route::get('/project_page', function(){
    return view('project_page');
});

Route::get('/university_page', function(){
    return view('university_page');
});
