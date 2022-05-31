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
        'jenis_kandang',
        'jenis_hewan',
        'nama_kandang',
        'ukuran_kandang',
        'harga_kandang',
        'jumlah_kandang',
        'jumlah_harga',
          
        'tanggal_checkin',
        'tanggal_checkout',
        
        // 'provinsi',
        // 'kabupaten',
        // 'kecamatan',
        // 'kode_pos',
        // 'catatan',
        
    ];

    public function order_petcare()
    {
    return $this->belongsTo(Order_PetCare::class);
    }

    public function cage()
    {   
    return $this->belongsTo(Cage::class);
    }

    public function product()
    {   
    return $this->belongsTo(Product::class);
    }
    public function bank()
    {   
    return $this->belongsTo(Bank::class);
    }
}
