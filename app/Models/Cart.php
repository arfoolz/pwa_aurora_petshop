<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = "carts";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'kode_barang_id',
        'nama_barang_id',
        'jumlah_barang',
        'total_harga',
    ];

    public function user()
    {
        return $this->hasMany(Stok::class);
    }
}
