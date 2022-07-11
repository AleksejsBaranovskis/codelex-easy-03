<?php

use App\Cave;

test("should return the given text repeated n times", function () {
    expect(Cave::repeat("ab", 3))->toEqual("ababab");
    expect(Cave::repeat("kiwi", 1))->toEqual("kiwi");
    expect(Cave::repeat("cherry", 2))->toEqual("cherrycherry");
});