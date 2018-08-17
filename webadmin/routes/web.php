<?php

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

/* front End Routes start */

Route::get('/', function () {
    return view('front.index');
});

/* front End Routes ends */

/* backend routes start */

Route::get('/admin/login', function(){
    return view('admin.index');
});

Auth::routes();

Route::get('admin', array('as' => 'admin.get.login','uses' => 'AuthController@index'));
Route::any('admin/forgotpassword', array('as' => 'admin.forgotpassword', 'uses' => 'AuthController@ForgotPassword'));

Route::get('/home', 'HomeController@index')->name('home');
Route::any('profile','HomeController@profile')->name('profile');

Route::group(['middleware' => ['admin']], function () {

});

/* backend routes ends */