<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Barang_masuk;
use \App\Models\Barang;
use \App\Models\Suplier;

class BarangmasukController extends Controller
{
    public function index()
    {
        // $barang_masuk = Barang_masuk::all();
        // return view('barang_masuk.index', [
        //     'barang_masuk' => $barang_masuk
        // ]);

        $barang_masuk = Barang_masuk::with('barang', 'suplier')->get();
        return view('barang_masuk.index', compact('barang_masuk'));
    }

    public function tambah($id)
    {
        $data_barang = Barang::find($id);
        $data_suplier = Suplier::all();
        return view('barang_masuk.tambah',[
            'data_barang' => $data_barang,
            'data_suplier' => $data_suplier
        ]);
    }

    public function simpan(Request $request, $id)
    {
        // insert barang masuk
        $barang_masuk = new Barang_masuk;
        $barang_masuk->id_pengirim = $request->id_pengirim;
        $barang_masuk->id_barang = $id;
        $barang_masuk->jumlah = $request->jumlah;
        $barang_masuk->id_suplier = $request->id_suplier;
        $barang_masuk->save();

        // update barang
        $barang = Barang::find($id);
        $barang->jumlah = $barang->jumlah + $request->jumlah;
        $barang->update();

        return redirect('/homebarang')->with('sukses', 'Tambah data sukses');
    }

    public function edit($id)
    {
        $paket = Paket::find($id);
        return view('admin.paket.edit', [
            'paket' => $paket,
        ]);
    }

    public function update(Request $request, $id)
    {
        $paket = Paket::find($id);
        $paket->name_paket = $request->name_paket;
        $paket->harga = $request->harga;
        $paket->durasi = $request->durasi;
        $paket->keterangan = $request->keterangan;
        $paket->update();

        return redirect('/paket')->with('sukses', 'Edit data sukses');
    }

    public function delete($id)
    {
        $user = Paket::find($id);
        $user->delete();

        return redirect('/paket')->with('sukses', 'Hapus data sukses');
    }
}
