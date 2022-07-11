<?php

namespace App;

class LargestSwap
{
    public static function swap(int $number): bool
    {
        if ($number < 10 || $number > 99) {
            echo 'Please, enter only two-digit number!' . PHP_EOL;
            exit;
        }
        $number = str_split($number);
        return $number[0] >= $number[1];
    }
}
