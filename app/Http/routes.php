<?php

Route::get('/', function () {
    return 'Home';
});

Route::group(['prefix' => 'admin'], function () {

    // Login
    Route::group(['prefix' => 'auth'], function () {
        Route::get('/', ['as' => 'auth.index', 'uses' => 'Auth\AuthController@getIndex']);
        Route::post('/', 'Auth\AuthController@postIndex');
        Route::get('logout', 'Auth\AuthController@logout');
    });

    // Forgot password
    Route::group(['prefix' => 'password'], function () {
        Route::get('/', ['as' => 'auth.password', 'uses' => 'Auth\PasswordController@getIndex']);
        Route::post('/', 'Auth\PasswordController@postIndex');
        Route::get('reset/{token}', 'Auth\PasswordController@getReset');
        Route::post('reset', 'Auth\PasswordController@postReset');
    });

    // Panel
    Route::group(['middleware' => ['auth', 'permission']], function () {
        Route::get('/', ['as' => 'dashboard', function () {
            return view('dashboard');
        }]);

        // Users
        Route::resource('users', 'UsersController');

        // Institutions
        Route::get('/institutions', ['as' => 'institutions.index', 'uses' => 'UsersController@getIndex']);
        Route::get('/institutions/create', ['as' => 'institutions.create', 'uses' => 'UsersController@getCreate']);
    });

});