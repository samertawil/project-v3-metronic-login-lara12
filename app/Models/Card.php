<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 

class Card extends Model
{
     

    protected $fillable = ['card_title', 'card_text', 'card_img', 'active', 'user_id','status_id','card_url', 'card_use_in', 'publish_date'];

    
    public function statusname() {
        return $this->hasOne(status::class,'id','card_use_in');
    }
 
}
