<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    public function idUser1()
    {
        return $this->hasMany(JawabanSubtes_1::class);
    }
    public function idUser2()
    {
        return $this->hasMany(JawabanSubtes_2::class);
    }
    public function idUser3()
    {
        return $this->hasMany(JawabanSubtes_3::class);
    }
    public function idUser4()
    {
        return $this->hasMany(JawabanSubtes_4::class);
    }
    public function idUser5()
    {
        return $this->hasMany(JawabanSubtes_5::class);
    }
    public function idUser6()
    {
        return $this->hasMany(JawabanSubtes_6::class);
    }
    public function idUser7()
    {
        return $this->hasMany(JawabanSubtes_7::class);
    }
    public function idUser8()
    {
        return $this->hasMany(JawabanSubtes_8::class);
    }
    public function idUser9()
    {
        return $this->hasMany(JawabanSubtes_9::class);
    }
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_lengkap',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
