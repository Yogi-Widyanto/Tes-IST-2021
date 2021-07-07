<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanSubtes_2 extends Model
{
    use HasFactory;
    public function id_user2()
    {
        return $this->belongsTo(User::class);
    }
    public function id_soal2()
    {
        return $this->belongsTo(Subtes_2::class);
    }
}
