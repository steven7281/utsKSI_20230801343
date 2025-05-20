<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $fillable = [
        'supir_id',
        'plat_nomor',
        'jenis',
        'merk',
        'tahun',
    ];

    public function supir()
    {
        return $this->belongsTo(Supir::class);
    }
}
