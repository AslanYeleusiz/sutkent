@extends('layouts.default')
@section('content')

<section class="akim">
    <div class="container">
        <div class="hleb">
            <a href="{{ LaravelLocalization::localizeUrl('/') }}">@lang('site.Басты бет')</a> / <a href="{{ LaravelLocalization::localizeUrl('/auyl') }}">@lang('site.Ауыл туралы')</a> / {{$kenes}}
        </div>
        <div class="h">{{$kenes}}</div>
        <div class="admins">
@foreach($users as $user)
            <div class="block">
                <div style="background-image: url({{asset('/images/kenes/avatar/'.$user->img)}})" class="img"></div>
                <div class="body">
                    <div class="head"><b>{{$user->name}}</b><br>
                        {{$user->rank}}</div>
                    <div class="mid">
                        Тел.: {{$user->phone}} <br>E-mail: {{$user->email}}
                    </div>
                    <div class="glassBtn empty"></div>
                </div>
            </div>
@endforeach
        </div>
    </div>
</section>





@endsection
