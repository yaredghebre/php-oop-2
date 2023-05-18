<?php
require_once __DIR__ . "/Categories.php";

class Product {
    private $title;
    private $image;
    private $price;
    public $category;

    function __construct($_title, $_image, $_price, Category $_category) {
        $this->title = $_title;
        $this->image = $_image;
        $this->price = $_price;
        $this->category = $_category;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getImage() {
        return $this->image;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getRace() {
        return $this->category->getRace();
    }

    public function displayCard() {
        echo '<div class="product-card">';
        echo '<img src="' . $this->image . '" alt="' . $this->title . ".jpg" . '">';
        echo '<h3>' . $this->title . '</h3>';
        echo "<h5>Animal: " . $this->getRace() . "</h5>";
        echo '<p>Category: ' . $this->category->name . '</p>';
        echo '<p>Type: ' . $this->getType() . '</p>';
        echo '<p>Price: ' . $this->price . '</p>';
        echo '</div>';
    }

    public function getCategory() {
        return "";
    }

    public function getType() {
        return 'Product';
    }

}