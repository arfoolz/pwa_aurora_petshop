<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $table = "sizes";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','size','harga'
    ];

    public function petcare()
    {
        return $this->belongsTo(PetCare::class);
    }
}
