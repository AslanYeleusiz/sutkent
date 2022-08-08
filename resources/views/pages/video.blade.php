@extends('layouts.default')
@section('content')

<div class="video">
    <div class="container">
        <div class="hleb">
            <a href="{{ LaravelLocalization::localizeUrl('/') }}">@lang('site.Басты бет')</a> / <a href="{{ LaravelLocalization::localizeUrl('/videos') }}">@lang('site.Бейнероликтер')</a> / Ауылдықтар 1000 тал екті
        </div>
        <div class="h">Ауылдықтар 1000 тал екті</div>
        <div class="sam_video">
            <iframe class="iframe" src="https://www.youtube.com/embed/Mn7Bv8rGRzg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="desc">
            <div class="info">@lang('site.Видео сипаттамасы')</div>
            <div class="description">
                Сүткент — Түркістан облысы Шардара ауданы, Сүткент ауылдық округі құрамындағы ауыл.
Аудан орталығы – Шардара қаласынан солтүстікке қарай 84 км-дей жерде. 1999 жылы жергілікті тұрғындар саны 2562 адам (1283 ер адам және 1279 әйел адам) болса, 2009 жылы 2744 адамды (1390 ер адам және 1354 әйел адам) құрады. Сүткент — Түркістан облысы Шардара ауданы, Сүткент ауылдық округі құрамындағы ауыл.
Аудан орталығы – Шардара қаласынан солтүстікке қарай 84 км-дей жерде. 1999 жылы жергілікті тұрғындар саны 2562 адам (1283 ер адам және 1279 әйел адам) болса, 2009 жылы 2744 адамды (1390 ер адам және 1354 әйел адам) құрады. Сүткент — Түркістан облысы Шардара ауданы, Сүткент ауылдық округі құрамындағы ауыл.
Аудан орталығы – Шардара қаласынан солтүстікке қарай 84 км-дей жерде. 1999 жылы жергілікті тұрғындар саны 2562 адам (1283 ер адам және 1279 әйел адам) болса, 2009 жылы 2744 адамды (1390 ер адам және 1354 әйел адам) құрады.
            </div>
        </div>
    </div>
</div>




@endsection
