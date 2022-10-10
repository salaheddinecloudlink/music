<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function artist()
    {

        return $this->hasOne(user::class);
    }

    public function videoType()
    {

        return $this->hasOne(SongType::class, 'id', 'SongType_id');

    }


    public function discussion(){

        return $this->hasOne(Discussion::class,'id','discusion_id');

    }

    public function playlistvideo()
    {
        return $this->belongsToMany(Favoritevideo::class);

    }
}
