<?php

namespace App;

use App\Animal;
/**
 * Класс Ферма
 */
class Farm
{
    /**
     * Регистрационный номер животного
     *
     * @var integer
     */
    public $registrationNumber = 1;

    /**
     * Добавление животных на ферму
     *
     * @param      integer  $number  Количество животных одного типа
     * @param      integer   $min    Минимальное количество продукции производимое животным
     * @param      integer   $max    Максимальное количество продукции производимое животным
     *
     * @return     array  массив животных одного типа
     */
    public function addingAnimals($number, $min, $max)
    {
        for ($i = 0; $i < $number ; $i++) {
            $animal = new Animal($this->registrationNumber, $min, $max);
            $animals[] = $animal;
            $this->registrationNumber++;
        }

        return $animals;
    }

    /**
     * Сбор продукции
     *
     * @param  array  $animals  Массив животных
     *
     * @return  integer  количество полученой продукции
     */
    public function collectingProducts($animals)
    {
        foreach ($animals as $animal) {
            $animal->receiptProducts();
        }

        return $animals;
    }

    /**
     * Подсчет продукции
     *
     * @param  array  $animals  животные с собранной с них продукцией
     */
    public function countingProducts($animals)
    {
        $totalNumberProducts = array_sum(array_column($animals, 'quantityProducts'));

        return $totalNumberProducts;
    }
}
