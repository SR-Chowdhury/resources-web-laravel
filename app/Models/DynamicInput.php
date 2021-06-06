<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DynamicInput extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'image',
        'email',
        'phone',
    ];
}
