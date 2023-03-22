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
          <h3 class="card-title">Data Barang Keluar</h3>
          @if(session('sukses'))
          <div class="alert alert-success">
            <button type="button" class="btn btn-success close" data-dismiss="alert" sty>&times;</button>
            <h4 class="message-head">{{ session('sukses') }}</h4> 
          </div>
          @endif
          <div class="card-tools">
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
                  <th>Tujuan</th>
                  <th>Alamat</th>
                  <th>Kontak</th>
                </tr>
            </thead>
            <tbody>
              @foreach($barang_keluar as $data)
                <tr>
                  <td>{{ $data->id }}</td>
                  <td>{{ $data->kode_keluar }}</td>
                  <td>{{ $data->barang->nama_barang }}</td>
                  <td>{{ $data->jumlah }}</td>
                  <td>{{ $data->tujuan }}</td>
                  <td>{{ $data->alamat }}</td>
                  <td>{{ $data->kontak_tujuan }}</td>
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