<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class archive extends Model
{
    use HasFactory;
    protected $fillable = [
        'year',
        'client',
        'project',
        'industry',
        'gif',
        'video',
        'title',
        'creativeDir',
        'production',
        'music',
        'design',
    ];
}
