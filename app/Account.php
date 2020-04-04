<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Eloquent\Concerns\BelongsToUser;

class Account extends Model
{
    use BelongsToUser;
    
    const TYPE_WALLET = 'wallet';
    const TYPE_BANK = 'bank';
    const TYPE_CREDIT_CARD= 'credit_card';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'active',
        'title',
        'type',
        'balance',
        'date_balance',
        'credit_close',
        'credit_number',
        'credit_due',
        'credit_limit',
        'id_moviment_balance'
    ];

}
