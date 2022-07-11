<?php

use App\SecretSociety;

test("should return a string of first letters from array items", function () {
    expect(SecretSociety::secretName((["Adam", "Sarah", "Malcolm"])))->toEqual("AMS");
    expect(SecretSociety::secretName(["Harry", "Newt", "Luna", "Cho"]))->toEqual("CHLN");
    expect(SecretSociety::secretName(["Phoebe", "Chandler", "Rachel", "Ross", "Monica", "Joey"]))->toEqual("CJMPRR");
});