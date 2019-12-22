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

Route::get('/','FrontController@index' )->name('home');

Auth::routes();

Route::get('/profile',function(){
	return view('frontend.profile');
})->name('profile');


Route::get('running/election/{id}','FrontController@RunningElection');
Route::get('recent/{id}','FrontController@Recent');





//Admin

Route::get('/dashboard','AdminController@index')->name('dashboard');
Route::get('/logingout','AdminController@LogOut')->name('logingout');

Route::post('/store/running-election','AdminController@StoreRunElection')->name('store-runningelection');
Route::get('delete/re/{id}','AdminController@DeleteRe');
Route::get('edit/re/{id}','AdminController@EditRe');
Route::post('update/re/{id}','AdminController@UpdateRe');

Route::get('/recent','AdminController@RecentIndex')->name('recent');
Route::get('delete/recent/{id}','AdminController@DeleteRecent');
Route::get('edit/recent/{id}','AdminController@EditRecent');
Route::post('update/recent/{id}','AdminController@UpdateRecent');
Route::post('/store/recent','AdminController@StoreRecent')->name('store-recent');