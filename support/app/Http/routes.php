<?php


use App\State;

Route::get('/', function () {
    dump(State::all());
    //return view('welcome');
});

Route::group(['as' => 'api::', 'middleware' => 'api'], function(){

    Route::post('/new', 'EntryController@create');

    Route::get('/entry/', 'EntryController@index');
});