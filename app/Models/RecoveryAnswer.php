<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RecoveryAnswer extends Model
{
    protected $fillable = ['user_id', 'question_id', 'answer'];

    public function questions(): BelongsTo
    {
        return $this->belongsTo(RecoveryQuestion::class, 'question_id', 'id');
    }
}
