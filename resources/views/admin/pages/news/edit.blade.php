@extends('admin.layout.default')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">Материал өзгерту</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/api">Басты бет</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('admin.news')}}">Жаңалықтар</a></li>
                    <li class="breadcrumb-item active">Материал өзгерту</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Материал өзгерту</h3>
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
    <form method="post" action="{{route('admin.news.update', $material->id)}}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="kk_title">Тақырыбы (қазақша)</label>
                <input type="text" name="kk_title" class="form-control" id="kk_title" placeholder="Тақырыпты енгізіңіз..." value="{{$material->kk_title}}">
            </div>
            <div class="form-group">
                <label for="ru_title">Тақырыбы (орысша)</label>
                <input type="text" name="ru_title" class="form-control" id="ru_title" placeholder="Тақырыпты енгізіңіз..." value="{{$material->ru_title}}">
            </div>

            <div class="form-group">
                <label for="kk_short_description">Қысқаша сипаттамасы (қазақша)</label>
                <textarea type="text" name="kk_short_description" class="form-control" id="kk_short_description" placeholder="Қысқаша сипаттамасын енгізіңіз..." rows="3">{{$material->kk_short_description}}</textarea>
            </div>
            <div class="form-group">
                <label for="ru_short_description">Қысқаша сипаттамасы (орысша)</label>
                <textarea type="text" name="ru_short_description" class="form-control" id="ru_short_description" placeholder="Қысқаша сипаттамасын енгізіңіз..." rows="3">{{$material->ru_short_description}}</textarea>
            </div>

            <div class="form-group">
                <label for="kk_description">Сипаттамасын енгізіңіз (қазақша)</label>
                <textarea type="text" name="kk_description" class="ckeditor" id="kk_description" placeholder="Қысқаша сипаттамасын енгізіңіз..." rows="9">{{$material->kk_description}}</textarea>
            </div>
            <div class="form-group">
                <label for="ru_description">Сипаттамасын енгізіңіз (орысша)</label>
                <textarea type="text" name="ru_description" class="ckeditor" id="ru_description" placeholder="Қысқаша сипаттамасын енгізіңіз..." rows="9" >{{$material->ru_description}}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Файл жүктеу</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" multiple onchange="$('#mime').text('Файл жүктелді');">
                        <input type="text" hidden name="last_image" id="" value="{{$material->image}}">
                        <label id="mime" class="custom-file-label" for="image">Сурет салу міндетті емес.</label>
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
