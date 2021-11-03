<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'date',
        'time',
        'pizza_id',
        'smallPizza',
        'mediumPizza',
        'largePizza',
        'body',
        'status',
    ];
}
