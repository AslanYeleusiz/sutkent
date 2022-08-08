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
        <div class="pagination"></div>
    </div>
    </div>
</div>


@endsection
