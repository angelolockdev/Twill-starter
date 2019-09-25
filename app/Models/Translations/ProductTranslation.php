<?php

namespace App\Models\Translations;

use A17\Twill\Models\Model;

class ProductTranslation extends Model
{

    private static $STATIC_PRICE = 0.00;

    protected $fillable = [
        'title',
        'subtitle',
        'color',
        'weight',
        'price',
        'description',
        'active',
        'locale',
    ];
    protected $attributes = [
        'price' => self::STATIC_PRICE, 
    ];
}
