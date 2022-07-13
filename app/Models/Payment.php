<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'id_payment',
        'type_payment',
        'value_payment',
        'status_payment',
        'clienthotspots_id',
    ];
}
