<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;

    protected $fillable = [
        'stok_barang',
        'nama',
        'jenis',
        'satuan',
        'stok',
        'harga_jual',
        'gambar',
        'deskripsi',
        'expired',
    ];
}
