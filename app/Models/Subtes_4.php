<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtes_4 extends Model
{
    use HasFactory;
    public function idSoalt4()
    {
        return $this->hasMany(JawabanSubtes_4::class);
    }
}
