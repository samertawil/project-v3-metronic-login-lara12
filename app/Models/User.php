<?php

namespace App\Models;

 
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property string $profile_image
 
 */
class User extends Authenticatable
{

    use  HasFactory,Notifiable;


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
   
    public static function user(string $user_name): ?User {
       return  $user = User::where('user_name', $user_name)->first();
    }

 /**
 * @param  \Illuminate\Database\Eloquent\Builder<User>  $query
 * @param  string  $value
 * @return \Illuminate\Database\Eloquent\Builder<User>
 */
    public function scopeSearchName(Builder  $query,string $value): Builder {
        if($value) {
            $query->where('name','like',"%{$value}%")->orWhere('user_name','like',"%{$value}%");
        }
        return $query;
               
    }

     /**
 * @param  \Illuminate\Database\Eloquent\Builder<User>  $query
 * @param  string  $value
 * @return \Illuminate\Database\Eloquent\Builder<User>
 */
    public function scopeSearchUserType(Builder $query,string $value): Builder {
        if($value) {
            $query->where('user_type',$value);
        }
        return $query;
    }

 
    public function rolesRelation(): BelongsToMany {
        return $this->belongsToMany(Role::class,'role_user');
     }
}
