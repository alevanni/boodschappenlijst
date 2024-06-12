<?php 
$credentials = require("config.php");

$groceries_database = new Database($credentials);
$boodschappen = $groceries_database->query("SELECT * FROM groceries;")->fetchAll();

$subtotals = [];


for ($i=0; $i<count($boodschappen); $i++) {
    $subtotals[$i] = $boodschappen[$i]["Price"] * $boodschappen[$i]["Quantity"];
}

$total = array_reduce($subtotals, function($carry, $item) {
    $carry += $item;
    return $carry;
});


require 'functions.php';

require 'views/index.view.php';

?>