<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Order_Shop extends Model
{
    use HasFactory;

    protected $table = "order_shop";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'no_resi',
        'tanggal_transaksi',                     
        'user_id',
        'product_id',
        'jumlah_barang',
        'jumlah_harga',
          
        'nama_kontak',
        'no_tlpn',
        'alamat',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'kode_pos',
        'catatan',
    ];

    public function detail_order_shop()
    {
    return $this->belongsTo(Detail_Order_Shop::class);
    }

    public function product()
    {   
    return $this->belongsTo(Product::class);
    }
   
}
