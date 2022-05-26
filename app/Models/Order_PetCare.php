<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_PetCare extends Model
{
    use HasFactory;

    protected $table = "order_petcare";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'no_resi',
        'tanggal_transaksi',                     
        'user_id',
        'cage_id',
        'jumlah_kandang',
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

    public function detail_order_petcare()
    {   
    return $this->belongsTo(Detail_Order_PetCare::class);
    }

    public function cage()
    {
    return $this->belongsTo(Cage::class);
    }
}
