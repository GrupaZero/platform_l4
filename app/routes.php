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
        Route::get('remind', ['as' => 'remind', 'uses' => 'UserController@remind']);
        Route::post('remind', ['as' => 'post.remind', 'uses' => 'UserController@postRemind']);
        Route::get('reset', ['as' => 'reset', 'uses' => 'UserController@reset']);
        Route::post('reset', ['as' => 'post.reset', 'uses' => 'UserController@postReset']);
        Route::get('logout', ['as' => 'logout', 'uses' => 'UserController@logout']);
        Route::get('/', ['as' => 'home', 'uses' => 'HomeController@showWelcome']);
        Route::get('test', ['as' => 'test', 'uses' => 'TestController@index']);
        Route::get('{path?}', 'ContentController@dynamicRouter')->where('path', '.*');
    }
);

App::make('user.menu')->addLink(URL::route('account'), 'user.my_account');
App::make('user.menu')->addChild(['url' => URL::route('logout'), 'title' => 'common.logout'], URL::route('account'));
