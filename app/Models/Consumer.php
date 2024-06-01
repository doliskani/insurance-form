<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Consumer extends Model
{
    use HasFactory;


    protected $fillable = [
        "first_name",
        "last_name",
        "email",
        "phone",
        "contact_preference",
        "street",
        "apartment",
        "city",
        "state",
        "zipcode"
    ];

    const PHONE_PREFERENCE = "phone";
    const EMAIL_PREFERENCE = "email";

    const CONTACT_PREFERENCE = [
        self::PHONE_PREFERENCE,
        self::EMAIL_PREFERENCE,
    ];

    function submissions() : HasMany
    {
        return $this->hasMany(Submission::class);
    }


}
