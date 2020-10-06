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

Route::get('/index', array('as' => 'index', function(){
    return view('index');
}));

Route::get('/faq', array('as' => 'faq', function(){
    return view('faq');
}));

Route::get('/feedback', array('as' => 'feedback', function(){
    return view('feedback');
}));

Route::get('/university_page', array('as' => 'university', function(){
    return view('university_page');
}));

Route::get('/account_page', array('as' => 'account', function(){
    return view('account_page');
}));

Route::get('/login', array('as' => 'login', function(){
    return view('login');
}));