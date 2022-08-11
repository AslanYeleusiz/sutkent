@extends('layouts.default')
@section('title', 'Әкімшілік')
@section('links')<link rel="canonical" href="https://sutkent.kz/kk/akimshilik">@endsection

@section('content')

<section class="akim">
    <div class="container">
        <div class="hleb">
            <a href="{{ LaravelLocalization::localizeUrl('/') }}">@lang('site.Басты бет')</a> / <a href="{{ LaravelLocalization::localizeUrl('/auyl') }}">@lang('site.Ауыл туралы')</a> / @lang('site.Әкімшілік')
        </div>
        <div class="h">@lang('site.Әкімшілік')</div>
        <div class="ab">@lang('site.Әкімшілік жайлы')</div>
        <div class="desc">
            Сүткент — Түркістан облысы Шардара ауданы, Сүткент ауылдық округі құрамындағы ауыл.
            Аудан орталығы – Шардара қаласынан солтүстікке қарай 84 км-дей жерде. 1999 жылы жергілікті тұрғындар саны 2562 адам (1283 ер адам және 1279 әйел адам) болса, 2009 жылы 2744 адамды (1390 ер адам және 1354 әйел адам) құрады. Сүткент — Түркістан облысы Шардара ауданы, Сүткент ауылдық округі құрамындағы ауыл.
            Аудан орталығы – Шардара қаласынан солтүстікке қарай 84 км-дей жерде. 1999 жылы жергілікті тұрғындар саны 2562 адам (1283 ер адам және 1279 әйел адам) болса, 2009 жылы 2744 адамды (1390 ер адам және 1354 әйел адам) құрады. Сүткент — Түркістан облысы Шардара ауданы, Сүткент ауылдық округі құрамындағы ауыл.
            Аудан орталығы – Шардара қаласынан солтүстікке қарай 84 км-дей жерде. 1999 жылы жергілікті тұрғындар саны 2562 адам (1283 ер адам және 1279 әйел адам) болса, 2009 жылы 2744 адамды (1390 ер адам және 1354 әйел адам) құрады.
        </div>
        <div class="ab">@lang('site.Әкімшілік қызметкерлері')</div>
        <div class="admins">
        @foreach($users as $user)
            <div class="block">
                <div style="background-image: url({{asset('/images/kenes/avatar/'.$user->img)}})" class="img"></div>
                <div class="body">
                    <div class="head"><b>{{$user->name}}</b><br>
                        {{$user->rank}}</div>
                    <div class="mid">
                        Тел.: {{$user->phone}} <br>E-mail: {{$user->email}}
                    </div>
                    <a href="#"><button class="btn glassBtn">@lang('site.Жекеге жазу')</button></a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>


@endsection
