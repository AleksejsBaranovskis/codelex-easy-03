<?php

use App\HideAndSeek;

test("should return all lowercase letters", function () {
    expect(HideAndSeek::findHiddenName("UcUNFYGaFYFYGtNUH"))->toEqual("cat");
    expect(HideAndSeek::findHiddenName("bEEFGBuFBRrHgUHlNFYaYr"))->toEqual("burglar");
    expect(HideAndSeek::findHiddenName("YFpHUFBrFBYFBYLGBYoEFGBMENT"))->toEqual("pro");
});