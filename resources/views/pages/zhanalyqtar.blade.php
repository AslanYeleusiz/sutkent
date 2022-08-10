@extends('layouts.default')
@section('content')
<div class="main">
    <div class="container">
        <div class="news p-0">
        <div class="hleb">
            <a href="{{ LaravelLocalization::localizeUrl('/') }}">@lang('site.Басты бет')</a> / @lang('site.Жаңалықтар')
        </div>
        <div class="h">@lang('site.Жаңалықтар')</div>
        <div class="wrap">
           @foreach($news as $new)
            <div class="news_block">
                <a href="{{'/zhanalyq/'.$new->lat_title.'-'.$new->id.'.html'}}">
                    <div class="image" style="background-image: url({{'/images/news/'.$new->image}})">
                    </div>
                </a>
                <div class="body">
                    <div class="title">
                        {{$new->title}}
                    </div>
                    <div class="description">
                        {{$new->short_description}}
                    </div>
                    <a href="{{'/zhanalyq/'.$new->lat_title.'-'.$new->id.'.html'}}">@lang('site.Толық оқу')</a>
                    <div class="time">{{$new->date}}</div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="paginator">
            {{$news->links('components.paginate')}}
        </div>
    </div>
    </div>
</div>


@endsection
