<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanSubtes_8 extends Model
{
    use HasFactory;
    public function id_user8()
    {
        return $this->belongsTo(User::class);
    }
    public function id_soal8()
    {
        return $this->belongsTo(Subtes_8::class);
    }
}
