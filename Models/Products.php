<?php

class Product {
    private $title;
    private $image;
    private $price;

    function __construct($_title, $_image, $_price) {
        $this->title = $_title;
        $this->image = $_image;
        $this->price = $_price;
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

    public function displayCard() {
        echo '<div class="product-card">';
        echo '<img src="' . $this->image . '" alt="' . $this->title . ".jpg" . '">';
        echo '<h3>' . $this->title . '</h3>';
        echo '<p>Category: ' . $this->getCategory() . '</p>';
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