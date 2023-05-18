<?php
require_once __DIR__ . "/Models/Categories.php";
require_once __DIR__ . "/Models/Products.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Toys.php";
require_once __DIR__ . "/Models/Kennels.php";


$dog_category = new Category("Dog", "fa-solid fa-dog");
$cat_category = new Category("Cat", "fa-solid fa-cat");

$products = [

    new Food("Crocchette", "images/cibo-cani.jpg", 29.99, $dog_category, "2025-12-31", "Pollo"),
    new Toys("Pallina da Tennis", "images/gioco-gatti.jpg", 9.99, $cat_category, "Facile"),
    new Kennels("Cuccia in plastica", "images/cuccia-cani.jpg", 79.99, $dog_category, "Large", "Blu"),
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Pet Shop</title>
</head>

<body>
    <div class="container my-5">
        <h1 class="text-center">Pet Shop</h1>

        <?php

        foreach ($products as $product) {
            $product->displayCard();
            echo "<br>";
        }

        ?>
    </div>
</body>

</html>