<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Eloquent\Concerns\BelongsToUser;

class Person extends Model
{
    use BelongsToUser;

    /*
    | Type of person
    */
    const TYPE_CLIENT = 'client';
    const TYPE_PROVIDER = 'provider';

    /*
    | Person Type
    */
    const TYPE_PERSON = 'person';
    const TYPE_COMPANY = 'company';

    protected $table = 'people';

    protected $fillable = [
        'name', 'document','type', 'client', 'provider', 'person_type', 'person', 'company', 'phone',
        'address', 'city', 'state', 'zip_code', 'district', 'user_id', 'active', 'user_id', 'id', 'users'
    ];
}
