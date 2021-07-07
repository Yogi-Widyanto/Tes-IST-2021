<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtes_3 extends Model
{
    use HasFactory;
    public function idSoalt3()
    {
        return $this->hasMany(JawabanSubtes_3::class);
    }
}
