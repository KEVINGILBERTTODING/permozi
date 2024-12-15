<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPerizinan extends Model
{
    use HasFactory;

    public function pengajuan_perizinans()
    {
        return $this->hasMany(PengajuanPerizinan::class);
    }

    public function persyaratan_perizinan()
    {
        return $this->hasMany(PersyaratanPerizinan::class);
    }
}
