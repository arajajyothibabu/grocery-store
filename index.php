<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require_once('models/Item.php');
require_once('models/Store.php');

echo "<h2>Grocery Store</h2>";

$store = new Store(array());

$item1 = new Item('00001', "Item1", '1 Kg', 5, '01', 56, 56);

$item2 = new Item('000', "Item2", '1 Kg', 10, '01', 156, 256);

$store->addItem($item1);

$store->addItem($item2);

$store->generateReport();