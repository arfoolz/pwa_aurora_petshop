<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = "users";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama_user',
        'gender_id',
        'email',
        'alamat',
        'no_tlpn',
        'password',
    ];

    public function bank()
    {   
    return $this->hasMany(Bank::class);
    }

    public function product()
    {
    return $this->hasMany(Product::class);
    }

    // public function bank()
    // {
    // return $this->belongsTo(Bank::class);
    // }
}


