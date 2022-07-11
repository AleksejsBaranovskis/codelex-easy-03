<?php

use App\Discount;

test("should return the final price after the discount", function () {
    expect(Discount::countDiscount(1500, 50))->toEqual(750);
    expect(Discount::countDiscount(89, 20))->toEqual(71.2);
    expect(Discount::countDiscount(100, 75))->toEqual(25);
});