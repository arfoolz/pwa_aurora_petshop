<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paystat extends Model
{
    use HasFactory;

    protected $table = "paystats";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','paystat',
    ];

    public function report()
    {
        return $this->hasMany(Report::class);
    }

    public function order_shop()
    {
        return $this->hasMany(Order_Shop::class);
    }
}
