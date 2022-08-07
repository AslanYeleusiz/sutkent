@extends('layouts.default')
@section('content')

<section class="forum">
    <div class="container">
        <div class="hleb">
            @lang('site.Басты бет') / @lang('site.Форум') / Форум 0035 - @lang('site.Ауыл әкімшілігіне талап-тілек, ұсыныс')
        </div>
        <div class="h">Форум</div>
    </div>
    <div class="block">
        <div class="container">
            <div class="head">@lang('site.Ауылдық форум')</div>
            <div class="desc">
                <b>@lang('site.Ауыл әкімшілігіне талап-тілек, ұсыныс')</b> <br><br>
                @lang('site.Бұл форумда ауыл тұрғындары өз-ара пікір алмасып, ұсыныстарын ортаға сала алады')
            </div>
            <form action="" class="form">
                <input type="text" name="name" id="name" class="form-control cst_input" placeholder="@lang('site.Аты-жөніңіз')">
                <textarea name="message" id="message" cols="30" rows="10" class="form-control cst_area"></textarea>
                <button class="btn cst_btn">@lang('site.Жіберу')</button>
            </form>
        </div>
    </div>
    <div class="container">


        <div class="forum_item">
            <div class="author">
                Кенбай Қайрат Рахымжанұлы
            </div>
            <div class="comment">
                Сүткент — Түркістан облысы Шардара ауданы, Сүткент ауылдық округі құрамындағы ауыл.
                Аудан орталығы – Шардара қаласынан солтүстікке қарай 84 км-дей жерде. 1999 жылы жергілікті тұрғындар саны 2562 адам (1283 ер адам және 1279 әйел адам) болса, 2009 жылы 2744 адамды (1390 ер адам және 1354 әйел адам) құрады. Сүткент — Түркістан облысы Шардара ауданы, Сүткент ауылдық округі құрамындағы ауыл.
            </div>
            <div class="date">
                24 Шілде, 2022, 14:42
            </div>
        </div>



        <div class="pagination">
<!--Пагинацию надо сделать сюда-->
        </div>
    </div>
</section>


@endsection
