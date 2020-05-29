<?php

namespace App\Eloquent\Concerns;


use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

trait BelongsToUser
{

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ScopeGlobalUser());

        static::creating(function (Model $obj) {
            $user = Auth::check();
            if ($user) {
                $obj->user_id = Auth::id();
            }
        });
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
