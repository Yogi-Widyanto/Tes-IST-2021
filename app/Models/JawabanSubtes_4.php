<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanSubtes_4 extends Model
{
    use HasFactory;
    public function id_user4()
    {
        return $this->belongsTo(User::class);
    }
    public function id_soal4()
    {
        return $this->belongsTo(Subtes_4::class);
    }
}
