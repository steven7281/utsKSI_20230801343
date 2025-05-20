<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'no_ktp',
        'no_sim',
        'alamat',
        'telepon',
        'status',
    ];

    public function kendaraans()
    {
        return $this->hasMany(Kendaraan::class);
    }
}

