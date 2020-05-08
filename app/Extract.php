<?php

namespace App;

use App\Eloquent\Concerns\BelongsToUser;
use Illuminate\Database\Eloquent\Model;

class Extract extends Model
{
     use BelongsToUser;

    const TYPE_RECEIVE = 'receive';
    const TYPE_EXPENSE = 'expense';


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
