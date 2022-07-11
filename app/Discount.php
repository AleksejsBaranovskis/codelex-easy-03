<?php

namespace App;

class Discount
{
    public static function countDiscount(float $price, int $discount): float
    {
        return $price - number_format(($price * $discount / 100), 2);
    }
}
