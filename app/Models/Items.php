<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{

    protected $fillable = [
        'items_name',
        'items_type',
        'items_conditions',
        'items_description',
        'items_defects',
        'items_amount',
    ];

}
