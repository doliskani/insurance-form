<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Submission extends Model
{
    use HasFactory;


    protected $fillable = [
        "agreement",
        "home_insurance",
        "auto_insurance",
        "recreational_vehicle_insurance",
    ];


    function consumer() : BelongsTo
    {
        return $this->belongsTo(Consumer::class);    
    }
}
