<?php


use App\State;

Route::get('/', function () {
    dump(State::all());
    //return view('welcome');
});

Route::group(['as' => 'api::'], function(){

});