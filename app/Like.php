<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Model\Product;
use Illuminate\Database\Eloquent;

class Like extends Model

{
    protected $table = 'likes';
    protected $fillable = [
        'like',
        'product_id',
        'user_id',

    ];
//
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }

}