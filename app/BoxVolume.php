<?php

namespace App;

class BoxVolume
{
    public static function calculateVolume(array $box): int
    {
        $volume = [];
        foreach ($box as $value) {
            $volume[] = array_product($value);
        }
        return array_sum($volume);
    }
}
