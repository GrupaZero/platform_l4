<?php

use Gzero\Repository\UserRepository;
use Gzero\Validator\BaseUserValidator;
use Gzero\Validator\ValidationException;

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

    /**
     * @var UserRepository
     */
    protected $userRepo;

    /**
     * @var BaseUserValidator
     */
    protected $validator;

    public function __construct(UserRepository $userRepo, BaseUserValidator $validator)
    {
        $this->userRepo  = $userRepo;
        $this->validator = $validator->setData(\Input::all());
        parent::__construct(); // TODO: Change the autogenerated stub
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
        try {
            $input    = $this->validator->validate('login');
            $remember = Input::get('remember', false);
            if (Auth::validate($input)) {
                if (Auth::check() || Auth::viaRemember() || Auth::attempt($input, $remember)) {
                    return Redirect::intended('account');
                }
                return Redirect::route('login');
            } else {
                Session::flash(
                    'messages',
                    [
                        [
                            'code' => 'error',
                            'text' => Lang::get('common.incorrectLoginMessage')
                        ]
                    ]
                );
                return Redirect::route('login')->withInput();
            }
        } catch (ValidationException $e) {
            return Redirect::route('login')->withInput()->withErrors($e->getErrors());
        }
    }

    public function register()
    {
        return View::make('register');
    }

    public function postRegister()
    {
        try {
            $input        = $this->validator->validate('register');
            $existingUser = $this->userRepo->retrieveByEmail($input['email']);
            // duplicated user verification
            if ($existingUser === null) {
                $input['password'] = Hash::make($input['password']);
                $user              = $this->userRepo->create($input);
                if (!empty($user)) {
                    Auth::login($user);
                    try {
                        $subject = Lang::get('emails.welcome.subject', ['siteName' => Config::get('gzero.siteName')]);
                        Mail::send( // welcome email
                            'emails.auth.welcome',
                            ['user' => $user],
                            function ($message) use ($input, $subject) {
                                $message->subject($subject)
                                    ->to($input['email'], $input['firstName'] . ' ' . $input['lastName']);
                            }
                        );
                    } catch (Swift_TransportException $e) {
                        /**@TODO Better way to handle exceptions on production */
                        Log::error('Unable to send welcome email: ' . $e->getMessage());
                    }
                }
                return Redirect::intended('account');
            } else {
                Session::flash(
                    'messages',
                    [
                        [
                            'code' => 'error',
                            'text' => Lang::get('common.emailAlreadyInUseMessage')
                        ]
                    ]
                );
                return Redirect::route('register')->withInput();
            }
        } catch (ValidationException $e) {
            return Redirect::route('register')->withInput()->withErrors($e->getErrors());
        }
    }

    /**
     * Display the password reminder view.
     *
     * @return Response
     */
    public function remind()
    {
        if (Auth::check()) {
            return Redirect::to('/');
        }
        return View::make('password.remind');
    }

    /**
     * Handle a POST request to remind a user of their password.
     *
     * @return Response
     */
    public function postRemind()
    {
        try {
            $input    = $this->validator->validate('remind');
            $response = Password::remind(
                $input,
                function ($message) {
                    $message->subject(Lang::get('emails.passwordReminder.title'));
                }
            );
            switch ($response) {
                case Password::INVALID_USER:
                    Session::flash(
                        'messages',
                        [
                            [
                                'code' => 'error',
                                'text' => Lang::get($response)
                            ]
                        ]
                    );
                    return Redirect::back()->withInput();
                case Password::REMINDER_SENT:
                    Session::flash(
                        'messages',
                        [
                            [
                                'code' => 'success',
                                'text' => Lang::get($response)
                            ]
                        ]
                    );
                    return Redirect::back();
            }
        } catch (ValidationException $e) {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }
    }

    /**
     * Display the password reset view for the given token.
     *
     * @param  string $token
     *
     * @return Response
     */
    public function reset($token = null)
    {
        if (is_null($token)) {
            App::abort(404);
        } elseif (Auth::check()) {
            return Redirect::to('/');
        }

        return View::make('password.reset')->with('token', $token);
    }

    /**
     * Handle a POST request to reset a user's password.
     *
     * @return Response
     */
    public function postReset()
    {
        try {
            $input    = $this->validator->validate('reset');
            $response = Password::reset(
                $input,
                function ($user, $password) {
                    $user->password = Hash::make($password);
                    $user->save();
                }
            );
            switch ($response) {
                case Password::INVALID_PASSWORD:
                case Password::INVALID_TOKEN:
                case Password::INVALID_USER:
                    Session::flash(
                        'messages',
                        [
                            [
                                'code' => 'error',
                                'text' => Lang::get($response)
                            ]
                        ]
                    );
                    return Redirect::back()->withInput();
                case Password::PASSWORD_RESET:
                    Session::flash(
                        'messages',
                        [
                            [
                                'code' => 'success',
                                'text' => Lang::get($response)
                            ]
                        ]
                    );
                    return Redirect::route('login');
            }
        } catch (ValidationException $e) {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }
    }
}
