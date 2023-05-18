<?php
require_once __DIR__ . "/Products.php";

class Kennels extends Product {
    private $size;
    private $color;

    public function __construct($_title, $_image, $_price, Category $_category, $_size, $_color) {
        parent::__construct($_title, $_image, $_price, $_category);
        $this->size = $_size;
        $this->color = $_color;
    }

    public function displayCard() {
        parent::displayCard();
        echo "<p>Type: Kennel</p>";
        echo "<p>Size: " . $this->size . "</p>";
        echo "<p>Color: " . $this->color . "</p>";
    }

    public function getCategory() {
        return "Kennels";
    }
}
