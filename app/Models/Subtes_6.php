<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtes_6 extends Model
{
    use HasFactory;
    public function idSoalt6()
    {
        return $this->hasMany(JawabanSubtes_6::class);
    }
}
