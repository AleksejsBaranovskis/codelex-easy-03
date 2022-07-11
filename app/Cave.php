<?php

namespace App;

class Cave
{
    public static function repeat(string $word, int $repeat): string
    {
        return str_repeat("$word", $repeat);
    }
}
