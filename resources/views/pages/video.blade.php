@extends('layouts.default')
@section('title', $video->title.' | Бейнероликтер')

@section('content')

<div class="video">
    <div class="container">
        <div class="hleb">
            <a href="{{ LaravelLocalization::localizeUrl('/') }}">@lang('site.Басты бет')</a> / <a href="{{ LaravelLocalization::localizeUrl('/videos') }}">@lang('site.Бейнероликтер')</a> / Ауылдықтар 1000 тал екті
        </div>
        <div class="h">{{$video->title}}</div>
        <div class="sam_video">
            <iframe class="iframe" src="https://www.youtube.com/embed/{{$video->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="desc">
            <div class="info">@lang('site.Видео сипаттамасы')</div>
            <div class="description">
                {{$video->description}}
            </div>
        </div>
    </div>
</div>




@endsection
