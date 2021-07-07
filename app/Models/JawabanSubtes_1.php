<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanSubtes_1 extends Model
{
    use HasFactory;
    public function id_user()
    {
        return $this->belongsTo(User::class);
    }
    public function id_soal()
    {
        return $this->belongsTo(Subtes_1::class);
    }
}
