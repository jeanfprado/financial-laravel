<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Eloquent\Concerns\BelongsToUser;
use App\Eloquent\Concerns\BelongsToPeople;
use App\Eloquent\Concerns\BelongsToAccount;
use App\Eloquent\Concerns\BelongsToCategory;

class Extract extends Model
{
    use BelongsToUser,
        BelongsToPeople,
        BelongsToAccount,
        BelongsToCategory;

    const TYPE_RECEIVE = 'receive';
    const TYPE_EXPENSE = 'expense';

    protected $table = 'extracts';

    protected $fillable = [
        'account_id',
        'person_id',
        'due_at',
        'amount',
        'category_id',
        'type',
        'settled',
        'settled_at',
        'user_id'
    ];

    public function isRecipe()
    {
        return $this->type === static::TYPE_RECEIVE;
    }
}
