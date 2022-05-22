<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $table = "checkouts";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',                       'nama_penerima',
        'no_resi',                  'no_tlpn',
        'tanggal_transaksi',        'alamat',
        'pesanan_id',               'provinsi',
        'user_id',                  'kota',
        'product_id',               'kabupaten',
        'total_item',               'kecamatan',
        'total_bayar',              'kode_pos',
        'paystat_id',               'catatan',
    ];

    public function checkout()
    {
    return $this->hasMany(Checkout::class);
    }

    public function product()
    {   
    return $this->belongsTo(Product::class);
    }

    public function user()
    {
    return $this->belongsTo(User::class);
    }
}
