@extends('admin.layout.default')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">Жаңалықтар</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/api">Басты бет</a></li>
                    <li class="breadcrumb-item active">Жаңалықтар</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid  mb-2">
        <a href="{{route('admin.news.create')}}"><button class="btn btn-primary px-5">Қосу</button></a>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->


<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Жаңалықтар тізімі</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            Тақырыбы
                        </th>
                        <th style="width: 35%">
                            Қысқаша сипаттамасы
                        </th>
                        <th>
                            Сурет
                        </th>
                        <th style="width: 8%" class="text-center">
                            Статус
                        </th>
                        <th style="width: 15%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($materials as $material)
                    <tr>
                        <td>
                            {{$material->id}}
                        </td>
                        <td>
                            <a>
                                {{$material->kk_title}}
                            </a>
                        </td>
                        <td>
                            <ul class="list-inline">
                                {{$material->kk_short_description}}
                            </ul>
                        </td>
                        <td class="project_progress">
                            {{$material->image}}
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Енгізілді</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.news.edit', $material->id)}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <form action="{{route('admin.news.delete',$material->id)}}" method="post" onSubmit="return window.confirm('Бұл материалды өшіруді растайсыз ба?');" style="display: inline">
                               @csrf
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>



@endsection
