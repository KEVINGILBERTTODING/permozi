<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public function pengajuan_perizinans()
    {
        return $this->hasMany(PengajuanPerizinan::class);
    }
}
