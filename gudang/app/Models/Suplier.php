<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
     use HasFactory;
     protected $table = 'suplier';
    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
    ];

    public function barang_masuk()
    {
        return $this->hasMany(Barang_masuk::class, "id_suplier");
    }

}
