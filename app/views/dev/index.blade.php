@extends('layouts.default')

@section('content')
    <table class="table table-bordered text-center">
        <thead>
        <tr>
            <td class="text-left">@lang('common.title')</td>
            <td>@lang('common.status')</td>
            <td>@lang('common.order')</td>
            <td>@lang('common.author')</td>
            <td class="text-left">@lang('common.path')</td>
            <td>@lang('common.type')</td>
        </tr>
        </thead>

        <tbody>
        @each('dev.treeNode', $tree, 'content')
        </tbody>
    </table>
@stop
