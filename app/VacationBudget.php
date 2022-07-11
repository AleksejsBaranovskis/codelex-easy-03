<?php

namespace App;

class VacationBudget
{
    private int $budget;
    private string $name;
    private int $age;

    public function __construct(string $name, int $age, int $budget)
    {
        $this->budget = $budget;
        $this->name = $name;
        $this->age = $age;
    }

    public function getBudget(): int
    {
        return $this->budget;
    }

    public static function calculateBudget(array $persons): int
    {
        $totalBudget = 0;
        foreach ($persons as $person) {
            $totalBudget += $person->getBudget();
        }
        return $totalBudget;
    }
}

$son = new VacationBudget('Raimonds', 16,50);
$dad = new VacationBudget('Pauls', 38,600);
$mom = new VacationBudget('Marija', 37,500);
$persons = [$son, $dad, $mom];
echo VacationBudget::calculateBudget($persons) . ' eur' . PHP_EOL;