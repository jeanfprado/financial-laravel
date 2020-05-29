<?php

namespace App\Eloquent\Concerns;

use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

trait BelongsToCategory
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
