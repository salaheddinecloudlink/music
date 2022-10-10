<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\SongType;
use App\Models\Song;
use App\Models\State;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();




        User::create([
            'name'=>'admin',
            'user_type'=>'admin',
            'email'=>'admin@admin.com',
            'Accept'=>'true',
            'password'=>bcrypt('12341234'),
            'email_verified_at'=>NOW()
        ]);
        // $Song = new song;
        // $Song->user_id = auth()->user()->id;
        // for ($i=0; $i <12 ; $i++) { 
        //     $Song->title = "song".$i;
        //     $Song->description = "song".$i;
        //     $Song->album_id = 0;
        //     $Song->SongType_id = "song".$i;
        //     Song::create($Song);
        // }
      
        SongType::create(['name'=>'Acoustic']);
        SongType::create(['name'=>'Afro-Beat']);
        SongType::create(['name'=>'Alternative']);
        SongType::create(['name'=>'Classical']);
        SongType::create(['name'=>'Country']);
        SongType::create(['name'=>'Dance']);
        SongType::create(['name'=>'Electronic']);
        SongType::create(['name'=>'Folk']);
        SongType::create(['name'=>'Gospel']);
        SongType::create(['name'=>'Hardcore']);
        SongType::create(['name'=>'Hip-Hop/Rap']);
        SongType::create(['name'=>'Instrumental']);
        SongType::create(['name'=>'Jazz']);
        SongType::create(['name'=>'Latin']);
        SongType::create(['name'=>'Metal']);
        SongType::create(['name'=>'Opera']);
        SongType::create(['name'=>'Pop']);
        SongType::create(['name'=>'R&B/Soul']);
        SongType::create(['name'=>'Reggae']);
        SongType::create(['name'=>'Reggaeton']);
        SongType::create(['name'=>'Rock']);
        SongType::create(['name'=>'Ska']);
        SongType::create(['name'=>'Soul']);
        SongType::create(['name'=>'Vocal']);
        SongType::create(['name'=>'World']);






        State::create(['name'=>'Alabama']);
        State::create(['name'=>'Alaska']);
        State::create(['name'=>'Arizona']);
        State::create(['name'=>'Arkansas']);
        State::create(['name'=>'California']);
        State::create(['name'=>'Colorado']);
        State::create(['name'=>'Connecticut']);
        State::create(['name'=>'Delaware']);
        State::create(['name'=>'Florida']);
        State::create(['name'=>'Georgia']);
        State::create(['name'=>'Hawaii']);
        State::create(['name'=>'Idaho']);
        State::create(['name'=>'Illinois']);
        State::create(['name'=>'Indiana']);
        State::create(['name'=>'Iowa']);
        State::create(['name'=>'Kansas']);
        State::create(['name'=>'Kentucky']);
        State::create(['name'=>'Louisiana']);
        State::create(['name'=>'Maine']);
        State::create(['name'=>'Maryland']);
        State::create(['name'=>'Massachusetts']);
        State::create(['name'=>'Michigan']);
        State::create(['name'=>'Minnesota']);
        State::create(['name'=>'Mississippi']);
        State::create(['name'=>'Missouri']);
        State::create(['name'=>'Montana']);
        State::create(['name'=>'Nebraska']);
        State::create(['name'=>'Nevada']);
        State::create(['name'=>'New Hampshire']);
        State::create(['name'=>'New Jersey']);
        State::create(['name'=>'New Mexico']);
        State::create(['name'=>'New York']);
        State::create(['name'=>'North Carolina']);
        State::create(['name'=>'North Dakota']);
        State::create(['name'=>'Ohio']);
        State::create(['name'=>'Oklahoma']);
        State::create(['name'=>'Oregon']);
        State::create(['name'=>'Pennsylvania']);
        State::create(['name'=>'Rhode Island']);
        State::create(['name'=>'South Carolin']);
        State::create(['name'=>'South Dakota']);
        State::create(['name'=>'Tennessee']);
        State::create(['name'=>'Texas']);
        State::create(['name'=>'Utah']);
        State::create(['name'=>'Vermont']);
        State::create(['name'=>'West Virginia']);
        State::create(['name'=>'Wisconsin']);
        State::create(['name'=>'Wyoming']);




    }
}
