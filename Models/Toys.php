<?php
require_once __DIR__ . "/Toys.php";

class Toys extends Product {
    private $difficulty;

    function __construct($_title, $_image, $_price, $_difficulty) {
        parent::__construct($_title, $_image, $_price);
        $this->difficulty = $_difficulty;
    }

    public function displayCard() {
        parent::displayCard();
        echo "<p>Type: Toy</p>";
        echo "<p>Difficulty: " . $this->difficulty . "</p>";
    }

    public function getCategory() {
        return "Toys";
    }
    
}