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

/* Fase 3 */
Route::group(['prefix'=>'admin'], function() {
    
    Route::get('products','AdminProducts@index');
    
    Route::get('categories','AdminCategories@index'); 
    
});

/* CRUD Categories */
Route::get('categories',['as'=>'categories','uses'=>'CategoriesController@index']);
Route::post('categories',['as'=>'categories.store','uses'=>'CategoriesController@store']);
Route::get('categories/create',['as'=>'categories.create','uses'=>'CategoriesController@create']);
Route::get('categories/{id}/destroy',['as'=>'categories.destroy','uses'=>'CategoriesController@destroy']);
Route::get('categories/{id}/edit',['as'=>'categories.edit','uses'=>'CategoriesController@edit']);
Route::put('categories/{id}/update',['as'=>'categories.update','uses'=>'CategoriesController@update']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('exemplo','My_Controller@exemplo');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');