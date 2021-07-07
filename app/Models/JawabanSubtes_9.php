<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanSubtes_9 extends Model
{
    use HasFactory;
    public function id_user9()
    {
        return $this->belongsTo(User::class);
    }
    public function id_soal9()
    {
        return $this->belongsTo(Subtes_9::class);
    }
}
