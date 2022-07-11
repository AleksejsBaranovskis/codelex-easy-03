<?php

namespace App;

class PeelTheOnion
{
    public static function peelOffOuterLayer(array $onion): array
    {
        $peeledOff = [];
        for ($i = 1; $i < count($onion) - 1; $i++) {
            for ($c = 1; $c < count($onion[0]) - 1; $c++) {
                $peeledOff [$i - 1][] = $onion[$i][$c];
            }
        }
        return $peeledOff;
    }
}