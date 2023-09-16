<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creative_Partners extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
    ];
}
