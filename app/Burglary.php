<?php

namespace App;

abstract class Item
{
    private string $name;
    private int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}


class Burglary extends Item
{
    public static function stolenItems(array $list): string
    {
        $sum = 0;
        foreach ($list as $item) {
            $sum += ($item->getPrice());
        }
        return $sum > 0 ? "$sum" : 'Lucky you!';
    }
}
