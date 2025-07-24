<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $region_name
 */
class Region extends Model
{
    use HasFactory;

    protected $fillable =['region_name'];
}
