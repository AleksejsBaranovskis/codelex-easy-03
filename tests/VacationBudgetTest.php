<?php

use App\VacationBudget;

test("should return the sum of people's budgets", function () {
    expect(VacationBudget::calculateBudget([
        new VacationBudget("John", 21, 23000),
        new VacationBudget("Steve", 32, 40000),
        new VacationBudget("Martin", 16, 2700)
    ]))->toEqual(65700);
    expect(VacationBudget::calculateBudget([
        new VacationBudget("John", 21, 29000),
        new VacationBudget("Steve", 32, 32000),
        new VacationBudget("Martin", 16, 1600)
    ]))->toEqual(62600);
    expect(VacationBudget::calculateBudget([
        new VacationBudget("Chloe", 12, 0),
        new VacationBudget("Emily", 68, 1200),
        new VacationBudget("Bob", 70, 1200)
    ]))->toEqual(2400);
});