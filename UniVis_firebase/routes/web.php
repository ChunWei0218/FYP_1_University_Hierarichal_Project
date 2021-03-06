<?php

use Illuminate\Support\Facades\Route;

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

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

//Route::get('/', [App\Http\Controllers\PagesController::class, 'index']);
//Route::get('/faq', 'PagesController@faq');
//Route::get('/university', 'PagesController@university');
Route::get('/', array('as' => 'index', function(){
    return view('index');
}));

//Route::get('/faq', function(){
//    return view('faq');
//});

Route::get('/faq', array('as' => 'faq', function(){
    return view('faq');
}));

Route::get('/feedback', array('as' => 'feedback', function(){
    return view('feedback');
}));

Route::get('/university_viewpage', array('as' => 'university', function(){
    return view('university_viewpage');
}));

Route::get('/account_page', array('as' => 'account', function(){
    return view('account_page');
}));

Route::get('/university_inserttable_page', array('as' => 'university_insert_table', function(){
    return view('university_inserttable_page');
}));

Route::get('/university_code', array('as' => 'university_code', function(){
    return view('university_code');
}));

Route::get('/university_table_page', array('as' => 'university_table_page', function(){
    return view('university_table_page');
}));
Route::get('/university_page', array('as' => 'university_editpage', function(){
    return view('university_page');
}));

Route::get('/university_relationshiptable_page', array('as' => 'university_relationshiptable_page', function(){
    return view('university_relationshiptable_page');
}));


Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

// Route::get('/university_table_page', 'App\Http\Controllers\FirebaseController@readfirebase');
Route::post('/university_table_page', 'App\Http\Controllers\FirebaseController@addData');
Route::post('/university_page', 'App\Http\Controllers\FirebaseController@addData');
Route::post('/university_relationshiptable_page', 'App\Http\Controllers\FirebaseController@addRelationship');
// Route::post('/university_table_page', 'App\Http\Controllers\FirebaseController@updateData');



