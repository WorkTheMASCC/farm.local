<?php

namespace App;

require_once 'vendor/autoload.php';

/**
 * Регистрационный номер животного
 *
 * @var integer
 */
$registrationNumber = 1;

// Добавление 20 куриц
for ($i = 0; $i < 20 ; $i++) {
    $chicken = new Chicken($registrationNumber);
    // Сбор яиц
    $chicken->collectingEgges();
    /**
     * Массив с объектами Курица
     */
    $chickens[] = $chicken;

    $registrationNumber++;
}

//Добавление 10 коров
for ($i = 0; $i < 10 ; $i++) {
    $cow = new Cow($registrationNumber);
    // Сбор молока
    $cow->collectingMilk();
    /**
     * Массив с объектами Корова
     */
    $cows[] = $cow;

    $registrationNumber++;
}
/**
 * Количество яиц
 *
 * @var integer
 */
$numberEggs = array_sum(array_column($chickens, 'eggsQuantity' ));
/**
 * Количество молока
 *
 * @var integer
 */
$amountMilk = array_sum(array_column($cows, 'milkQuantity' ));

echo 'Количество яиц: ' . $numberEggs . ' шт' . "\n";

echo 'Количество молока: ' . $amountMilk . ' л';
