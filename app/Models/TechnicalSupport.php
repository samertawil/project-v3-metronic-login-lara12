<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TechnicalSupport extends Model
{
   protected $casts=[
      'uploaded_files'=>'json',
   ];
   protected $fillable = [
      'name',
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

   public function statusSubjectName(): BelongsTo
   {

      return $this->belongsTo(Status::class, 'subject_id', 'id');
   }


   public function statusTerminalName(): BelongsTo
   {

      return $this->belongsTo(Status::class, 'terminal_id', 'id');
   }

   public function statusIdName(): BelongsTo
   {

      return $this->belongsTo(Status::class, 'status_id', 'id');
   }

   public function scopeSearchName(Builder  $query,string $value): mixed
   {
     
      return $query->where('name', 'like', "%{$value}%")->orWhere('user_name', 'like', "%{$value}%");
   }

   // @phpstan-ignore missingType.iterableValue
   public function scopeSearchSubjectId(Builder  $query,array $value): mixed
   {
      
      return $query->whereIn('subject_id', $value);
   }
// @phpstan-ignore missingType.iterableValue
   public function scopeSearchStatusId(Builder  $query, array $value): mixed
   {
  
      return $query->whereIn('status_id', $value);
   }


   public function scopeSearchSupportTerminal(Builder $query,string $value): mixed
   {
   
      return $query->where('terminal_id', $value);
   }
   
 

}
