

<?php


require_once "Product.php";
require_once "Cart.php";

$p1 = new Product("laptop", 2000, 3);
$p2 = new Product("myszka", 100, 1);
$p3 = new Product("klawiatura", 300, 7);
$p4 = new Product("mikrofon", 600, 2);

$cart = new Cart();

$cart->addProduct($p1);
$cart->addProduct($p2);
$cart->addProduct($p3);
$cart->addProduct($p4);
$cart->removeProduct($p1);
$cart->removeProduct($p2);

echo $cart;

?>