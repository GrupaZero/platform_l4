<?php

/**
 * This file is part of the GZERO CMS package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Class UserController
 *
 * @author     Adrian Skierniewski <adrian.skierniewski@gmail.com>
 * @copyright  Copyright (c) 2014, Adrian Skierniewski
 */
class UserController extends BaseController {

    public function login()
    {
        if (Auth::check()) {
            return Redirect::route('account');
        }
        return View::make('login');
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::route('home');
    }

    public function postLogin()
    {
        $credentials = [
            'email'    => Input::get('login'),
            'password' => Input::get('password')
        ];
        $remember    = Input::get('remember');

        if (Auth::check() or Auth::viaRemember()) {
            return Redirect::route('account');
        }

        if (!empty($remember)) {
            if (Auth::attempt($credentials, TRUE)) {
                return Redirect::route('account');
            }
        } else {
            if (Auth::attempt($credentials)) {
                return Redirect::route('account');
            }
        }

        return Redirect::route('login');
    }
}
