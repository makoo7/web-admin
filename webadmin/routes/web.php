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

Auth::routes();

Route::get('/admin/login', function(){
    return view('admin.index');
});

Route::get('admin', array('as' => 'admin.get.login','uses' => 'AuthController@index'));

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['admin']], function () {

});

/* backend routes ends */