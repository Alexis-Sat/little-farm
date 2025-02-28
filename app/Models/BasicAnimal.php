<?php

namespace App\Models;

// Можно было через интерфейсы еще, было бы "более гибкое решение", но почему бы и не абстрактный класс?
abstract class BasicAnimal
{
    protected string $id;

    public function __construct(string $id)
    {
        return $this->id = $id;
    }

    abstract public function getAnimalType();
    abstract public function animalProduct();
    abstract public function getAnimalProductType();

}
