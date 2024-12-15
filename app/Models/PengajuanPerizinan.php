<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanPerizinan extends Model
{
    use HasFactory;
    public function jenis_perizinans()
    {
        return $this->belongsTo(JenisPerizinan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function employees()
    {
        return $this->belongsTo(Employee::class);
    }
}
