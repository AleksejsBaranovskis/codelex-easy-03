<?php

use App\LargestSwap;

test("should return true if it's the largest of two possible digit swaps, false if not", function () {
    expect(LargestSwap::swap(27))->toEqual(false);
    expect(LargestSwap::swap(43))->toEqual(true);
    expect(LargestSwap::swap(14))->toEqual(false);
});