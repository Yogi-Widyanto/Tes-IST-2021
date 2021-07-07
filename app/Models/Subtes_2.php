<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtes_2 extends Model
{
    use HasFactory;
    public function idSoalt2()
    {
        return $this->hasMany(JawabanSubtes_2::class);
    }
}
