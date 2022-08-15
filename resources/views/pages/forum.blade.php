@extends('layouts.default')
@section('links')<link rel="canonical" href="https://sutkent.kz/kk/forum">@endsection
@section('title', 'Форум')

@section('content')

<section class="forum">
    <div class="container">
        <div class="hleb">
            <a href="{{ LaravelLocalization::localizeUrl('/') }}">@lang('site.Басты бет')</a> / @lang('site.Форум')
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
            <form action="{{route('forumSend')}}" method="post" class="form">
               @csrf
                <input type="text" name="name" id="name" class="form-control cst_input" placeholder="@lang('site.Аты-жөніңіз')" required>
                <textarea name="text" id="text" cols="30" rows="10" class="form-control cst_area" required></textarea>
                <button type="submit" class="btn cst_btn">@lang('site.Жіберу')</button>
            </form>
        </div>
    </div>
    <div class="container">

       @foreach($forums as $forum)
        <div class="forum_item">
            <div class="author">
                {{$forum->name}}
            </div>
            <div class="comment">
                {{$forum->text}}
            </div>
            <div class="date">
                {{$forum->date}}
            </div>
        </div>
        @endforeach
        <div class="paginator">
<!--Пагинацию надо сделать сюда-->
            {{$forums->links('components.paginate')}}
        </div>
    </div>
</section>


@endsection
