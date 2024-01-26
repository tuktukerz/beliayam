<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackVisitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'page',
        'device',
        'ip_address',
        'country',
        'visit_at',
    ];
}
