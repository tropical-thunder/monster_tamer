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



Route::get('/', 'MonsterDataController@home')->name('home');


Route::get('/battle', 'MonsterDataController@battle')->name('battle');

Route::post('/battle/capture', 'MonsterDataController@store')->name('battle.capture');


Route::get('/bokujou', 'MonsterDataController@show_bokujou')->name('bokujou');

Route::get('/bokujou/{id}', 'MonsterDataController@show_bokujou_detail')->name('bokujou.detail');

Route::post('/bokujou/update/{id}', 'MonsterDataController@bokujou_update')->name('bokujou.update');

Route::delete('/bokujou/delete/{id}', 'MonsterDataController@destroy')->name('bokujou.delete');


Route::get('/zukan', 'MonsterDataController@show_zukan')->name('zukan');

Route::get('/zukan/{id}', 'MonsterDataController@show_zukan_detail')->name('zukan.show');








  


