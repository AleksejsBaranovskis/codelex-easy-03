<?php

namespace App;

class Cashier
{
    protected string $product;
    protected int $quantity;
    protected float $price;

    public function __construct(string $product, int $quantity, float $price)
    {
        $this->product = $product;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public static function calculateTotalPrice(array $list): string
    {
        $totalSum = 0;
        foreach ($list as $grocery) {
            $totalSum += $grocery->price * $grocery->quantity;
        }
        return $totalSum;
    }
}
