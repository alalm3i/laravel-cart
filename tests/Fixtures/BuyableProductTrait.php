<?php

namespace Alalm3i\LaravelCart\Tests\Fixtures;

use Alalm3i\LaravelCart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Model;

class BuyableProductTrait extends Model implements Buyable
{
    use \Alalm3i\LaravelCart\CanBeBought;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'title',
        'description',
        'price',
        'weight',
    ];

    protected $attributes = [
        'id'     => 1,
        'name'   => 'Item name',
        'price'  => 10.00,
        'weight' => 0,
    ];
}
