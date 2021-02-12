<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'publisher',
        'description',
        'ISBN',
        'price',
        'discount_prcg',
        'pages',
        'date_release',
        'status'

    ];
    protected $attributes=[
        'hit'=>0
    ];
}
