<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtes_9 extends Model
{
    use HasFactory;
    public function idSoalt9()
    {
        return $this->hasMany(JawabanSubtes_9::class);
    }
}
