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
        <div class="row">
        @foreach($children as $index => $child)
            <div class="col-md-6">
                <?php $activeTranslation = $child->translation($lang->code); ?>
                <?php $activeRoute = $child->routeTranslation($lang->code); ?>
                <div class="media">
                    <div class="media-left">
                        <a href="{{URL::to('/'). '/' . $activeRoute->langCode .'/' . $activeRoute->url}}">
                            <img class="media-object thumbnail" src="http://placehold.it/120/120/" width="120" height="120"
                                 alt="{{$activeTranslation->title}}">
                        </a>
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading">
                            {{ HTML::link($activeRoute->langCode .'/' . $activeRoute->url, $activeTranslation->title) }}
                        </h2>
                        {{ $activeTranslation->teaser }}
                    </div>
                </div>
            </div>
            @if($index % 2 == 1)
                <hr style="clear: both"/>
            @endif
        @endforeach
        </div>
    @endif
@stop
