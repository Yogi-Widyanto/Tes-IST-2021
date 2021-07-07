<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanSubtes_5 extends Model
{
    use HasFactory;
    public function id_user5()
    {
        return $this->belongsTo(User::class);
    }
    public function id_soal5()
    {
        return $this->belongsTo(Subtes_5::class);
    }
}
