<?php

namespace Alalm3i\LaravelCart\Contracts;

use Alalm3i\LaravelCart\CartItem;

interface Calculator
{
    public static function getAttribute(string $attribute, CartItem $cartItem);
}
