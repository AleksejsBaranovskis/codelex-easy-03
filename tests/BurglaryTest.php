<?php

use App\Item;
use App\Burglary;

test("should return the total value of stolen items", function () {
    expect(Burglary::stolenItems([
        new Burglary('tv', 30),
        new Burglary('skate', 20),
        new Burglary('stereo', 50)
    ]))->toEqual(100);
    expect(Burglary::stolenItems([new Burglary('painting', 20000)]))->toEqual(20000);
    expect(Burglary::stolenItems([
        new Burglary('ring', 250),
        new Burglary('neclace', 500)
    ]))->toEqual(750);
});
test("should return a string 'Lucky you!', if nothing was stolen", function () {
    expect(Burglary::stolenItems([]))->toEqual("Lucky you!");
});