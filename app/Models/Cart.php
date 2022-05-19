<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = "carts";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'user_id',
        'produk_id',
        'jumlah_barang',
    ];

    public function product()
    {   
    return $this->belongsTo(Product::class);
    }

    public function user()
    {
    return $this->belongsTo(User::class);
    }

    public function gender()
    {   
    return $this->belongsTo(Gender::class);
    }
    
}
