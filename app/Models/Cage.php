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
        'id','cage',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
