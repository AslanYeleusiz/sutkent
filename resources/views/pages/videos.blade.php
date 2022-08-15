@extends('layouts.default')
@section('links')<link rel="canonical" href="https://sutkent.kz/kk/videos">@endsection
@section('title', 'Бейнероликтер')

@section('content')

<section class="video">
    <div class="container">
        <div class="hleb">
            <a href="{{ LaravelLocalization::localizeUrl('/') }}">@lang('site.Басты бет')</a> / @lang('site.Бейнероликтер')
        </div>
        <div class="h">@lang('site.Бейнероликтер')</div>
        <div class="wrap">
            @foreach($videos as $video)
            <a href="{{'/video/'.$video->lat_title.'-'.$video->id.'.html'}}">
                <div style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url({{'//img.youtube.com/vi/'.$video->link.'/mqdefault.jpg'}}) no-repeat 50% 50%/auto 100%;" class="video_block aj-c">
                    <div class="title">
                        {{$video->title}}
                    </div>
                    <img src="{{asset('images/youtube.svg')}}" alt="">
                </div>
            </a>
            @endforeach


        </div>
        <div class="paginator">
           {{$videos->links('components.paginate')}}
            <!--Пагинацию надо сделать сюда-->
        </div>
    </div>
</section>





@endsection
