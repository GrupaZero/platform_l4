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
        Route::get('/', array('as' => 'home', 'uses' => 'HomeController@showWelcome'));
        Route::get('{path?}', 'ContentController@dynamicRouter')->where('path', '.*');
    }
);
