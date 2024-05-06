<?php

namespace App\Models;

use Illuminate\Support\Number;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Accessormutator extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'acceessormutators';

    //Mutator Method
    public function setEmailAtrribute($value){
        $this->attributes['email'] = strtolower($value);
    }
    public function setUserNameAttribute($value){
        $this->attributes['user_name'] = strtolower($value);
    }
    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

    // protected function UserName(): Attribute{
    //     return Attribute::make(
    //         get: fn(string $value)=>ucwords($value),
    //         get: fn(string $value)=>strtolower($value),
    //     );
    // }

    //Accessor Method
    public function getDobAttribute($value){
        return date('d M Y',strtotime($value)); 
    }
    public function getUserNameAttribute($value){
        return ucwords($value);
    }
    // public function getSalaryAttribute($value){
    //     // return Number::currency($value);
    // }
}
