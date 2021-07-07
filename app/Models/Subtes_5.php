<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtes_5 extends Model
{
    use HasFactory;
    public function idSoalt5()
    {
        return $this->hasMany(JawabanSubtes_5::class);
    }
}
