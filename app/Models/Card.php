<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Card extends Model
{


    protected $fillable = ['card_title', 'card_text', 'card_img', 'active', 'user_id', 'status_id', 'card_url', 'card_use_in', 'publish_date'];

 
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class, 'card_use_in', 'id'); // Card points to Status
    }
}
