<?php
require_once __DIR__ . "/Models/Products.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Toys.php";
require_once __DIR__ . "/Models/Kennels.php";


$product1 = new Food("Cibo secco per cani", "images/cibo-cani.jpg", 29.99, "2024-12-31", "Pollo");
$product2 = new Toys("Pallina da Tennis per gatti", "images/gioco-gatti.jpg", 9.99, "Facile");
$product3 = new Kennels("Cuccia in plastica per cani", "images/cuccia-cani.jpg", 79.99, "Large", "Blu");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Pet Shop</title>
</head>

<body>
    <div class="container my-5">
        <h1 class="text-center">WELCOME</h1>

        <?php
        $product1->displayCard();
        $product2->displayCard();
        $product3->displayCard();
        ?>
    </div>
</body>

</html>