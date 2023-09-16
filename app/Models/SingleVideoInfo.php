<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SingleVideoInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        "home_id",
        "col1",
        "col2",
    ];
}
