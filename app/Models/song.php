<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class song extends Model
{
    use HasFactory;
    protected $guarded = [];

<<<<<<< HEAD
    public function getRouteKeyName(){
		return 'slug';
	}



    public function artist()
    {

            return $this->hasOne(user::class);
    }

    public function album()
    {

            return $this->hasOne(album::class);
    }


    public function songtype(){

        return $this->hasOne(SongType::class,'id','SongType_id');

    }

    public function discussion(){

        return $this->hasOne(Discussion::class,'id','discusion_id');

    }

}

=======
    public function artist()
    {
        if (auth::user()->user_type == 'artist')
            return $this->hasOne(user::class);
    }
}
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9
