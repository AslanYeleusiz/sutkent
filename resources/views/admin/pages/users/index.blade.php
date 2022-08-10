@extends('admin.layout.default')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">Қолданушылар</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/api">Басты бет</a></li>
                    <li class="breadcrumb-item active">Қоланушылар</li>
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
        <a href="{{route('qoldanushylar.create')}}"><button class="btn btn-primary px-5">Қосу</button></a>
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
                            Аты-жөні
                        </th>
                        <th style="width: 15%">
                            Қызметі
                        </th>
                        <th style="width: 20%">
                            Телефон нөмірі
                        </th>
                        <th style="width: 10%">
                            Эл.Почта
                        </th>
                        <th style="width: 15%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>
                            {{$user->id}}
                        </td>
                        <td>
                            {{$user->name}}
                        </td>
                        <td>
                            @if($user->is_admin) Администратор @else Қолданушы @endif
                        </td>
                        <td>
                            {{$user->phone}}
                        </td>
                        <td>
                            @if($user->email) {{$user->email}} @else Тіркелмеген @endif
                        </td>
                        <td class="project-actions text-right">
                            <form action="{{route('qoldanushylar.destroy',$user->id)}}" method="post" onSubmit="return window.confirm('Бұл қолданушыны өшіруді растайсыз ба?');" style="display: inline">
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
