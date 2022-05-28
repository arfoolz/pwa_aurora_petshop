<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Order_Shop extends Model
{
    use HasFactory;

    protected $table = "detail_order_shop";
    protected $primaryKey = "id";
    protected $fillable = [

        'order_id',
        'product_id',
        'kategori_barang',
        'harga_barang',
        'jumlah_barang',
        'jumlah_harga',

        'nama_kontak',
        'no_tlpn',
        'alamat',
        // 'provinsi',
        // 'kabupaten',
        // 'kecamatan',
        // 'kode_pos',
        // 'catatan',
    ];

    public function order_shop()
    {
    return $this->belongsTo(Oder_PetCare::class);
    }

    public function product()
    {   
    return $this->belongsTo(Product::class);
    }

}
