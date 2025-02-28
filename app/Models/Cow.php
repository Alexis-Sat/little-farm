<?php

namespace App\Models;

class Cow extends BasicAnimal
{

    const animalName = 'cow';
    const productName = 'milk';

    protected int $minProducedValue;
    protected int $maxProducedValue;

    public function __construct(string $id, int $minMilk = 8, int $maxMilk =12)
    {
        parent::__construct($id);
        $this->minProducedValue = $minMilk;
        $this->maxProducedValue = $maxMilk;

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
