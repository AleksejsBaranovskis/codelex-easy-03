<?php

namespace App;

class MaxMin
{
    public static function findMinAndMax(array $numbers): array
    {
        return [min($numbers), max($numbers)];
    }
}
