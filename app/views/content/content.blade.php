@extends('layouts.default')
@section('title')
    {{ $translations->title }}
@stop

@section('content')
    <h1 class="page-header">{{ $translations->title }}</h1>
    <p>
        {{ $translations->body }}
    </p>
    <p>
        <strong>
            <small>DETAILS:</small>
        </strong>
        <code>
            ID: {{ $content->id }}

            Type: {{ $content->type }}

            Path: {{ $content->path }}

            Author: {{ $content->author->firstName }} {{ $content->author->lastName }}
        </code>
        <br/>
        {{--Link to this site: {{ HTML::link($activeRoute->langCode .'/' . $activeRoute->url, 'Click!') }}--}}
    </p>
@stop
