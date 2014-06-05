<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/**
 * Multi language group
 */
Route::group(
    setMultilangRouting(),
    function () {
        Route::group(
            ['before' => 'auth'],
            function () {
                Route::get('account', ['as' => 'account', 'uses' => 'AccountController@account']);
                Route::get('account/edit', ['as' => 'account.edit', 'uses' => 'AccountController@edit']);

                Route::group(
                    ['prefix' => 'api/v1'],
                    function () {
                        Route::resource('account', 'AccountApiController', ['only' => ['show', 'update', 'destroy']]);
                    }
                );
            }
        );

        Route::get('login', ['as' => 'login', 'uses' => 'UserController@login']);
        Route::post('login', ['as' => 'post.login', 'uses' => 'UserController@postLogin']);
        Route::get('register', ['as' => 'register', 'uses' => 'UserController@register']);
        Route::post('register', ['as' => 'post.register', 'uses' => 'UserController@postRegister']);
        Route::get('logout', ['as' => 'logout', 'uses' => 'UserController@logout']);
        Route::get('/', ['as' => 'home', 'uses' => 'HomeController@showWelcome']);
        Route::get('{path?}', 'ContentController@dynamicRouter')->where('path', '.*');
    }
);
