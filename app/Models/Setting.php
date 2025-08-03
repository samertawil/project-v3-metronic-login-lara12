<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

/**
 * @property string $key
 */

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ['key', 'value','description','notes','attributes','value_array'];

    protected $casts=[
        'attributes'=>'array',
        'value_array'=>'array'
    ];

    protected function Key(): Attribute
    {
        return Attribute::make(
           
            set: fn (string $value) => str_replace(' ', '_', $value) ,  
        );
    }
}
