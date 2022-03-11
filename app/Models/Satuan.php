<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    use HasFactory;

    protected $table = "satuans";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','satuan',
    ];

    public function stok()
    {
        return $this->hasMany(Stok::class);
    }
}
