<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    public function posts(){
        // $this->HasManyThrough(Post::class,User::class,'country_id','user_id','id','id');
        return $this->hasManyThrough(Post::class,User::class,'country_id','user_id','id','id');

    }
}
