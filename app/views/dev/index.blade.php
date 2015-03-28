@extends('layouts.default')

@section('content')
    <style type="text/css">
        .table {
            margin-top : 20px;
        }
        .table > tbody > tr > td {
            padding : 10px;
        }
    </style>
    <div role="tabpanel">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#contents" aria-controls="contents" role="tab" data-toggle="tab">
                    @lang('common.contentsList')
                </a>
            </li>
            @if(Auth::user())
                <li role="presentation">
                    <a href="#user" aria-controls="user" role="tab" data-toggle="tab">
                        @lang('user.user')
                    </a>
                </li>
            @endif
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="contents">
                <table class="table table-bordered text-center">
                    <thead>
                    <tr>
                        <th>@lang('common.title')</th>
                        <th class="text-center">@lang('common.status')</th>
                        <th class="text-center">@lang('common.order')</th>
                        <th class="text-center">@lang('common.author')</th>
                        <th>@lang('common.path')</th>
                        <th class="text-center">@lang('common.type')</th>
                    </tr>
                    </thead>

                    <tbody>
                    @each('dev.treeNode', $tree, 'content')
                    </tbody>
                </table>
            </div>
            @if(Auth::user())
                <div role="tabpanel" class="tab-pane fade" id="user">
                    <h3>{{ Auth::user()->firstName }} {{ Auth::user()->lastName }}</h3>

                    <p>Login: {{ Auth::user()->email }}</p>

                    <p>@lang('common.password'): {{ Auth::user()->password }}</p>

                    <p>Remember token: {{ Auth::user()->rememberToken or'empty' }}</p>
                </div>
            @endif
        </div>
    </div>
    <script type="text/javascript">
        $('.nav-tabs a').click(function (e) {
            e.preventDefault();
            $(this).tab('show')
        })
    </script>
@stop
