@extends('layout.main')
@section('content')

    
<!-- Main content -->
<section class="content">
<!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID Suplier</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No HP</th>
                </tr>
                </thead>
               <tbody>
                     @foreach($data_suplier as $data)
                <tr>
                  <td>{{ $data->id }}</td>
                  <td>{{ $data->nama }}</td>
                  <td>{{ $data->alamat }}</td>
                  <td>{{ $data->no_hp }}</td>
                  <td>
                    <a class="btn btn-info btn-sm mr-2" href="/barang_masuk/{{ $data->id }}/tambah">Tambah</a>  
                    <a class="btn btn-sm btn-warning" href="barang/{{ $data->id }}/edit">Edit</a> |
                    <a class="btn btn-sm btn-danger" onClick="return confirm('Anda yakin ?')" href="barang/{{ $data->id }}/delete">Delete</a>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->

</section>
<!-- /.content -->

@endsection