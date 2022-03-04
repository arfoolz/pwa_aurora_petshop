<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_barang',
        'nama',
        'jenis',
        'satuan',
        'stok',
        'harga_jual',
        'harga_beli',
        'gambar',
        'deskripsi',
        'expired',
    ];
}
