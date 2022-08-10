@extends('admin.layout.default')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">Галлерея</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/api">Басты бет</a></li>
                    <li class="breadcrumb-item active">Галлерея</li>
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
        <a href="{{route('gallery.create')}}"><button class="btn btn-primary px-5">Қосу</button></a>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->


<section class="content">

    <!-- Default box -->
    <div class="card card-success">
        <div class="card-header">
            <h4 class="card-title">Галлерея</h4>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach($materials as $material)
                <div class="col-sm-2">
                    <a href="{{route('gallery.show',$material->id)}}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                        <img src="{{asset('/images/gallery/'.$material->img)}}" class="img-fluid mb-2" alt="white sample">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- /.card -->

</section>



@endsection
