<?php

namespace App\Model;

use App\Comment;
use App\User;
use Illuminate\Database\Eloquent\Model;
 use SearchableTrait;

class Product extends Model
{

    protected $table    = 'products';
    protected $fillable = [
        'id',
        'product_name_ar',
        'product_name_en',
        'description_ar',
        'description_en',
        'add_by_ar',
        'add_by_en',
        'add_by_photo',
        'discount',
        'price_old',
        //--------------start virgin two
        'photo',
        'department_id',
        'trade_id',
        'manu_id',
        'flavor_id',
        'flavor',
        'color',
        'color_id',
        'size_id',
        'size',
        'currency_id',
        'price',
        'stock',
        'start_at',
        'end_at',
        'start_offer_at',
        'end_offer_at',
        'price_offer',
        'other_data',
        'other_color',
        'weight',
        'weight_id',
        'status',
        'reason',
    ];

//    ----------------------------------------start Search
    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */


        'columns' => [
            'products.product_name_ar' => 10,
            'products.product_name_en' => 5,
            'products.description_ar' => 2,
            'products.description_en' => 1,

        ],

    ];

//    ----------------------------------------End   Search

//    public function comments()
//    {
//        return $this->hasMany(Comment::class);
////        return $this->hasMany('App\Model\Mall', 'country_id', 'id');
//    }
//---------------start comment


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function files()
    {
        return $this->hasMany('App\File','relation_id','id')->where('file_type','product');
    }


 }
