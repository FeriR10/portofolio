@section('content')
    <!-- Content Header (Page header) -->
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/fontawesome-free/css/all.min.css')}}">
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
                <thead> 
                <tr>
                  <th>ID Barang</th>
                  <th>Nama Barang</th>
                  <th>Stok         </th>
                </tr>
                </thead>
               <tbody>
                     @foreach($data_barang as $data)
                <tr>
                  <td>{{ $data->id }}</td> 
                  <td>{{ $data->nama_barang }}</td>
                  <td>{{ $data->jumlah }}</td>
                </tr>
                @endforeach
                </tbody>
              </table>
        </div>
       
@endsection