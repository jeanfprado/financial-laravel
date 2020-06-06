<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransferAccounts extends Model
{
    protected $table = 'transferAccounts';

    protected $fillable = [
        'account_id',
        'date_transfer',
        'amount',
        'account_provider_id',
        'account_recipient_id',
        'user_id'
    ];
}
