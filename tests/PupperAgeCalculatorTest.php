<?php

use App\PupperAgeCalculator;

test("should return dog's age in dog years", function () {

    expect(PupperAgeCalculator::pupperAgeCalculator(1))->toEqual("Your doggie is 7 years old in dog years!");
    expect(PupperAgeCalculator::pupperAgeCalculator(10))->toEqual("Your doggie is 70 years old in dog years!");
    expect(PupperAgeCalculator::pupperAgeCalculator(15))->toEqual("Your doggie is 105 years old in dog years!");
});
