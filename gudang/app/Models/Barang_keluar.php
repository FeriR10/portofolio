<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang_keluar extends Model
{
    use HasFactory;
    protected $table = 'barang_keluar';
    protected $fillable = [
        'kode_keluar',
        'id_barang',
        'jumlah',
        'tujuan',
        'alamat',
        'kontak_tujuan',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class, "id_barang");
    }
}
