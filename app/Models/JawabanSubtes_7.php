<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanSubtes_7 extends Model
{
    use HasFactory;
    public function id_user7()
    {
        return $this->belongsTo(User::class);
    }
    public function id_soal7()
    {
        return $this->belongsTo(Subtes_7::class);
    }
}
