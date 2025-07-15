<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Card extends Model
{
    use SoftDeletes;

    protected $fillable = ['card_title', 'card_text', 'card_img', 'active', 'user_id','status_id','card_url'];

    
    public function statusname() {
        return $this->hasOne(status::class,'id','status_id');
    }
 
}
