@extends('layouts.sidebarRight')
<?php $activeTranslation = $content->translation($lang->code); ?>
<?php $activeRoute = $content->routeTranslation($lang->code); ?>

@section('title')
    {{ $activeTranslation->title }}
@stop

@section('sidebarRight')
    <h1 class="page-header">Menu</h1>
@stop

@section('content')
    <h1 class="page-header">{{ $activeTranslation->title }}</h1>
    <p>
        {{ $activeTranslation->body }}
    </p>
    @if($children)
        @foreach($children as $index => $child)
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
                        <p class="text-muted">
                            Posted {{ $child->publishDate() }} by {{ $child->author->firstName }} {{ $child->author->lastName }}
                        </p>
                        {{ $activeTranslation->teaser }}
                        {{ HTML::link($activeRoute->langCode .'/' . $activeRoute->url, 'More info', ['class' => 'btn btn-default']) }}
                    </div>
                </div>
        @endforeach
    @endif
@stop
