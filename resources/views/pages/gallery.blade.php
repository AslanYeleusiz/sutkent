@extends('layouts.default')
@section('content')
<section class="gallery video">
    <div class="popup aj-c" style="display: none">
        <div class="container" id="popup">
           <button class="btn exitBtn">
               <img src="{{asset('images/exitBtn.svg')}}" alt="">
           </button>
            <div id="carouselExampleControls" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('images/gallery/1.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/gallery/2.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/gallery/3.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item active">
                        <img src="{{asset('images/gallery/4.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/gallery/5.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/gallery/6.jpg')}}" class="d-block w-100" alt="...">
                    </div>
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
            <a href="{{ LaravelLocalization::localizeUrl('/') }}">@lang('site.Басты бет')</a> / @lang('site.Галерея') / page 1
        </div>
        <div class="h">@lang('site.Галерея')</div>
        <div class="wrap">
            <div style="background-image: url('/images/gallery/1.jpg')" class="suret"></div>
            <div style="background-image: url('/images/gallery/2.jpg')" class="suret"></div>
            <div style="background-image: url('/images/gallery/3.jpg')" class="suret"></div>
            <div style="background-image: url('/images/gallery/4.jpg')" class="suret"></div>
            <div style="background-image: url('/images/gallery/5.jpg')" class="suret"></div>
            <div style="background-image: url('/images/gallery/6.jpg')" class="suret"></div>
        </div>
        <div class="pagination">
            <!--Пагинацию надо сделать сюда-->
        </div>
    </div>
</section>





@endsection
