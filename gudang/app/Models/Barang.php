<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
     protected $table = 'barang';
    protected $fillable = [
        'nama_barang',
        'stok',
    ];

    public function barang_masuk()
    {
        return $this->hasMany(Barang_masuk::class, "id_barang");
    }
}
