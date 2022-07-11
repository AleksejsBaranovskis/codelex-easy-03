<?php

use App\Cashier;

test("should return the total price of all groceries", function () {
    expect(Cashier::calculateTotalPrice([
        new Cashier("Milk", 1, 1.50)
    ]))->toEqual(1.5);
    expect(Cashier::calculateTotalPrice([
        new Cashier("Milk", 1, 1.50),
        new Cashier("Cereals", 1, 2.50)
    ]))->toEqual(4);
    expect(Cashier::calculateTotalPrice([
        new Cashier("Milk", 1, 1.50),
        new Cashier("Eggs", 12, 0.10),
        new Cashier("Bread", 2, 1.60),
        new Cashier("Cheese", 1, 4.50)
    ]))->toEqual(10.4);
});