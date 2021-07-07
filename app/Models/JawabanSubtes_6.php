<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanSubtes_6 extends Model
{
    use HasFactory;
    public function id_user6()
    {
        return $this->belongsTo(User::class);
    }
    public function id_soal6()
    {
        return $this->belongsTo(Subtes_6::class);
    }
}
