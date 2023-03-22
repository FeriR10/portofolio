<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\Models\User;
use \App\Models\Suplier;

class SuplierController extends Controller
{
    public function newsuplier()
    {
        return view('admin.suplier.newsuplier');
    }
    public function tambah(Request $request)
    {
        $data = new Suplier;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->save();
        return redirect('/newsuplier')->with('sukses', 'Tambah data berhasil');
    }
    public function homesuplier()
    {
        $data_suplier = Suplier::all();
        return view('admin.suplier.dashboard', ['data_suplier' => $data_suplier]);
    }
    public function edit($id)
    {
        $data_suplier = Suplier::find($id);
        return view('admin.suplier.edit', ['data_suplier' => $data_suplier]);
    }
    public function update(Request $request, $id)
    {
        $data = Suplier::find($id);
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->update();

        return redirect('/homesuplier')->with('sukses','Data berhasil diedit');
    }
    public function delete($id)
    {
        $data = Suplier::find($id); 
        $data->delete();

        return redirect('/homesuplier')->with('sukses','Data berhasil dihapus');
    }
}
