<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extract extends Model
{
    protected $fillable = [
        'account_id',
        'person_id',
        'dua_id',
        'amount',
        'category_id',
        'type',
        'settled',
        'settled_at',
        'user_id'
    ];
}
