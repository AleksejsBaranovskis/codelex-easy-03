<?php

namespace App;

class Kindergarten
{
    public static function reverse(string $sentence, string $letter): string
    {
        $sentence = explode(' ', $sentence);
        for ($i = 0; $i < count($sentence); $i++) {
            if ($sentence[$i][0] == $letter) {
                $sentence[$i] = strrev($sentence[$i]);
            }
        }
        return implode(' ', $sentence);
    }
}
