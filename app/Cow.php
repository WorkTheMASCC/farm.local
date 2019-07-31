<?php

namespace App;

/**
 * Класс Корова
 */
class Cow extends Animal
{

    /**
     * Конструктор класса Корова
     *
     * @param  integer  $registrationNumber  регистрационный номер животного
     */
    function __construct($registrationNumber)
    {
        $this->registrationNumber = $registrationNumber;
    }

    /**
     * @var integer  $milkQuantity  Количество молока (в литрах)
     */
    public $milkQuantity;

    /**
     * Сбор молока
     */
    public function collectingMilk()
    {
        $this->milkQuantity = mt_rand(8, 12);

        return $this->milkQuantity;
    }
}
