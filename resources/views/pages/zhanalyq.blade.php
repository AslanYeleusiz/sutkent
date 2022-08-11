@extends('layouts.default')
@section('title', $new->title.' | Жаңалықтар')

@section('content')
<section class="zhanalyq">
    <div class="container">
        <div class="hleb">
            <a href="{{ LaravelLocalization::localizeUrl('/') }}">@lang('site.Басты бет')</a> / <a href="{{ LaravelLocalization::localizeUrl('/zhanalyqtar') }}">@lang('site.Жаңалықтар')</a> / {{$new->title}}
        </div>
        <div class="h">
            {{$new->title}}
        </div>
        <div class="date">
            {{$new->date}}
        </div>
        <div style="background-image: url({{'/images/news/'.$new->image}})" class="news_material"></div>
        <div class="desc">
            <?php echo $new->description ?>
        </div>
    </div>
</section>
@endsection
