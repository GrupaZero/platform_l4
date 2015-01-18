@extends('layouts.default')

@section('title')
    @lang('common.login')
@stop

@section('content')
    <div class="col-md-4 col-md-offset-4">
        <h1 class="page-header">@lang('common.passReminder')</h1>

        <form action="{{ URL::action('UserController@postRemind') }}" method="POST" role="form">
            <div class="form-group">
                <label for="email">@lang('common.email')</label>
                <input type="email" name="email" class="form-control" placeholder="@lang('common.email')">
            </div>

            <button type="submit" class="btn btn-default">@lang('common.sendReminder')</button>
        </form>
    </div>
@stop
