<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $table = "levels";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','level',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    // public function admin()
    // {
    //     return $this->hasMany(Admin::class);
    // }
}
