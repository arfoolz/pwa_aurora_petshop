<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = "kategoris";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','kategori',
    ];

    public function stok()
    {
        return $this->hasMany(Stok::class);
    }
}
