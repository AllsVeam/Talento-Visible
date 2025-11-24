<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipalities extends Model
{
    use HasFactory;

    protected $fillable = [
        'cve_state',
        'municipality_name',
        'cve',
    ];
}
