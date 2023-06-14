@extends('layout.main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Barang</h1>
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
          <h3 class="card-title">Data Barang</h3>
          @if(session('sukses'))
          <div class="alert alert-success">
            <button type="button" class="btn btn-success close" data-dismiss="alert" sty>&times;</button>
            <h4 class="message-head">{{ session('sukses') }}</h4> 
          </div>
          @endif
         <a href="/download-barang-pdf">
          <button class="btn btn-success">Download PDF</button>
         </a>
          <div class="card-tools">
            <a href="/newbarang" class="btn btn-info">Tambah Barang</a>
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          </div> 
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID Barang</th>
                  <th>Nama Barang</th>
                  <th>Stok         </th>
                  <th>Opsi</th>
                </tr>
                </thead>
               <tbody>
                     @foreach($data_barang as $data)
                <tr>
                  <td>{{ $data->id }}</td>
                  <td>{{ $data->nama_barang }}</td>
                  <td>{{ $data->jumlah }}</td>
                  <td>
                    <a class="btn btn-info btn-sm mr-2" href="/barang_masuk_tambah/{{ $data->id }}">Tambah Stok</a> 
                    <a class="btn btn-info btn-sm mr-2" href="/barang_keluar/{{ $data->id }}/tambah">Kirim</a>  
                    <a class="btn btn-sm btn-warning" href="barang/{{ $data->id }}/edit">Edit</a> |
                    <a class="btn btn-sm btn-danger" onClick="return confirm('Anda yakin ?')" href="barang/{{ $data->id }}/delete">Delete</a>
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
    <!-- /.content -->
@endsection