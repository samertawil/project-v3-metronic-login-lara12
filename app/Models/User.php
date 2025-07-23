<?php

namespace App\Models;

 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'email',
        'password',
        'user_name',
        'mobile',
        'user_type',
        'user_activation',
        'status_id',
        'need_to_change',
        'profile_image',
 
 
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

 
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            
        ];
    }
   
    public static function user($user_name) {
       return  $user = User::where('user_name', $user_name)->first();
    }

 
    public function scopeSearchName($query,$value) {
        if($value) {
            $query->where('name','like',"%{$value}%")->orWhere('user_name','like',"%{$value}%");
        }

               
    }

    public function scopeSearchUserType($query,$value) {
        if($value) {
            $query->where('user_type',$value);
        }
    }

    public function rolesRelation() {
        return $this->belongsToMany(Role::class,'role_user');
     }
}
