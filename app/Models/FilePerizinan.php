<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilePerizinan extends Model
{
    use HasFactory;

    public function persyaratan_perizinan()
    {
        return $this->belongsTo(PersyaratanPerizinan::class);
    }
}
