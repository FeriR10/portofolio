@extends('layout.main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Barang Masuk</h1>
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
          <h3 class="card-title">Data Barang Masuk</h3>
          @if(session('sukses'))
          <div class="alert alert-success">
            <button type="button" class="btn btn-success close" data-dismiss="alert" sty>&times;</button>
            <h4 class="message-head">{{ session('sukses') }}</h4> 
          </div>
          @endif
          <div class="card-tools">
            <a class="btn btn-info btn-sm mr-2" href="/barang_masuk_tambah">Tambah Barang Masuk</a>  
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <th>Barang</th>
                  <th>Jumlah</th>
                  <th>Suplier</th>
               
                </tr>
            </thead>
            <tbody>
              @foreach($barang_masuk as $data)
                <tr>
                  <td>{{ $data->id }}</td>
                  <td>{{ $data->id_pengirim }}</td>
                  <td>{{ $data->barang->nama_barang }}</td>
                  <td>{{ $data->jumlah }}</td>
                  <td>{{ $data->suplier->nama }}</td>
                  
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection