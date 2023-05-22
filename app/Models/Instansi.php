<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }
}
