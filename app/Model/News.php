<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table    = 'news';
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
