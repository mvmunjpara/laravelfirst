<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];
    protected $fillable = [
        'name',
        'email',
        'password',
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
    public function post(){
        return $this->hasMany(Post::class);
    }
    public function roles(){
        return $this->belongsToMany(Role::class,'user_role');
    }
    public function phoneNumber(){
        // $this->hasOneThrough(Phone_number::class,Company::class,'user_id','company_id','id','id');
        return $this->hasOneThrough(Phone_number::class,Company::class);
    }
    public function company(){
        return $this->hasOne(Company::class);
    }
    public function posts(){
        return $this->hasMany(Post::class);
    }
    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
    protected static function booted() : void{
        static::deleted(function($user){
            $user->post()->delete();
        });
    }
}
