@extends('admin.layout.default')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">Бейнеролик өзгерту</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/api">Басты бет</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('videos.index')}}">Бейнероликтер</a></li>
                    <li class="breadcrumb-item active">Бейнеролик өзгерту</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Бейнероликті өзгерту</h3>
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
    <form method="post" action="{{route('videos.update', $material->id)}}">
      @method('PUT')
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
                <label for="kk_description">Сипаттамасын енгізіңіз (қазақша)</label>
                <textarea type="text" name="kk_description" class="form-control" id="kk_description" placeholder="Қысқаша сипаттамасын енгізіңіз..." rows="9">{{$material->kk_description}}</textarea>
            </div>
            <div class="form-group">
                <label for="ru_description">Сипаттамасын енгізіңіз (орысша)</label>
                <textarea type="text" name="ru_description" class="form-control" id="ru_description" placeholder="Қысқаша сипаттамасын енгізіңіз..." rows="9" >{{$material->ru_description}}</textarea>
            </div>

            <div class="form-group">
                <label for="link">Youtube сілтемесінің хэш кодын қойыңыз</label>
                <input type="text" name="link" class="form-control" id="link" placeholder="хэш кодын қойыңыз..." value="{{$material->link}}" required>
                <p class="mt-2">
                    <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Ол не?
                    </button>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body w-50">
                       Хэш код Youtube видеоның сілтемесінің аяқ жағында орналасқан символдар жиыны. Мысалы:
                        https://www.youtube.com/watch?v=tvZgpXt-fZw
                        <br>Бұл жерде Хэш код: <b>tvZgpXt-fZw</b>
                        <br>Немесе: https://youtu.be/tvZgpXt-fZw
                        <br>Хэш код: <b>tvZgpXt-fZw</b>
                        <br>Youtube сілтемені алу үшін керекті видеоның астында "Поделиться" бастырмасын басасыз. Пайда болған терезеде сіздің сілтемеңіз тұрады.
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
