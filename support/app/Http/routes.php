<?php

Route::group(['as' => 'api::', 'middleware' => 'api'], function(){

    Route::post('new', 'EntryController@store');

    Route::get('entry', 'EntryController@index');
});

Route::group(['as' => 'backend::', 'middleware' => ['auth', 'csrf']], function(){
    Route::get('home', function(){
        return view('home');
    });

    Route::get('/', function(){
        return view('home');
    });

});


Route::group(['middleware' => 'csrf'], function(){
    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);
});