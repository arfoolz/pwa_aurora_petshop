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

        'tanggal_transaksi',                 
        'user_id',
        'nama_kontak',
        'alamat',
        'no_tlpn',
        'kode_resi',
        'bank_id',
        'paystat_id',
        'total_barang',
        'total_bayar',
        
    ];

    public function detail_order_shop()
    {
    return $this->belongsTo(Detail_Order_Shop::class);
    }

    public function product()
    {   
    return $this->belongsTo(Product::class);
    }

    public function user()
    {   
    return $this->belongsTo(User::class);
    }

    public function paystat()
    {   
    return $this->belongsTo(Paystat::class);
    }
}
