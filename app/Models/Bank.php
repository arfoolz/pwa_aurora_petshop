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
        'id','bank',
    ];

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
    public function checkout()
    {
        return $this->hasMany(Checkout::class);
    }

}
