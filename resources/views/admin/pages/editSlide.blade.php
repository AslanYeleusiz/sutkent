@extends('admin.layout.default')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">Слайдты өзгерту</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/api">Басты бет</a></li>
                    <li class="breadcrumb-item active">Слайдты өзгерту</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Слайдты өзгертіңіз</h3>
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
    <form method="post" action="{{route('sliders.update', $material->id)}}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="kk_title">Титулка (қазақша)</label>
                <textarea type="text" name="kk_title" class="ckeditor" id="kk_title" placeholder="Тақырыпты енгізіңіз...">{{$material->kk_title}}</textarea>
            </div>
            <div class="form-group">
                <label for="ru_title">Титулка (орысша)</label>
                <textarea type="text" name="ru_title" class="ckeditor" id="ru_title" placeholder="Тақырыпты енгізіңіз...">{{$material->ru_title}}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Файл жүктеу</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" multiple onchange="$('#mime').text('Файл жүктелді');">
                        <input type="text" hidden name="last_image" id="" value="{{$material->image}}">
                        <label id="mime" class="custom-file-label" for="image">{{$material->image}}</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary px-5">Сақтау</button>
        </div>
    </form>
    <div class="p-2 w-50"><img src="{{asset('images/gallery/'.$material->img)}}" alt=""></div>
</div>



@endsection
