<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cage extends Model
{
    use HasFactory;

    protected $table = "cages";
    protected $primaryKey = "id";
    protected $fillable = [
        'kode_kandang',
        'nama_kandang',
        'no_kandang',
        'size_id',
        'harga_id',
        'status_id',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    public function size()
    {
        return $this->belongsTo(Size::class);
    }
    public function pet()
    {
        return $this->belongsTo(Size::class);
    }
}
