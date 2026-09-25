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
$bolts->receive(55);
echo $bolts->quantity;
$bolts->receive(2);
echo $bolts->quantity;
$bolts->ship(33);
echo $bolts->quantity;
$nuts->ship(3);
echo $nuts->quantity;