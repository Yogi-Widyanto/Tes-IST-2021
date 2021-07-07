<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanSubtes_3 extends Model
{
    use HasFactory;
    public function id_user3()
    {
        return $this->belongsTo(User::class);
    }
    public function id_soal3()
    {
        return $this->belongsTo(Subtes_3::class);
    }
}
