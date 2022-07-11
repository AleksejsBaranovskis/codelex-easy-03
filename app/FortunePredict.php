<?php

namespace App;

class FortunePredict
{
    public static function fortuneTeller(string $color, string $location, string $name, string $item): string
    {
        return "You will meet $name in $location, and find $item in a $color room together.";
    }
}
