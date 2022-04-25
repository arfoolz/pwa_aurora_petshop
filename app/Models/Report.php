<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = "reports";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'tanggal',
        'nama',
        'jenis',
        'paystat_id',
        'total',
    ];

    public function paystat()
    {   
    return $this->belongsTo(Paystat::class);
    }
}
