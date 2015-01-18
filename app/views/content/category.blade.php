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
    @if($children)
        <h2>Childrens:</h2>
        @foreach($children as $child)
            <div class="panel panel-default">
                <div class="panel-body">
                <p>
                <code style="display: block">
                ID: {{ $child->id }}

                Type: {{ $child->type }}

                Path: {{ $child->path }}

                Author: {{ $content->author->firstName }} {{ $content->author->lastName }}
                </code>
                </p>
                    <div class="media">
                        <div class="media-body">
                            <h4 class="media-heading">{{ $activeTranslation->title }}
                            <small class="label label-success">{{ $activeTranslation->langCode }}</small>
                            </h4>
                            {{ $activeTranslation->body }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@stop
