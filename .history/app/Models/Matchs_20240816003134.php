<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matchs extends Model
{
    use HasFactory;
    protected $fillable = [
        'volunteer_id',
        'organization_id',
        'matched_at',
    ];
}
