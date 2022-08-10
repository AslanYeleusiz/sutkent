@extends('layouts.default')
@section('content')

<section class="bailanys">
    <div class="container">
        <div class="hleb">
            <a href="{{ LaravelLocalization::localizeUrl('/') }}">@lang('site.Басты бет')</a> / @lang('site.Байланыс')
        </div>
        <div class="h">@lang('site.Байланыс')</div>
        <div class="wrap">
            <div class="info">
                <b>@lang('site.Мекен-жайымыз'):</b>
                <br><br>
                @lang('site.Түркістан облысы, Шардара ауданы, Сүткент ауылы')
                <br><br>
                Эл. почта: newsutkent@gmail.com
                Тел.: +7 707 055-99-22
            </div>
            <div class="karta">
                <img src="{{asset('images/karta.jpg')}}" alt="">
                <a href="#" class="btn glassBtn">@lang('site.Картаны ашу')</a>
            </div>

        </div>
    </div>
</section>


@endsection
