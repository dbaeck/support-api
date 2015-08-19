<?php


Route::get('/', function () {

});

Route::get('home', function(){
    dump('hi');
});

Route::group(['as' => 'api::', 'middleware' => 'api'], function(){

    Route::post('new', 'EntryController@store');

    Route::get('entry', 'EntryController@index');
});

Route::group(['as' => 'backend::', 'prefix' => 'manage', 'middleware' => 'auth|csrf'], function(){

});


Route::group(['as' => 'auth::', 'prefix' => 'auth', 'middleware' => 'csrf'], function(){
    Route::get('login', ['as' => 'login', 'uses' => '\App\Http\Controllers\Auth\AuthController@getLogin']);
    Route::post('login', ['as' => 'login', 'uses' => '\App\Http\Controllers\Auth\AuthController@postLogin']);
    Route::get('logout', ['as' => 'logout', 'uses' => '\App\Http\Controllers\Auth\AuthController@getLogout']);

    Route::get('register', ['as' => 'register', 'uses' => '\App\Http\Controllers\Auth\AuthController@getRegister']);
    Route::post('register', ['as' => 'register', 'uses' => '\App\Http\Controllers\Auth\AuthController@postRegister']);
});