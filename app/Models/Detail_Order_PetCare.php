<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Order_PetCare extends Model
{
    use HasFactory;

    protected $table = "detail_order_petcare";
    protected $primaryKey = "id";
    protected $fillable = [

        'order_id', 
        'cage_id',
        'pet_id',
        'no_kandang',
        'ukuran_kandang',
        'harga_kandang',
        'jumlah_kandang',
        'jumlah_harga',
          
        'tanggal_checkin',
        'tanggal_checkout',
        'nama_kontak',
        'no_tlpn',
        'alamat',

        // 'provinsi',
        // 'kabupaten',
        // 'kecamatan',
        // 'kode_pos',
        // 'catatan',
        
    ];

    public function order_petcare()
    {
    return $this->belongsTo(Oder_PetCare::class);
    }

    public function cage()
    {   
    return $this->belongsTo(Cage::class);
    }

}
