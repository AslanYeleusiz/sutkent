@extends('layouts.default')
@section('title', 'Басты бет')

@section('content')

<section class="main">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            @foreach($sliders as $slider)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$loop->index}}" @if($loop->index == 0)  class="active" aria-current="true" @endif aria-label="Slide {{$loop->index+1}}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
           @foreach($sliders as $slider)
            <div class="carousel-item {{!$loop->index ? 'active' : ''}}">
                <div class="carousel-title">
                    <?php echo $slider['title'] ?>
                </div>
                <img src="{{asset('images/slide/'.$slider->image)}}" class="d-block w-100" alt="...">
            </div>
            @endforeach
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
               @foreach($news as $new)
                <div class="news_block">
                    <a href="{{'/zhanalyq/'.$new->lat_title.'-'.$new->id.'.html'}}">
                        <div class="image" style="background-image: url('{{asset('images/news/'.$new->image)}}')">
                        </div>
                    </a>
                    <div class="body">
                        <a href="{{'/zhanalyq/'.$new->lat_title.'-'.$new->id.'.html'}}" class="title">
                            {{$new->title}}
                        </a>
                        <div class="description">
                            {{$new->short_description}}
                        </div>
                        <a href="{{'/zhanalyq/'.$new->lat_title.'-'.$new->id.'.html'}}">@lang('site.Толық оқу')</a>
                        <div class="time">{{$new->date}}</div>
                    </div>
                </div>
                @endforeach
            </div>
            <a href="{{ LaravelLocalization::localizeUrl('/zhanalyqtar') }}" class="next">
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
            <form method="post" action="mail.php" class="form">
               @csrf
                <input type="text" name="name" id="name" class="form-control" placeholder="@lang('site.Аты-жөніңіз')">
                <input type="text" name="phone" id="phone" class="form-control phone_musk" placeholder="@lang('site.Телефон нөміріңіз')">
                <select name="investor" id="investor" class="form-control">
                    <option value="0">@lang('site.Инвестор')</option>
                    <option value="1">@lang('site.Демеуші')</option>
                    <option value="2">@lang('site.Кәсіпкер')</option>
                    <option value="3">@lang('site.Ерікті')</option>
                </select>
                <button name="sendMailBtn" type="submit" class="btn btn-primary">@lang('site.Өтініш жіберу')</button>
            </form>
        </div>
    </div>
    <div class="web">
        <div class="container">
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
            <div class="next">
                <a href="{{LaravelLocalization::localizeUrl('/videos')}}">
                    <button class="btn glassBtn">
                        @lang('site.Барлық бейнероликтерге өту')
                    </button>
                </a>
            </div>

        </div>
    </div>
</section>
@endsection
