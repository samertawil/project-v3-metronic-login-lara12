<?php

namespace App\Models;

 
use App\Models\Status;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Contact extends Model
{
    use HasFactory;

    protected $fillable=['contact_type','identity_number','full_name','nick_name','fname','sname','tname','','lname','responsible','address_id','short_description','description','phone_primary','phone_secondary','work_phone_primary','work_phone_secondary','note','attchments','properties','isFavorite','profile_image','email','connect_ways','region','city', 'niberhood','location'];

    protected $casts =[
        'attchments' => 'json',
        'properties' => 'json',
        'connect_ways'=>'json',
    ];

    public function contactTypeName(): HasOne {
        return $this->hasOne(Status::class,'id','contact_type');
    }


         /**
 * @param  \Illuminate\Database\Eloquent\Builder<Contact>  $query
 * @param  string  $value
 * @return \Illuminate\Database\Eloquent\Builder<Contact>
 */
    public function scopeSearchName(Builder $query,string $value): Builder {
        if($value) {
            $query->where('full_name','like',"%{$value}%")->orWhere('identity_number','like',"%{$value}%")->orWhere('phone_primary','like',"%{$value}%")->orWhere('phone_secondary','like',"%{$value}%");
        }

        return $query;
               
    }

}

















