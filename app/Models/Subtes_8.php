<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtes_8 extends Model
{
    use HasFactory;
    public function idSoalt8()
    {
        return $this->hasMany(JawabanSubtes_8::class);
    }
}
