<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];
    protected $fillable = [

<<<<<<< HEAD
        'name', 'email', 'password', 'user_type', 'oauth_id', 'oauth_type', 'Accept',
=======
        'name', 'email', 'password', 'user_type', 'oauth_id', 'oauth_type'
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9
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

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
        return $this->hasone(Profile::class);
    }

    public function profile_artist()
    {
        return $this->hasone(profile_artist::class);
    }

<<<<<<< HEAD
    public function roles()
    {
        return $this->belongsToMany(Role::class);

    }

    public function songs()
    {

        return $this->hasMany(song::class);
    }

    public function albums()
    {

        return $this->hasMany(Album::class);
    }

    public function videos()
    {

        return $this->hasMany(Video::class);
    }

    public function events()
    {

        return $this->hasMany(Event::class);
    }

    public function lines()
    {

        return $this->hasMany(Line::class);
    }

    // public function favorite()
    // {

    //     return $this->hasMany(Line::class);
    // }
    
}
=======
    public function songs()
    {
        if (auth::user()->user_type == 'artist')
            return $this->hasMany(song::class);
    }
}
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9
