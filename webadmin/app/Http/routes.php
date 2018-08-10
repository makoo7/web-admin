<?php

/**
 * *Admin Panel
*/

Route::get('admin',                 array('as' => 'admin.get.login',        'uses' => 'AuthController@index'));

Route::group(['middleware' => ['admin']], function () {

});