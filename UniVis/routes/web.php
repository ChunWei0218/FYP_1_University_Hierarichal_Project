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

Route::get('/university_page', array('as' => 'university', function(){
    return view('university_page');
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

// Route::get('/university_table_page', array('as' => 'university_table_page', function(){
//     return view('university_table_page');
// }));


Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

Route::get('/university_table_page', 'App\Http\Controllers\FirebaseController@readfirebase');

