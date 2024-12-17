<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class mpu extends Model
{

    use HasFactory;
    protected $fillable = [
        'value',
        'status',
    ];

    //
}