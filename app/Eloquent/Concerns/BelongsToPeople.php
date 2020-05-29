<?php

namespace App\Eloquent\Concerns;

use App\Person;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

trait BelongsToPeople
{
    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
