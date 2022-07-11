<?php

namespace App;

class SecretSociety
{
    public static function secretName(array $names): string
    {
        $firstLetter = [];
        foreach ($names as $name) {
            $firstLetter [] = mb_substr($name, 0, 1);
        }
        sort($firstLetter);
        return implode('', $firstLetter);
    }
}


