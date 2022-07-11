<?php

namespace App;

class MatchMaker
{
    public static function matchPair(array $women, array $men)
    {
        if (count($women) !== count($men)) {
            return 'Cupid is on vacation';
        }
        $pairs = [];
        for ($i = 0; $i < count($women); $i++) {
            $pairs [] = [$women[$i], $men[$i]];
        }
        return $pairs;
    }
}

var_dump(MatchMaker::matchPair(["Ana", "Amy", "Lisa"], ["Bob", "Josh"]));