<?php

namespace App;

class HideAndSeek
{
    public static function findHiddenName(string $crowd): string
    {
        $name = [];
        $letters = str_split($crowd);
        foreach ($letters as $l) {
            if (ctype_upper($l)) continue;
            $name[] = $l;
        }
        return implode('', $name);
    }
}
