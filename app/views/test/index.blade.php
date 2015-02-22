@extends('layouts.default')

@section('content')
    <table class="table table-bordered">
        <thead>
        <tr>
            <td>@lang('common.title')</td>
            <td>@lang('common.status')</td>
            <td>@lang('common.order')</td>
            <td>@lang('common.author')</td>
            <td>@lang('common.path')</td>
            <td>@lang('common.type')</td>
        </tr>
        </thead>

        <tbody>
        @each('test.treeNode', $tree, 'content')
        </tbody>
    </table>
@stop
