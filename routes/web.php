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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/' , ['as'=>'trang-chu', 'uses'=> 'PageController@getIndex']);

Route::get('/san-pham' , ['as'=>'san-pham', 'uses'=> 'PageController@getProduct']);

Route::get('/lien-he' , ['as'=>'lien-he', 'uses'=> 'PageController@getContact']);

Route::get('/dang-ky' , ['as'=>'dang-ky', 'uses'=> 'PageController@getRegister']);

Route::get('/thong-tin-cua-toi' , ['as'=>'thong-tin-cua-toi', 'uses'=> 'PageController@getMyAccount']);

Route::get('/gio-hang' , ['as'=>'gio-hang', 'uses'=> 'PageController@getShopCart']);

Route::get('/san-pham-yeu-thich' , ['as'=>'san-pham-yeu-thich', 'uses'=> 'PageController@getWishlist']);

Route::get('/thanh-toan' , ['as'=>'thanh-toan', 'uses'=> 'PageController@getCheckout']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
