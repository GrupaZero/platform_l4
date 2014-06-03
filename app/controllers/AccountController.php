<?php

/**
 * This file is part of the GZERO CMS package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Class HomeController
 *
 * @author     Adrian Skierniewski <adrian.skierniewski@gmail.com>
 * @copyright  Copyright (c) 2014, Adrian Skierniewski
 */
class AccountController extends BaseController {

    public function account()
    {
        return View::make('account');
    }

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
        if (Auth::attempt(array('email' => Input::get('login'), 'password' => Input::get('password')))) {
            return Redirect::route('account');
        }
        return Redirect::route('login');
    }
}
