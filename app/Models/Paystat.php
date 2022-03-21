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

    // public function stok()
    // {
    //     return $this->hasMany(Invoice::class);
    // }
}
