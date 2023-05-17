<?php
require_once __DIR__ . "/Products.php";

class Food extends Product {
    private $expiryDate;
    private $flavor;

    function __construct($_title, $_image, $_price, $_expiryDate, $_flavor) { 
        // nell'argomento, inserisco i parametri del PARENT e quelli CORRENTI
        parent::__construct($_title, $_image, $_price);
        $this->expiryDate = $_expiryDate;
        $this->flavor = $_flavor;
    }

    public function displayCard() {
        parent::displayCard();
        echo "<p>Type: Food</p>";
        echo "<p>Expiry Date: " . $this->expiryDate . "</p>";
        echo "<p>Flavor: " . $this->flavor . "</p>";
    }

    public function getCategory() {
        return "Food";
    }
}