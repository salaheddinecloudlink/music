<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    use HasFactory;


    public function discussion(){

        return $this->hasOne(Discussion::class,'id','discusion_id');

    }

    public function user(){

        return $this->hasOne(User::class,'id','user_id');

    }
}
