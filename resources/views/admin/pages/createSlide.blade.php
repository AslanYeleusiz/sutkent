@extends('admin.layout.default')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">Слайдерге енгізу</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/api">Басты бет</a></li>
                    <li class="breadcrumb-item active">Слайдерге енгізу</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Слайдерге жаңа сурет енгізіңіз</h3>
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
    <form method="post" action="{{route('sliders.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="title">Титулка</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Тақырыпты енгізіңіз..." required>
            </div>
            <div class="form-group">
                <label for="image">Файлды жүктеу</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" multiple required onchange="$('#fileName').text($('#image').val().split('/').pop().split('\\').pop();)">
                        <label id="fileName" class="custom-file-label" for="image">Файл жүктеңіз</label>
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
<div class="content-header">
    <div class="container-fluid">
        <p class="mt-2">
            <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Көмек?
            </button>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body w-50">
                <b>Маңызды:</b> Енгізген суреттер бір форматта болуы тиіс. Яғни 1920х720 немесе 3/8 (3-биіктігі, 8-ұзындығы).<br>Кез келген суреті форматтау үшін онлайн сервистерді қолдансаңыз болады. <br>Мысалы: <a target="_blank" href="https://www.img2go.com/ru/crop-image">https://www.img2go.com/ru/crop-image</a>
                <br>Егер cөйлем арасын 2-жолға бөлгіңіз келсе &lt;br&gt; символын қолданасыз.Бұл символды екінші жолға түсетін сөздің алдына қоясыз.
                <br>Мысалы: Сүткент, сүт мекенiм – &lt;br&gt;қалашығым!
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>


@endsection
