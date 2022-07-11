<?php

use App\RockPaperScissors;

test("should return the winner of the game or 'Tie!' when there is no winner ", function () {
    expect(RockPaperScissors::detectWinner([["R", "P"], ["R", "S"], ["S", "P"]]))->toEqual("Abigail");
    expect(RockPaperScissors::detectWinner([["R", "R"], ["S", "S"]]))->toEqual("Tie!");
    expect(RockPaperScissors::detectWinner([["R", "P"], ["R", "P"], ["P", "R"]]))->toEqual("Benson");
});