<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecoveryAnswer extends Model
{
    protected $fillable=['user_id','question_id','answer'];

    public function questions() {
        return $this->hasOne(RecoveryQuestion::class,'id','question_id');
    }
    
}
