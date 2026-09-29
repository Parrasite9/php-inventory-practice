<?php

use Isaiah\PhpInventoryPractice\Item;
use Isaiah\PhpInventoryPractice\NamedItem;

require 'vendor/autoload.php';


$bolts = new Item;
// echo $bolts->quantity;
// echo $bolts->name;
// $bolts->quantity = 15;
// echo $bolts->quantity;


$nuts = new Item;
// echo $nuts->quantity;
// $nuts->name = 'nuts';
// echo $nuts->name;

// $bolts->addOne();
// $bolts->receive(55);
// echo $bolts->quantity;
// $bolts->receive(2);
// echo $bolts->quantity;
// $bolts->ship(33);
// echo $bolts->quantity;
// $nuts->ship(3);
// echo $nuts->quantity;

// $currentBoltQuantity = $bolts->getQuantity();
// echo $currentBoltQuantity;
// $bolts->receive(5);
// // echo $bolts->quantity;
// $currentBoltQuantity = $bolts->getQuantity();
// echo $currentBoltQuantity;

// echo $bolts->isInStock();
$requestedAmount = 8;
$currentNutQuantity = $nuts->getQuantity();
echo $currentNutQuantity . PHP_EOL;

$bolts->ship(10);

// if ($bolts->isInStock()) {
//     echo "In Stock";
// } else {
//     echo 'Out of stock';
// }


if ($nuts->hasEnough($requestedAmount)) {
    echo 'Enough Stock' . PHP_EOL;
    $nuts->ship($requestedAmount);
    $currentNutQuantity = $nuts->getQuantity();
    echo $currentNutQuantity . PHP_EOL;
} else {
    echo 'Not enough stock';
}

// $washers1 = new Item('washers');
// $washers2 = new NamedItem('washers');

// echo $washers1->name . PHP_EOL;
// echo $washers2->name . PHP_EOL;

$screws = new NamedItem('screws', 10);
echo $screws->name . PHP_EOL . $screws->quantity . PHP_EOL;
echo $screws->receive(10) . PHP_EOL;

$lights = new NamedItem('lights', 5);
echo $lights->quantity . PHP_EOL;
echo $lights->receive(3) . PHP_EOL;
echo $screws->quantity . PHP_EOL;

$spareLights = $lights;
$spareLights->receive(2);
echo $lights->quantity . PHP_EOL;
echo $spareLights->quantity . PHP_EOL;

$spareLights = new NamedItem('spare lights', 5);
$spareLights->receive(2);

echo $spareLights->quantity;