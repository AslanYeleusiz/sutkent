@extends('admin.layout.default')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">Бейнероликтер</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/api">Басты бет</a></li>
                    <li class="breadcrumb-item active">Бейнероликтер</li>
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
        <a href="{{route('videos.create')}}"><button class="btn btn-primary px-5">Қосу</button></a>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->


<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Бейнероликтер тізімі</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th>
                            Тақырыбы
                        </th>
                        <th style="width: 30%">
                            Сілтеме
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
                        <td class="project_progress">
                            <a target="_blank" href="https://youtu.be/{{$material->link}}">https://youtu.be/{{$material->link}}</a>
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Енгізілді</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{route('videos.show', $material->id)}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <form action="{{route('videos.destroy',$material->id)}}" method="post" onSubmit="return window.confirm('Бұл материалды өшіруді растайсыз ба?');" style="display: inline">
                              @method('DELETE')
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
