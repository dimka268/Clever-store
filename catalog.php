<?php

$connect = new mysqli('localhost', 'root', '', 'clever_store');

$card_output5 = "SELECT * FROM `categories`";

$rezult11 = $connect->query($card_output5)->fetch_all(MYSQLI_ASSOC);
?>

<? require_once "header.php"; ?>
<? require_once "header-bottom.php"; ?>

<div class="container-catalog">
    <h3 class="text-greeting catalog-title">Каталог товаров «Clever store»</h3>
    <div class="carts-catalog">
        <? foreach ($rezult11 as $category_catalog): ?>
        <? $category_id = $category_catalog['category_id'];
        $card_output6 = "SELECT product_id, `title` FROM `products` 
        INNER JOIN categories ON categories.category_id = products.category_id
        WHERE categories.category_id = $category_id LIMIT 0, 10;";

        $rezult12 = $connect->query($card_output6)->fetch_all(MYSQLI_ASSOC);?>
        <div class="cart-catalog">
            <div class="title-cart">
                <img src="img/computer.svg" alt="" class="img-cart-catalog">
                <a href="cards-category.php?category=<? echo $category_catalog['category_id'];?>" class="title-cart-catalog"><? echo $category_catalog['category_title'];?></a>
            </div>
            <? foreach ($rezult12 as $product_link):?>
            <div class="links-cart-catalog">
                <a href="product-page.php?product=<? echo $product_link['product_id']?>" class="link-cart-catalog"><? echo $product_link['title']?></a>
            </div>
            <? endforeach; ?>

        </div>
        <? endforeach; ?>
    </div>
</div>
<? require_once "footer.php"; ?>