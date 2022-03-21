<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    protected $table = "genders";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','gender',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function admin()
    {
        return $this->hasMany(Admin::class);
    }
}
