<?
session_start();
$user_id = $_SESSION['user_id'];
$product_id = $_POST['product-id'];

$connect = new mysqli('localhost', 'root', '', 'clever_store');

$getting_basket = "SELECT * FROM `orders` WHERE `status`= 0 AND `user_id` = $user_id;";
$rezult_basket1 = $connect->query($getting_basket)->fetch_assoc();


if (is_null($rezult_basket1)){
    $creating_basket = "INSERT INTO `orders`(`user_id`, `status`) VALUES ($user_id, 0);";
    $connect->query($creating_basket);
    $rezult_basket1 = $connect->insert_id;

}else{
 $rezult_basket1 = $rezult_basket1['order_id'];
}

$adding_item_basket = "INSERT INTO `order_products`(`product_id`, `order_id`) VALUES ($product_id, $rezult_basket1);";
$rezult_basket3 = $connect->query($adding_item_basket);

header('Location: ' . $_SERVER['HTTP_REFERER']);