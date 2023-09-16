<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bio extends Model
{
    use HasFactory;
    protected $fillable = [
        'arch_id',
        'title',
        'client',
        'creativeDir',
        'production',
        'music',
        'design',
    ];
}
