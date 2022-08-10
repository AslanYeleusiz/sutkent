@extends('admin.layout.default')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">{{$typeName}} өзгерту</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/api">Басты бет</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('akimshilik.index')}}">{{$typeName}}</a></li>
                    <li class="breadcrumb-item active">{{$typeName}} өзгерту</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">{{$typeName}} формасын өзгертіңіз</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (count($errors) > 0)
    <div class="alert alert-danger mt-4">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="post" action="{{route($routeName.'.update',$user->id)}}" enctype="multipart/form-data">
       @method('PUT')
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Толық аты-жөні *</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Аты-жөніңіз..." required value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label for="email">email *</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Электронды почта..." required value="{{$user->email}}">
            </div>
            <div class="form-group">
                <label for="phone">Телефон нөмірі *</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Телефон нөмірі..." required value="{{$user->phone}}">
            </div>
            <div class="form-group">
                <label for="kk_rank">Қызметі (қазақша) *</label>
                <input type="text" name="kk_rank" class="form-control" id="kk_rank" placeholder="Қызметі..." required value="{{$user->kk_rank}}">
            </div>
            <div class="form-group">
                <label for="ru_rank">Қызметі (орысша) *</label>
                <input type="text" name="ru_rank" class="form-control" id="ru_rank" placeholder="Қызметі..." required value="{{$user->ru_rank}}">
            </div>
            <div class="form-group">
                <label for="image">Сурет жүктеу *</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" multiple>
                        <input type="hidden" name="last_image" value="{{$user->img}}">
                        <label class="custom-file-label" for="image">{{$user->img}}</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary px-5">Сақтау</button>
        </div>
    </form>
</div>



@endsection
