<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtes_1 extends Model
{
    use HasFactory;
    public function idSoalt1()
    {
        return $this->hasMany(JawabanSubtes_1::class);
    }
    
}
