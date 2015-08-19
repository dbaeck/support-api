<?php


Route::get('/', function () {

});

Route::get('/home', ['middleware' => 'auth', function () {
    return view('home');
}]);

Route::group(['as' => 'api::', 'middleware' => 'api'], function(){

    Route::post('new', 'EntryController@store');

    Route::get('entry', 'EntryController@index');
});

Route::group(['as' => 'backend::', 'prefix' => 'manage', 'middleware' => 'auth|csrf'], function(){

});


Route::group(['middleware' => 'csrf'], function(){
    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);
});