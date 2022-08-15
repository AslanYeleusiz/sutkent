@extends('layouts.default')
@section('links')<link rel="canonical" href="https://sutkent.kz/kk/gallery">@endsection

@section('title', 'Галерея')

@section('content')
<section class="gallery video">
    <div class="galleryPopup popup aj-c" style="display: none">
        <div class="container" id="popup">
           <button class="btn exitBtn">
               <img src="{{asset('images/exitBtn.svg')}}" alt="">
           </button>
            <div id="carouselExampleControls" class="carousel slide">
                <div class="carousel-inner">
                   @foreach($galleryes as $gallery)
                    <div class="carousel-item active">
                        <img src="{{asset('images/gallery/'.$gallery->img)}}" class="d-block w-100" alt="...">
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="hleb">
            <a href="{{ LaravelLocalization::localizeUrl('/') }}">@lang('site.Басты бет')</a> / @lang('site.Галерея')
        </div>
        <div class="h">@lang('site.Галерея')</div>
        <div class="wrap">
            @foreach($galleryes as $gallery)
            <div style="background-image: url({{asset('/images/gallery/'.$gallery->img)}})" class="suret"></div>
            @endforeach
        </div>
        <div class="paginator">
            <!--Пагинацию надо сделать сюда-->
            {{$galleryes->links('components.paginate')}}
        </div>
    </div>
</section>





@endsection
