<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cotacao extends Model {

    protected $table = 'cotacao';

    protected $fillable = [
        'from',
        'to',
        'price',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];
}