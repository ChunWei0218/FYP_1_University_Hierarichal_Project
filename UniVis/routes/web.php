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

Route::get('index', function(){
    return View::make('index');
});

Route::get('faq', function(){
    return View::make('faq');
});

Route::get('project_srch', function(){
    return View::make('project_srch');
});

Route::get('university_srch', function(){
    return View::make('university_srch');
});

Route::get('account', function(){
    return View::make('account');
});

