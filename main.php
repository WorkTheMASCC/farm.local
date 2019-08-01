<?php

namespace App;

require_once 'vendor/autoload.php';

$farm = new Farm();

// Добавление куриц
$chickens = $farm->addingAnimals(20, 0, 1);
// Сбор яиц у куриц
$chickens = $farm->collectingProducts($chickens);
// Подсчет общего количества яиц
$numberEggs = $farm->countingProducts($chickens);

// Добавление коров
$cows = $farm->addingAnimals(10, 8, 12);
// Сбор молока у коров
$cows = $farm->collectingProducts($cows);
// Подсчет общего количества молока
$amountMilk = $farm->countingProducts($cows);

echo 'Количество яиц: ' . $numberEggs . ' шт' . "\n";
echo 'Количество молока: ' . $amountMilk . ' л';
