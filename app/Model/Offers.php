<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    protected $table    = 'offers';
    protected $fillable = [
        'link',
        'title_en',
        'title_ar',
        'content_en',
        'content_ar',
        'start_at',
        'end_at',
        'photo',

    ];

}
