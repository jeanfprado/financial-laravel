<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class AccountPay extends Extract
{
    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('type', function (Builder $builder) {
            $builder->where('type', static::TYPE_EXPENSE);
        });

        static::creating(function (Model $model) {
            $model->type = static::TYPE_EXPENSE;
        });
    }
}
