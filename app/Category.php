<?php

namespace App;

use App\Eloquent\Concerns\BelongsToUser;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use BelongsToUser;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'type', 'parent_id', 'user_id'
    ];

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }
}
