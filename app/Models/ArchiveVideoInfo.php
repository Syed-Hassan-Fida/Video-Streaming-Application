<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchiveVideoInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        "arch_id",
        "col1",
        "col2",
    ];
}
