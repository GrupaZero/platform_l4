@extends('layouts.default')

@section('title')
    @lang('common.login')
@stop

@section('content')
    <div class="col-md-4 col-md-offset-4">
        <h1 class="page-header">@lang('common.login')</h1>

        <form method="post" role="form">
            <div class="form-group{{ $errors->first('email') ? ' has-error' : '' }}">
                <label class="control-label" for="email">@lang('common.email')</label>
                <input type="email" id="email" name="email" class="form-control"
                       value="{{Input::old('email')}}"
                       placeholder="@lang('common.email')">
                @if($errors->first('email'))
                    <p class="help-block">{{ $errors->first('email') }}</p>
                @endif
            </div>
            <div class="form-group{{ $errors->first('password') ? ' has-error' : '' }}">
                <label class="control-label" for="password">@lang('common.password')</label>
                <input type="password" id="password" name="password" class="form-control"
                       placeholder="@lang('common.password')">
                @if($errors->first('password'))
                    <p class="help-block">{{ $errors->first('password') }}</p>
                @endif
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
        @if(App::bound('oauth'))
            @include('includes.socialLogin')
        @endif
    </div>
@stop
