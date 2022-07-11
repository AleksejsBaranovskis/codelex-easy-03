<?php

namespace App;

class FindingNemo
{
    public static function findingNemo(string $sentence): string
    {
        $sentence = explode(' ', $sentence);
        $find = array_search('Nemo', $sentence);
        if ($find === 0) return "I found Nemo at $find!";
        return $find ? "I found Nemo at $find!" : "I can't find Nemo :(";
    }
}
