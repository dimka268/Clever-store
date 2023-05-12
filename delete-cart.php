<?php

$product_id = $_POST['product-id-delete'];

$connect = new mysqli('localhost', 'root', '', 'clever_store');

$delete_cart_basket = "DELETE FROM `order_products` WHERE `orderproducts_id`= $product_id;";
$rezult_delete = $connect->query($delete_cart_basket);
echo $rezult_delete;
header('Location: ' . $_SERVER['HTTP_REFERER']);