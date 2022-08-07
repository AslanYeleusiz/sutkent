@extends('layouts.default')
@section('content')

<section class="video">
    <div class="container">
        <div class="hleb">
            @lang('site.Басты бет') / @lang('site.Галерея') / page 1
        </div>
        <div class="h">@lang('site.Галерея')</div>
        <div class="wrap">
            <div style="background-image: url('/images/gallery/1.jpg')" class="suret"></div>
            <div style="background-image: url('/images/gallery/1.jpg')" class="suret"></div>
            <div style="background-image: url('/images/gallery/1.jpg')" class="suret"></div>
            <div style="background-image: url('/images/gallery/1.jpg')" class="suret"></div>
            <div style="background-image: url('/images/gallery/1.jpg')" class="suret"></div>
            <div style="background-image: url('/images/gallery/1.jpg')" class="suret"></div>

        </div>
        <div class="pagination">
<!--Пагинацию надо сделать сюда-->
        </div>
    </div>
</section>





@endsection
