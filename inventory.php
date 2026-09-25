<?php

use Isaiah\PhpInventoryPractice\Item;
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
echo $currentNutQuantity;

$bolts->ship(10);

// if ($bolts->isInStock()) {
//     echo "In Stock";
// } else {
//     echo 'Out of stock';
// }


if ($nuts->hasEnough($requestedAmount)) {
    echo 'Enough Stock';
    $nuts->ship($requestedAmount);
    $currentNutQuantity = $nuts->getQuantity();
    echo $currentNutQuantity;
} else {
    echo 'Not enough stock';
}