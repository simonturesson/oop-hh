<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('product', 'ProductController');
Route::resource('coffee', 'CoffeeController');

Route::get('/', 'PagesController@home');
Route::get('/brews', 'PagesController@brews');
Route::get('/recipes', 'PagesController@recipes');
Route::get('/contact', 'PagesController@contact');
Route::get('/admin', 'PagesController@admincoffe');

Route::get('resizeImage', 'ImageController@resizeImage');
Route::post('resizeImagePost',['as'=>'resizeImagePost','uses'=>'ImageController@resizeImagePost']);

