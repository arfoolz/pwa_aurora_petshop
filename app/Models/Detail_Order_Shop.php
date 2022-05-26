<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Order_Shop extends Model
{
    use HasFactory;

    protected $table = "order_petcare";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'order_id',
        'product_id',                     
        'bank_id',
        'paystat_id',
        'total_product',
        'total_bayar',
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
