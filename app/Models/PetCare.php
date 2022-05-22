<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetCare extends Model
{
    use HasFactory;
    protected $table = "petcares";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'user_id',
        'nama_pemilik',
        'alamat',
        'jenis_hewan',
        'ukuran_hewan',
        'jumlah_hewan',
        'tanggal_checkin',
        'tanggal_checkout',
        'bank_id',
        'total_bayar',
    ];

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}
