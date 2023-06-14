<?php

namespace App\Http\Controllers;


use Auth;
use Carbon\Carbon;
use \App\Models\User;
use \App\Models\Barang;
use Illuminate\Http\Request;
use \App\Models\Barang_masuk;
use \App\Models\Barang_keluar;
use Barryvdh\DomPDF\Facade\Pdf;


class BarangController extends Controller
{

    public function newbarang()
    {
        return view('admin.newbarang');
    }
       public function tambah(Request $request)
    {
        $data = new Barang;
        $data->nama_barang = $request->nama_barang;
        $data->jumlah = 0;
        $data->save();
        return redirect('/newbarang')->with('sukses', 'Tambah data berhasil');
    }
    public function home()
    {
        $data_barang = Barang::all();
        return view('admin.dashboard', ['data_barang' => $data_barang]);
    }
    public function edit($id)
    {
        $data_barang = Barang::find($id);
        return view('admin.edit', ['data_barang' => $data_barang]);
    }
    public function update(Request $request, $id)
    {
        $data = Barang::find($id);
        $data->nama_barang = $request->nama_barang;
        $data->update();

        return redirect('/homebarang')->with('sukses','Data berhasil diedit');
    }
    public function delete($id)
    {
        $barang_masuk = Barang_masuk::where('id_barang', $id);
        $barang_masuk->delete();

        $barang_keluar = Barang_keluar::where('id_barang', $id);
        $barang_keluar->delete();

        $data = Barang::find($id);
        $data->delete();

        return redirect('/homebarang')->with('sukses','Data berhasil dihapus');
    }
    public function downloadpdf()
    {
        $data_barang = Barang::all();
        $pdf = Pdf::loadView('admin.dashboard-pdf',['data_barang'=>$data_barang]); 
        return $pdf->download('admin.dashboard-'.Carbon::now()->timestamp.'.pdf');
    }
}
