<?php

namespace App;

/**
 * Класс Курица
 */
class Chicken extends Animal
{

    /**
     * Конструктор класса Курица
     *
     * @param  integer  $registrationNumber  регистрационный номер животного
     */
    function __construct($registrationNumber)
    {
        $this->registrationNumber = $registrationNumber;
    }

    /**
     * @var integer|double  $eggsQuantity  Количество яиц (в штуках)
     */
    public $eggsQuantity;

    /**
     * Сбор яиц
     */
    public function collectingEgges()
    {
        $this->eggsQuantity = mt_rand(0, 1);

        return $this->eggsQuantity;
    }
}
