<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stationary extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'status'
    ];
    protected $attributes=[
        'hit'=>0
    ];
}
