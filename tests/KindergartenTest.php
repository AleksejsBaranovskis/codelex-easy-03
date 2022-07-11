<?php

use App\Kindergarten;

test("should reverses all the words in a sentence that start with a particular letter", function () {
    expect(Kindergarten::reverse("First nam to walk on the noom", "n"))->toEqual("First man to walk on the moon");
    expect(Kindergarten::reverse("reteP ate reppep", "r"))->toEqual("Peter ate pepper");
    expect(Kindergarten::reverse("I dekcip delkcip onions for supper", "d"))->toEqual("I picked pickled onions for supper");
});