<?php

namespace App\Models;

 
use App\Models\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    protected $fillable=['contact_type','identity_number','full_name','nick_name','fname','sname','tname','','lname','responsible','address_id','short_description','description','phone_primary','phone_secondary','work_phone_primary','work_phone_secondary','note','attchments','properties','isFavorite','profile_image','email','connect_ways'];

    protected $casts =[
        'attchments' => 'json',
        'properties' => 'json',
        'connect_ways'=>'json',
    ];

    public function contactTypeName() {
        return $this->hasOne(Status::class,'id','contact_type');
    }

    public static function rules($name) {
        return [
           $name=>['required'],
        ];
    }

    public function scopeSearchName($query,$value) {
        if($value) {
            $query->where('full_name','like',"%{$value}%")->orWhere('identity_number','like',"%{$value}%")->orWhere('phone_primary','like',"%{$value}%")->orWhere('phone_secondary','like',"%{$value}%");
        }

               
    }

}

















