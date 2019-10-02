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
    return view('diary.index');
});

Auth::routes();

Route::resource('diary', 'DiaryController');
Route::get('diary/create', ['as' => 'diary.create', 'uses' => 'DiaryController@create']);
// Route::get('diary', 'DiaryController@index');


