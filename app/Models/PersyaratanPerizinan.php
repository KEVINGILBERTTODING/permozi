<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersyaratanPerizinan extends Model
{
    use HasFactory;

    public function jenis_perizinans()
    {
        return $this->belongsTo(JenisPerizinan::class);
    }

    public function file_perizinans()
    {
        return $this->hasMany(FilePerizinan::class);
    }
}
