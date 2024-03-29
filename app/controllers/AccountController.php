<?php

/**
 * This file is part of the GZERO CMS package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Class AccountController
 *
 * @author     Adrian Skierniewski <adrian.skierniewski@gmail.com>
 * @copyright  Copyright (c) 2014, Adrian Skierniewski
 */
class AccountController extends BaseController {

    public function account()
    {
        $user = Auth::user();
        /**@TODO we need proper user menu method */
        return View::make('account.index', ['menu' => App::make('user.menu')->getMenu(), 'user' => $user]);
    }

    public function edit()
    {
        $user = Auth::user();
        return View::make('account.edit', ['menu' => App::make('user.menu')->getMenu(), 'user' => $user]);
    }
}
