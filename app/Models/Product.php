<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'kategori_id',
        'satuan_id',
        'stok',
        'harga_jual',
        'harga_beli',
        'gambar',
        'deskripsi',
        'expired',
    ];

    public function satuan()
    {   
    return $this->belongsTo(Satuan::class);
    }

    public function kategori()
    {   
    return $this->belongsTo(Kategori::class);
    }

    public function cart()
    {   
    return $this->belongsTo(Cart::class);
    }

}