@extends('layouts.default')

@section('title')
    @lang('common.register')
@stop

@section('content')
    <div class="col-md-4 col-md-offset-4">
        <h1 class="page-header">{{ trans('common.register') }}</h1>

        <form id="register-account-form" method="POST" role="form">
            <div class="form-group">
                <label for="email">{{ trans('common.email') }}</label>
                <input type="email" id="email" name="email" class="form-control"
                       placeholder="{{ trans('common.email') }}">
            </div>
            <div class="form-group">
                <label for="firstName">{{ trans('common.firstName') }}</label>
                <input type="text" id="firstName" name="firstName" class="form-control"
                       placeholder="{{ trans('common.firstName') }}">
            </div>
            <div class="form-group">
                <label for="lastName">{{ trans('common.lastName') }}</label>
                <input type="text" id="lastName" name="lastName" class="form-control"
                       placeholder="{{ trans('common.lastName') }}">
            </div>
            <div class="form-group">
                <label for="password">{{ trans('common.password') }}</label>
                <input type="password" id="password" name="password" class="form-control"
                       placeholder="{{ trans('common.password') }}">
            </div>
            <div class=" form-group">
                <div class="col-md-4 col-md-offset-4">
                    <button id="edit-account" type="submit" class="btn btn-default">{{ trans('common.register') }}</button>
                </div>
            </div>
        </form>
    </div>
@stop
