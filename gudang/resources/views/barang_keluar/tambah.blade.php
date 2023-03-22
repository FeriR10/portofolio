@extends('layout.main')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Barang Keluar</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
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
            <h3 class="card-title">Tambah Barang Keluar {{ $data_barang->nama_barang }}</h3>
            @if(session('sukses'))
            <div class="alert alert-success">
                <button type="button" class="btn btn-success close" data-dismiss="alert" sty>&times;</button>
                <h4 class="message-head">{{ session('sukses') }}</h4>
            </div>
            @endif
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body">

            <form action="/barang_keluar/{{ $data_barang->id }}/simpan" method="post">
                {{ csrf_field() }}
                <div class="input-group mb-3">
                    <label class="mr-3 mt-1">Kode Kirim</label>
                    <input type="text" name="kode_keluar" class="form-control">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <label class="mr-3 mt-1">Jumlah</label>
                    <input type="text" name="jumlah" class="form-control">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <label class="mr-3 mt-1">Tujuan</label>
                    <input type="text" name="tujuan" class="form-control">
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
                    <label class="mr-3 mt-1">Kontak </label>
                    <input type="text" name="kontak_tujuan" class="form-control">
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
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection
