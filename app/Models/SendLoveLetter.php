<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendLoveLetter extends Model
{
    use HasFactory;
    protected $fillable = [
        'address',
        'contact',
        'email',
        'socialmedia',
    ];
}
