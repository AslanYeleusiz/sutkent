@extends('layouts.default')
@section('content')

<section class="main">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/slide/1.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/slide/2.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/slide/3.jpg')}}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container">
        <div class="about">
            <div class="h">@lang('site.Ауыл жайлы')</div>
            <div class="wrap">
                <div class="photo">
                    <img src="{{asset('images/logoFooter.svg')}}" alt="">
                </div>
                <div class="body">
                    @lang('site.Сүткент — Түркістан облысы Шардара ауданы, Сүткент ауылдық округі құрамындағы ауыл. Аудан орталығы – Шардара қаласынан солтүстікке қарай 84 км-дей жерде. 1999 жылы жергілікті тұрғындар саны 2562 адам (1283 ер адам және 1279 әйел адам) болса, 2009 жылы 2744 адамды (1390 ер адам және 1354 әйел адам) құрады.') <br><br>
                    @lang('site.Сүткент — Түркістан облысы Шардара ауданы, Сүткент ауылдық округі құрамындағы ауыл. Аудан орталығы – Шардара қаласынан солтүстікке қарай 84 км-дей жерде. 1999 жылы жергілікті тұрғындар саны 2562 адам (1283 ер адам және 1279 әйел адам) болса, 2009 жылы 2744 адамды (1390 ер адам және 1354 әйел адам) құрады.') <br><br>
                    @lang('site.Сүткент — Түркістан облысы Шардара ауданы, Сүткент ауылдық округі құрамындағы ауыл. Аудан орталығы – Шардара қаласынан солтүстікке қарай 84 км-дей жерде. 1999 жылы жергілікті тұрғындар саны 2562 адам (1283 ер адам және 1279 әйел адам) болса, 2009 жылы 2744 адамды (1390 ер адам және 1354 әйел адам) құрады.')<a href="{{ LaravelLocalization::localizeUrl('/auyl') }}">@lang('site.Толық оқу')</a>
                </div>
            </div>
        </div>
        <div class="news">
            <div class="h">@lang('site.Жаңалықтар')</div>
            <div class="wrap">
                <div class="news_block">
                    <a href="#">
                        <div class="image" style="background-image: url('/images/news/1.jpg')">
                        </div>
                    </a>
                    <div class="body">
                        <div class="title">
                            Шаруагерлер бағаны тұрақтандыруға атсалысуы керек
                        </div>
                        <div class="description">
                            "ЕСЕН" ШҚ Әліби Кісенбай ата кәсіпті қолға алған шаруаның бірі. Қазіргі кезде жалпы саны 800-ге жуық төрт түлікті өсіріп отыр. Үстіміздегі жылы 4 гектар жерге қауын-қарбыз... <a href="#">Толық оқу</a>
                        </div>
                        <div class="time">23 Шілде 2022, 12:10</div>
                    </div>
                </div>
                <div class="news_block">
                    <a href="#">
                        <div class="image" style="background-image: url('/images/news/2.jpg')">
                        </div>
                    </a>
                    <div class="body">
                        <div class="title">
                            «Сыбаға» мемлекеттік бағдарламасы
                        </div>
                        <div class="description">
                            Ауылда мал шаруашылығы тұрақты дамып, 2022 жылы «Сыбаға» мемлекеттік бағдарламасы 147%, «Алтын асық» - 159, «Құлан» - 127% орындалды. Осының барлығы мал басының орта есеппен 3,5%-ға өсуіне мүмкіндік беріп... <a href="#">Толық оқу</a>
                        </div>
                        <div class="time">23 Шілде 2022, 12:10</div>
                    </div>
                </div>
                <div class="news_block">
                    <a href="#">
                        <div class="image" style="background-image: url('/images/news/3.jpg')"></div>
                    </a>
                    <div class="body">
                        <div class="title">
                            Тарихи мұралар – өркениеттің өлшемі
                        </div>
                        <div class="description">
                            Ескі ескерткіштер, киелі кесенелер, қасиетті қоныстар – өркениеттің өлшемі һәм куәсі. Сыр өңірінде есепке алынған 286 ескірткіш, яғни 30 республикалық, 256 жергілікті маңызы бар ескерткіштер мемлекет... <a href="#">Толық оқу</a>
                        </div>
                        <div class="time">23 Шілде 2022, 12:10</div>
                    </div>
                </div>

            </div>
            <a href="#" class="next">
                <button class="btn glassBtn">
                    @lang('site.Барлық жаңалықтарға өту')
                </button>
            </a>
        </div>
    </div>
    <div class="request">
        <div class="container">
            <div class="hb">@lang('site.Ауылымыздың дамуына үлес қосқыңыз келе ме?')</div>
            <div class="desc">
                @lang('site.Егер ауылымыздың дамуына үлес қосқыңыз келсе, өтініш қалдырыңыз, біздің қызметкерлер сізге жақын арада хабарласады')
            </div>
            <form action="" class="form">
                <input type="text" name="name" id="name" class="form-control" placeholder="@lang('site.Аты-жөніңіз')">
                <input type="text" name="phone" id="phone" class="form-control phone_musk" placeholder="@lang('site.Телефон нөміріңіз')">
                <select name="investor" id="investor" class="form-control">
                    <option value="0">@lang('site.Инвестор')</option>
                    <option value="1">@lang('site.Демеуші')</option>
                    <option value="2">@lang('site.Кәсіпкер')</option>
                    <option value="3">@lang('site.Ерікті')</option>
                </select>
                <button class="btn btn-primary">@lang('site.Өтініш жіберу')</button>
            </form>
        </div>
    </div>
    <div class="web">
        <div class="container">
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
            </div>
            <div class="next">
                <a href="#">
                    <button class="btn glassBtn">
                        @lang('site.Барлық бейнероликтерге өту')
                    </button>
                </a>
            </div>

        </div>
    </div>
</section>
@endsection
