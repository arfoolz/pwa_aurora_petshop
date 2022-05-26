<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Order_PetCare extends Model
{
    use HasFactory;

    protected $table = "order_petcare";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'order_id',
        'cage_id',                     
        'bank_id',
        'paystat_id',
        'total_cage',
        'total_bayar',
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
