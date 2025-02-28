<?php

namespace App\Models;

class Farm
{
    private array $animals = [];

    public function addAnimal(BasicAnimal $animal)
    {
        $this->animals[] = $animal;
    }

    public function collectProducts(): array
    {
        $products = [];
        foreach ($this->animals as $animal) {
            $key = $animal->getAnimalProductType();
            if (empty($products[$key])){
                $products[$key] = $animal->animalProduct();
            } else $products[$key] += $animal->animalProduct();
        }
        return $products;
    }

    public function getAnimalCount(): array
    {
        $counts = [];
        foreach ($this->animals as $animal) {
            $key = $animal->getAnimalType(); //
            if (empty($counts[$key])){
                $counts[$key] = 1; // не лучший вариант, но у нас счетное количество
            } else  $counts[$key] ++;
        }
        return $counts;
    }
}
