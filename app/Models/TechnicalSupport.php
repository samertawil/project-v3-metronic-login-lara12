<?php

namespace App\Models;

use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TechnicalSupport extends Model
{
   protected $fillable=[
    'name' ,
    'user_name',
    'mobile',
    'terminal_id',
    'subject_id',
    'issue_description',
    'replay',
    'replay_date',
    'response_employee_id',
    'status_id'
   ];

   public function statusSubjectName(): BelongsTo {
     
      return $this->belongsTo(Status::class,'subject_id','id');
   }

 
   public function statusTerminalName(): BelongsTo {
     
      return $this->belongsTo(Status::class,'terminal_id','id');
   }

   public function statusIdName(): BelongsTo {
     
      return $this->belongsTo(Status::class,'status_id','id');
   }



}
