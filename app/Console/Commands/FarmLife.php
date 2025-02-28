<?php

namespace App\Console\Commands;

use App\Models\Chicken;
use App\Models\Cow;
use App\Models\Farm;
use Illuminate\Console\Command;

class FarmLife extends Command
{

    protected $signature = 'farm:life';
    protected $description = 'Little Farm Simulator';

    public function handle()
    {
        $farm = new Farm();

        // Начальная инициализация по условию задания
        for ($i = 1; $i <= 10; $i++) {
            $farm->addAnimal(new Cow("cow_$i"));
        }
        for ($i = 1; $i <= 20; $i++) {
            $farm->addAnimal(new Chicken("chicken_$i"));
        }

        // Вывод информации о количестве животных
        $this->info('Animals quantity on start:');
        $this->info(json_encode($farm->getAnimalCount()));

        $totalProducts = [];
        // Соберем продукцию с фермы в течении недели (7 раз - по 1 разу в день)
        for ($day = 1; $day <= 7; $day++) {
            $products = $farm->collectProducts();
            $totalProducts = $this->calculateProducts($products, $totalProducts);
        }


        // Вывод общего количества собранной продукции с фермы за неделю
        $this->info('Weekly farm products:');
        $this->info(json_encode($totalProducts));

        // Добавление новых животных
        for ($i = 1; $i <= 5; $i++) {
            $farm->addAnimal(new Chicken("chicken_new_$i"));
        }
        $farm->addAnimal(new Cow("cow_new_1"));

        // Вывод информации о количестве животных после добавления
        $this->info('Animals quantity after adding new ones:');
        $this->info(json_encode($farm->getAnimalCount()));

        // Сбор продукции с фермы после добавления животных
        $totalProductsAfter = [];
        for ($day = 1; $day <= 7; $day++) {
            $products = $farm->collectProducts();
            $totalProductsAfter = $this->calculateProducts($products, $totalProductsAfter);
        }

        // Вывод общего количества продукции с фермы после добавления животных
        $this->info('Weekly farm products after changes:');
        $this->info(json_encode($totalProductsAfter));

    }

    // Сборка массива продуктов отдельно, чтобы не раздражал цикл в цикле
    private function calculateProducts($products, $result): array
    {
        foreach ($products as $key => $product) {
            if (empty($result[$key])){
                $result[$key] = $product;
            } else $result[$key] += $product;
        }
        return $result;
    }
}
