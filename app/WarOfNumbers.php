<?php

namespace App;

class WarOfNumbers
{
    public static function whoIsAWinner(array $numbers): string
    {
        $odd = [];
        $sumOdd = 0;
        $even = [];
        $sumEven = 0;
        foreach ($numbers as $number) {
            if ($number == 0) continue;
            $number % 2 === 0 ? $even [] = $number : $odd [] = $number;
        }
        foreach ($odd as $number) {
            $sumOdd += $number;
        }
        foreach ($even as $number) {
            $sumEven += $number;
        }
        $comparison = abs($sumOdd - $sumEven);
        if ($comparison === 0) return "There are no winners";
        return $sumOdd > $sumEven ? "Odd numbers win by $comparison" : "Even numbers win by $comparison";
    }
}
