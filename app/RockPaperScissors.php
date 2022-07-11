<?php

namespace App;

class RockPaperScissors
{
    public static function detectWinner(array $games): string
    {
        $conditions =
            [
                'R' => ['S'],
                'P' => ['R'],
                'S' => ['P']
            ];

        $abigailWins = 0;
        $bensonWins = 0;
        foreach ($games as $game) {
            if ($game[0] == $game[1]) continue;
            in_array($game[0], $conditions[$game[1]]) ? $bensonWins++ : $abigailWins++;
        }
        if ($abigailWins == $bensonWins) return "Tie!";
        return $abigailWins > $bensonWins ? "Abigail" : "Benson";
    }
}