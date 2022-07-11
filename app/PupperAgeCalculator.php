<?php

namespace App;

class PupperAgeCalculator
{
    public static function pupperAgeCalculator(int $age): string
    {
        $age = $age * 7;
        return "Your doggie is $age years old in dog years!";
    }
}
