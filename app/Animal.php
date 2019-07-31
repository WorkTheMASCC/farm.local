<?php

namespace App;

/**
 * Класс Животное
 */
abstract class Animal
{

    /**
     * @var string  $registrationNumber   регистрационный номер животного
     */
    public $registrationNumber;

    /**
     * Конструктор класса Животное
     *
     * @param  integer  $registrationNumber  регистрационный номер животного
     */
    function __construct($registrationNumber)
    {
        $this->registrationNumber = $registrationNumber;
    }
}
