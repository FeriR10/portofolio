@extends('layout.main')
@section('content')

    <!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>New Barang</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Blank Page</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Title</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body">
            <form action="/tambah" method="post">
                {{ csrf_field() }}
                <div class="input-group mb-3">
                    <label class="mr-3 mt-1">Name</label>
                    <input type="text" name="nama" class="form-control">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>                                       
                </div>      
                <div class="input-group mb-3">
                    <label class="mr-3 mt-1">Alamat</label>
                    <input type="text" name="alamat" class="form-control">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>                                       
                </div>   
                <div class="input-group mb-3">
                    <label class="mr-3 mt-1">no_hp</label>
                    <input type="text" name="no_hp" class="form-control">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>                                       
                </div>                 
                <div class="float-right col-md-2">
                        <button type="submit" class="btn btn-success btn-block">Submite</button>
                </div>
            </form>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <!-- <button type="submit" class="btn btn-success float-right">Submit</button> -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->


@endsection