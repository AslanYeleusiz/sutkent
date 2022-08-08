<div class="subHeader a-c">
    <div class="container">
        <div class="wrap">
            <div class="welcome">
                @lang('site.Сүткент ауылының ресми сайтына қош келдіңіз!')
            </div>
            <div class="info a-c">
                <div>Сейсенбі, 26 Шілде</div>
                <div class="seti">
                    <img src="{{asset('images/social/facebook.svg')}}" alt="">
                    <img src="{{asset('images/social/instagram.svg')}}" alt="">
                    <img src="{{asset('images/social/telegram.svg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header">
    <div class="container">
        <div class="wrap">
            <a href="{{ LaravelLocalization::localizeUrl('/') }}"><img class="logo" src="{{asset('images/mainLogo.svg')}}" alt=""></a>
            <div class="links">
                <a class="link-item" href="{{ LaravelLocalization::localizeUrl('/') }}">@lang('site.Басты бет')</a>
                <div class="dropdown">
                    <button class="btn link-item a-c" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        @lang('site.Ауыл туралы')
                        <img src="{{asset('images/treugolnik.svg')}}" alt="">
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ LaravelLocalization::localizeUrl('/akimshilik') }}">
                                @lang('site.Әкімшілік')
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ LaravelLocalization::localizeUrl('/kenes') }}">
                                @lang('site.Ардагерлер кеңесі')
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                @lang('site.Қоғамдық мүшелері')
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                @lang('site.Аналар кеңесі')
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                @lang('site.Медиатор')
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">@lang('site.Қоғамдық қор мүшелері')
                            </a>
                        </li>
                    </ul>
                </div>
                <a class="link-item" href="{{ LaravelLocalization::localizeUrl('/zhanalyqtar') }}">@lang('site.Жаңалықтар')</a>
                <a class="link-item" href="#">@lang('site.Кітапхана')</a>
                <a class="link-item" href="{{ LaravelLocalization::localizeUrl('/videos') }}">@lang('site.Бейнероликтер')</a>
                <a class="link-item" href="{{ LaravelLocalization::localizeUrl('/forum') }}">@lang('site.Форум')</a>
                <a class="link-item" href="{{ LaravelLocalization::localizeUrl('/gallery') }}">@lang('site.Галерея')</a>
            </div>
            <div class="right">
                @if(LaravelLocalization::getCurrentLocale() == 'kk')
                <a href="{{ LaravelLocalization::getLocalizedURL('ru') }}"><button class="btn link-item">Қаз / <span class="disabled">Рус</span></button></a>
                @else
                <a href="{{ LaravelLocalization::getLocalizedURL('kk') }}"><button class="btn link-item"><span class="disabled">Қаз /</span>Рус</button></a>
                @endif
                <button class="btn link-item loginBtn">
                    <img src="{{asset('images/kiru.svg')}}" alt="">
                    @lang('site.Кіру')
                </button>
                <div class="mob_menu a-c">
                    <a class="mob_item" href="#">
                        <img src="{{asset('images/social/facebook.svg')}}" alt="">
                    </a><a class="mob_item" href="#">
                        <img src="{{asset('images/social/instagram.svg')}}" alt="">
                    </a><a class="mob_item" href="#">
                        <img src="{{asset('images/social/telegram.svg')}}" alt="">
                    </a>
                    <button class="btn menuBtn">
                        <img src="{{asset('images/menuButton.svg')}}" alt="">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
