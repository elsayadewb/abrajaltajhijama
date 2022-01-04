<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socialprovider extends Model
{

    protected $fillable = [
        'provider_id',
        'provider',
        'user_id'
    ];
    protected function user()
    {
        return $this->belongsTo(User::class);

    }
}
