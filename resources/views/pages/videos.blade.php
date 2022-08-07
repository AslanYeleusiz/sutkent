@extends('layouts.default')
@section('content')

<section class="video">
    <div class="container">
        <div class="hleb">
            @lang('site.Басты бет') / @lang('site.Бейнероликтер') / page 1
        </div>
        <div class="h">@lang('site.Бейнероликтер')</div>
        <div class="wrap">
            <a href="#">
                <div style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(/images/about/2.jpg);" class="video_block aj-c">
                    <div class="title">
                        Ауыл тойы айырықша өтті
                    </div>
                    <img src="{{asset('images/youtube.svg')}}" alt="">
                </div>
            </a>
            <a href="#">
                <div style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(/images/about/2.jpg);" class="video_block aj-c">
                    <div class="title">
                        Ауыл тойы айырықша өтті
                    </div>
                    <img src="{{asset('images/youtube.svg')}}" alt="">
                </div>
            </a>
            <a href="#">
                <div style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(/images/about/2.jpg);" class="video_block aj-c">
                    <div class="title">
                        Ауыл тойы айырықша өтті
                    </div>
                    <img src="{{asset('images/youtube.svg')}}" alt="">
                </div>
            </a>
            <a href="#">
                <div style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(/images/about/2.jpg);" class="video_block aj-c">
                    <div class="title">
                        Ауыл тойы айырықша өтті
                    </div>
                    <img src="{{asset('images/youtube.svg')}}" alt="">
                </div>
            </a>
            <a href="#">
                <div style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(/images/about/2.jpg);" class="video_block aj-c">
                    <div class="title">
                        Ауыл тойы айырықша өтті
                    </div>
                    <img src="{{asset('images/youtube.svg')}}" alt="">
                </div>
            </a>
        </div>
        <div class="pagination">
<!--Пагинацию надо сделать сюда-->
        </div>
    </div>
</section>





@endsection
