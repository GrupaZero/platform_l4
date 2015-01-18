@extends('layouts.default')

@section('title')
    @lang('common.login')
@stop

@section('content')
    <div class="col-md-4 col-md-offset-4">
        <h1 class="page-header">@lang('common.login')</h1>

        <form method="post" role="form">
            <div class="form-group">
                <label for="login">Login</label>
                <input type="email" id="login" name="login" class="form-control" placeholder="Login">
            </div>
            <div class="form-group">
                <label for="password">@lang('common.password')</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember">@lang('common.remember')
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-default">@lang('common.login')</button>
        </form>
    </div>
@stop
