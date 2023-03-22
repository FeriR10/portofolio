<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Barang_keluar;
use \App\Models\Barang;

class BarangkeluarController extends Controller
{
    public function index()
    {
        // $barang_masuk = Barang_masuk::all();
        // return view('barang_masuk.index', [
        //     'barang_masuk' => $barang_masuk
        // ]);

        $barang_keluar = Barang_keluar::with('barang')->get();
        return view('barang_keluar.index', compact('barang_keluar'));
    }

    public function tambah($id)
    {
        $data_barang = Barang::find($id);
        return view('barang_keluar.tambah',[
            'data_barang' => $data_barang
        ]);
    }

    public function simpan(Request $request, $id)
    {
        // insert barang masuk
        $barang_keluar = new Barang_keluar;
        $barang_keluar->kode_keluar = $request->kode_keluar;
        $barang_keluar->id_barang = $id;
        $barang_keluar->jumlah = $request->jumlah;
        $barang_keluar->tujuan = $request->tujuan;
        $barang_keluar->alamat = $request->alamat;
        $barang_keluar->kontak_tujuan = $request->kontak_tujuan;
        $barang_keluar->save();

        // update barang
        $barang = Barang::find($id);
        $barang->jumlah = $barang->jumlah - $request->jumlah;
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
