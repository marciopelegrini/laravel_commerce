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
Route::group(['prefix'=>'admin', 'where'=>['id' => '[0-9]+']], function() {
    Route::group(['prefix'=>'categories'], function() {
        /* CRUD Categories */
        Route::get('/',['as'=>'categories','uses'=>'CategoriesController@index']);
        Route::post('/',['as'=>'categories.store','uses'=>'CategoriesController@store']);
        Route::get('create',['as'=>'categories.create','uses'=>'CategoriesController@create']);
        Route::get('{id}/destroy',['as'=>'categories.destroy','uses'=>'CategoriesController@destroy']);
        Route::get('{id}/edit',['as'=>'categories.edit','uses'=>'CategoriesController@edit']);
        Route::put('{id}/update',['as'=>'categories.update','uses'=>'CategoriesController@update']);
    });
    Route::group(['prefix'=>'products'], function() {
        /* CRUD Products */
        Route::get('', ['as' => 'products', 'uses' => 'ProductsController@index']);
        Route::post('', ['as' => 'products.store', 'uses' => 'ProductsController@store']);
        Route::get('create', ['as' => 'products.create', 'uses' => 'ProductsController@create']);
        Route::get('{id}/destroy', ['as' => 'products.destroy', 'uses' => 'ProductsController@destroy']);
        Route::get('{id}/edit', ['as' => 'products.edit', 'uses' => 'ProductsController@edit']);
        Route::put('{id}/update', ['as' => 'products.update', 'uses' => 'ProductsController@update']);
    });
});


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