<?php

namespace App\Eloquent\Concerns;

use App\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

trait BelongsToAccount
{
    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
