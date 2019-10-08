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
    if (Auth::check()) {
        return redirect()->route('diary.index');
    } else {
        return redirect()->to('login');
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('diary', ['as' => 'diary.index', 'uses' => 'DiaryController@index']);
Route::get('diary/create', ['as' => 'diary.create', 'uses' => 'DiaryController@create']);
Route::post('diary/store', ['as' => 'diary.store', 'uses' => 'DiaryController@store']);
Route::get('diary/{id}', ['as' => 'diary.show', 'uses' => 'DiaryController@show']);
Route::get('diary/{id}/edit', ['as' => 'diary.edit', 'uses' => 'DiaryController@edit']);
Route::put('diary/{id}/user', ['as' => 'diary.update', 'uses' => 'DiaryController@update']);
Route::delete('diary/{id}/user', ['as' => 'diary.user.delete', 'uses' => 'DiaryController@destroy']);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
