@extends('layouts.default')
@section('content')

<section class="akim">
    <div class="container">
        <div class="hleb">
            <a href="{{ LaravelLocalization::localizeUrl('/') }}">@lang('site.Басты бет')</a> / <a href="{{ LaravelLocalization::localizeUrl('/auyl') }}">@lang('site.Ауыл туралы')</a> / @lang('site.Ардагерлер кеңесі')
        </div>
        <div class="h">@lang('site.Ардагерлер кеңесі')</div>
        <div class="admins">
            <div class="block">
                <img src="{{asset('images/admins/3.png')}}" alt="">
                <div class="body">
                    <div class="head"><b>Кенбай Қайрат Рахымжанұлы</b><br>
                        @lang('site.Сүткент ауылдық округінің әкімі')</div>
                    <div class="mid">
                        Тел.: +7 707 558 51 84 <br>E-mail: 77kayrat77@mail.ru
                    </div>
                    <div class="glassBtn empty"></div>
                </div>
            </div>
            <div class="block">
                <img src="{{asset('images/admins/4.png')}}" alt="">
                <div class="body">
                    <div class="head"><b>Кенбай Қайрат Рахымжанұлы</b><br>
                        Сүткент ауылдық округінің әкімі</div>
                    <div class="mid">
                        Тел.: +7 707 558 51 84 <br>E-mail: 77kayrat77@mail.ru
                    </div>
                    <div class="glassBtn empty"></div>
                </div>
            </div>
               <div class="block">
                <img src="{{asset('images/admins/5.png')}}" alt="">
                <div class="body">
                    <div class="head"><b>Кенбай Қайрат Рахымжанұлы</b><br>
                        Сүткент ауылдық округінің әкімі</div>
                    <div class="mid">
                        Тел.: +7 707 558 51 84 <br>E-mail: 77kayrat77@mail.ru
                    </div>
                    <div class="glassBtn empty"></div>
                </div>
            </div>
            <div class="block">
                <img src="{{asset('images/admins/3.png')}}" alt="">
                <div class="body">
                    <div class="head"><b>Кенбай Қайрат Рахымжанұлы</b><br>
                        Сүткент ауылдық округінің әкімі</div>
                    <div class="mid">
                        Тел.: +7 707 558 51 84 <br>E-mail: 77kayrat77@mail.ru
                    </div>
                    <div class="glassBtn empty"></div>
                </div>
            </div>
        </div>
    </div>
</section>





@endsection
