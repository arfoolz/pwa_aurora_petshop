<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Order_shop extends Model
{
    use HasFactory;

    protected $table = "carts";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'user_id',
        'product_id',
        'harga_barang',
        'jumlah_barang',
        'total_harga',
    ];

    public function product()
    {   
    return $this->belongsTo(Product::class);
    }

    public function user()
    {
    return $this->belongsTo(User::class);
    }

    public function bank()
    {
    return $this->belongsTo(Bank::class);
    }
}