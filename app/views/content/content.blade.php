@extends('layouts.default')
<?php $activeTranslation = $content->translation($lang->code); ?>
<?php $activeRoute = $content->routeTranslation($lang->code); ?>

@section('title')
    {{ $activeTranslation->title }}
@stop

@section('content')
    <h1 class="page-header">{{ $activeTranslation->title }}</h1>
    <p>
        {{ $activeTranslation->body }}
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
        Link to this site: {{ HTML::link($activeRoute->langCode .'/' . $activeRoute->url, 'Click!') }}
    </p>
@stop
