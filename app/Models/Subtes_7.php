<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtes_7 extends Model
{
    use HasFactory;
    protected $fillable = ['mainSoal_t7','keterangan_t7','t7_jawaban'];

    public function idSoalt7()
    {
        return $this->hasMany(JawabanSubtes_7::class);
    }
}
