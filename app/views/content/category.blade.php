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
    {{ $activeTranslation->body }}
    @if($children)
        @foreach($children as $index => $child)
                <?php $activeTranslation = $child->translation($lang->code); ?>
                <?php $activeRoute = $child->routeTranslation($lang->code); ?>
                <div class="media">
                    <h2 class="page-header">
                        <a href="{{ $activeRoute->url }}">
                            {{ $activeTranslation->title }}
                        </a>
                    </h2>
                    <div class="media-body">
                        <div class="row">
                            <div class="col-md-8">
                                <p class="text-muted">
                                    @lang('common.postedBy') {{ $child->authorName() }}
                                    @lang('common.postedOn') {{ $child->publishDate() }}
                                </p>
                            </div>
                            <div class="col-md-4 text-right">
                                <p class="text-muted">@lang('common.rating') {{ $child->ratingStars() }}</p>
                            </div>
                        </div>
                       <p>
                           <a href="{{URL::to('/'). '/' . $activeRoute->langCode .'/' . $activeRoute->url}}">
                               <img class="img-responsive" src="http://lorempixel.com/847/312/sports/{{ $index }}"
                                    width="847" height="312" alt="{{$activeTranslation->title}}">
                           </a>
                       </p>
                        {{ $activeTranslation->teaser }}
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ $activeRoute->url }}" class="btn btn-default">
                                @lang('common.readMore')
                            </a>
                        </div>
                        <div class="col-md-6 text-right">
                            <p class="text-muted">@lang('common.numberOfViews') {{ $child->visits }}</p>
                        </div>
                    </div>
                </div>
        @endforeach
    @endif
@stop
