<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TechnicalSupport extends Model
{
   protected $fillable=[
    'name' ,
    'user_name',
    'mobile',
    'subject',
    'subject_id',
    'issue_description',
   ];
}
