@extends('layout.main')
@section('content')


<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DATA BARANG</h1>
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

      <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID Barang</th>
                  <th>Nama Barang</th>
                  <th>STOK</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                    
                <tr>
              
                    <a class="btn btn-sm btn-warning" href="">Edit</a> |
                    <a class="btn btn-sm btn-danger" onClick="return confirm('Anda yakin ?')" href="">Delete</a>
                  </td>
                </tr>
               
                </tbody>
              </table>
            </div>

    </section>
    <!-- /.content -->



@endsection