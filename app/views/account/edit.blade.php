@extends('layouts.default')

@section('title')
    @lang('common.edit')
@stop

@section('content')
    <h1 class="page-header">@lang('common.edit')</h1>

    <div class="col-md-4 col-md-offset-4">
        <form id="edit-account-form" action="#" method="post" class="form-horizontal" role="form">
            <div class="form-group">
                <label for="firstName">@lang('common.firstName')</label>
                <input type="text" id="firstName" name="firstName" class="form-control" value="{{ Auth::user()->firstName }}">
            </div>
            <div class="form-group">
                <label for="lastName">@lang('common.lastName')</label>
                <input type="text" id="lastName" name="lastName" class="form-control" value="{{ Auth::user()->lastName }}">
            </div>
            <div class="form-group">
                <label for="password">@lang('common.password')</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <div class=" form-group">
                <div class="col-md-4 col-md-offset-4">
                    <button id="edit-account" type="submit" class="btn btn-default">@lang('common.edit')</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        $(function () {
            $('#edit-account').click(function (event) {
                event.preventDefault();

                $.ajax({
                    url: "/en/api/v1/account/1",
                    data: $('#edit-account-form').serializeObject(),
                    type: 'PUT'
                }).done(function () {
                    console.log('done');
                    $(this).addClass("done");
                });
            });
        });
    </script>
@stop
