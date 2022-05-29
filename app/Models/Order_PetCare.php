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
        
        'tanggal_transaksi',                     
        'kode_resi',
        'user_id',
        'nama_kontak',
        'no_tlpn',
        'alamat',
        'bank_id',
        'paystat_id',
        'total_kandang',
        'total_bayar',

    ];

    public function detail_order_petcare()
    {   
    return $this->belongsTo(Detail_Order_PetCare::class);
    }

    public function cage()
    {
    return $this->belongsTo(Cage::class);
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
