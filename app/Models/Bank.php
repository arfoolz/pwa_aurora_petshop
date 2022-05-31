<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    protected $table = "banks";
    protected $primaryKey = "id";
    protected $fillable = [
        'bank',
    ];

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function checkout()
    {
        return $this->hasMany(Checkout::class);
    }

    public function profile()
    {
        return $this->hasMany(Profile::class);
    }

    public function order_shop()
    {   
    return $this->belongsTo(Order_Shop::class);
    }

    public function order_petcare()
    {   
    return $this->belongsTo(Order_PetCare::class);
    }

    public function detail_order_shop()
    {   
    return $this->belongsTo(Detail_Order_Shop::class);
    }

    public function detail_order_petcare()
    {   
    return $this->belongsTo(Detail_Order_PetCare::class);
    }
}
