@extends('layouts.sidebarLeft')

@section('title')
    @lang('common.account')
@stop

@section('sidebarLeft')
    @include('account.menu', ['menu' => $menu])
@stop

@section('content')
        <h1 class="page-header">@lang('common.account')</h1>

        <h3>User</h3>

        <p>Login: {{ Auth::user()->email }}</p>

        <p>@lang('common.password'): {{ Auth::user()->password }}</p>

        <p>Remember token: {{ Auth::user()->rememberToken or'empty' }}</p>

        <a href="{{ URL::route('logout') }}" title="@lang('common.logout') }}" class="btn btn-danger">
            @lang('common.logout')
        </a>
@stop
