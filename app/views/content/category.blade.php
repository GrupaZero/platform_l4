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

            Author: {{ $author->firstName }} {{ $author->lastName }}
        </code>
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

                            Author: {{ $author->firstName }} {{ $author->lastName }}
                        </code>
                    </p>
            @foreach($child->translations as $translation)
              <div class="media">
                  <div class="media-body">
                      <h4 class="media-heading">{{ $translation->title }}
                          <small class="label label-success">{{ $translation->langCode }}</small>
                      </h4>
                      {{ $translation->body }}
                  </div>
              </div>
          @endforeach
      </div>
  </div>
    @endforeach
@endif
@stop
