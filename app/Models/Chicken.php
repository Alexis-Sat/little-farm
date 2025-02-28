<?php

namespace App\Models;

class Chicken extends BasicAnimal
{

    const animalName = 'chicken';
    const productName = 'eggs';

    protected int $minProducedValue;
    protected int $maxProducedValue;

    public function __construct(string $id, int $minEggs = 0, int $maxEggs =1)
    {
        parent::__construct($id);
        $this->minProducedValue = $minEggs;
        $this->maxProducedValue = $maxEggs;

    }


    public function getAnimalType(): string
    {
        return static::animalName;
    }


    public function animalProduct(): int
    {
        return rand($this->minProducedValue, $this->maxProducedValue);
    }

    public function getAnimalProductType(): string
    {
        return static::productName;
    }
}
