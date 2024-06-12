<?php
require 'functions.php';
require 'validator.php';

$credentials = require("config.php");

$groceries_database = new Database($credentials);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $errors = [];
  
    if(! Validator::string($_POST["name"], 1, 20)) {
        $errors["name"] = "Your item should have a name length between 1 and 20 characters";
    }
    if(! Validator::integer($_POST["quantity"], 0)) {
        $errors["quantity"] = "Quantity should be set >=0";
    }
    if(!Validator::decimal($_POST["price"], 0, 2)) {
        $errors["price"] = "Price should be a number with two decimals at most. Please use . to separate the decimals";
    }
    if (empty($errors)) {
        $groceries_database ->query("INSERT INTO groceries (Name, Quantity, Price) VALUES (:name, :quantity, :price);", [
            "name" => $_POST["name"],
            "quantity" => $_POST["quantity"],
            "price" => $_POST["price"]
        
        ]);
        header('Location: /');
    }
    

} 

require 'views/create.view.php';
?>