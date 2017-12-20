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


Route::get('/', function () {
    return redirect('/settings');

});
Route::resource('/settings', 'SettingController');
Route::get('/settings/{id}/delete', ['as' => 'settings.delete', 'uses' => 'SettingController@destroy']);