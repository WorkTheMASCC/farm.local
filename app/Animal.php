<?php

namespace App;

/**
 * Класс Животное
 */
class Animal
{

    /**
     * @var string  $registrationNumber   регистрационный номер животного
     */
    public $registrationNumber;

    /**
     * @var integer  $min Минимальное количество продукции производимое животным
     */
    public $min;

    /**
     * @var integer  $max Максимальное количество продукции производимое животным
     */
    public $max;
    /**
     * @var integer  $quantityProducts Количество продукции произведенное животным
     */
    public $quantityProducts = 0;

    /**
     * Конструктор класса животное
     *
     * @param  integer  $registrationNumber  регистрационный номер животного
     * @param  integer  $min                 Минимальное количество продукции
     * @param  integer  $max                 Максимальное количество продукции
     */
    function __construct($registrationNumber, $min, $max)
    {
        $this->registrationNumber = $registrationNumber;
        $this->min = $min;
        $this->max = $max;
    }

    /**
     * Получение продукции
     */
    public function receiptProducts()
    {
        $this->quantityProducts += mt_rand($this->min, $this->max);
    }
}
