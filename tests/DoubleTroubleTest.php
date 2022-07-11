<?php

use App\DoubleTrouble;

test("should remove duplicate values from array", function () {
    expect(DoubleTrouble::removeDuplicates(["John", "Taylor", "John"]))->toEqual(["John", "Taylor"]);
    expect(DoubleTrouble::removeDuplicates(["Ann", "Ann", "Ann"]))->toEqual(["Ann"]);
    expect(DoubleTrouble::removeDuplicates(["John", "Taylor"]))->toEqual(["John", "Taylor"]);
});