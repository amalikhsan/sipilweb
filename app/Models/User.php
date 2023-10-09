<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\dataBlog;
use App\Models\DataEvent;
use App\Models\DataAlumni;
use App\Models\dataDosenTendik;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'username',
        'password',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function dataBlog(){
        return $this->hasMany(dataBlog::class);
    }

    public function dataDosenTendik()
    {
        return $this->hasMany(dataDosenTendik::class);
    }

    public function DataAlumni()
    {
        return $this->hasMany(DataAlumni::class);
    }

    public function DataEvent()
    {
        return $this->hasMany(DataEvent::class);
    }
}
