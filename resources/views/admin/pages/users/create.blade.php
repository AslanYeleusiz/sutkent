@extends('admin.layout.default')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">Қолданушыны енгізу</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/api">Басты бет</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('qoldanushylar.index')}}">Қолданушылар</a></li>
                    <li class="breadcrumb-item active">Қолданушыны енгізу</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Қолданушыны енгізіңіз</h3>
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
    <form method="post" action="{{route('qoldanushylar.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Толық аты-жөні *</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Аты-жөніңіз..." required>
            </div>
            <div class="form-group">
                <label for="email">email *</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Электронды почта..." required>
            </div>
            <div class="form-group">
                <label for="password">Пароль *</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Пароль..." required>
            </div>
            <div class="form-group">
                <label for="phone">Телефон нөмірі *</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Телефон нөмірі..." required>
            </div>
            <div class="form-group">
                <label for="rank">Қызметі</label>
                <input type="text" name="rank" class="form-control" id="rank" placeholder="Қызметі...">
            </div>
            <div class="form-group">
               <label for="gender">Жынысы</label>
                <select name="gender" id="gender" class="form-control">
                    <option value="0" selected>Анықталмаған</option>
                    <option value="1">Ер</option>
                    <option value="2">Әйел</option>
                </select>
            </div>
            <div class="form-group">
               <label for="is_admin">Админ</label>
                <select name="is_admin" id="is_admin" class="form-control">
                    <option value="0" selected>Жоқ</option>
                    <option value="1">Ия</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image">Сурет жүктеу</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" multiple>
                        <label class="custom-file-label" for="image">Сурет жүктеу міндетті емес</label>
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
