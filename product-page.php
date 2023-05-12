<? require_once "header.php"; ?>
<?php
$product_id = $_GET["product"];
$user_id = $_SESSION['user_id'];
if (key_exists('products', $_SESSION)) {
    $_SESSION['products'][] = $product_id;
}else{
    $_SESSION['products'] = [$product_id];
}
$connect = new mysqli('localhost', 'root', '', 'clever_store');
if (is_null($user_id)) {
        $card_output4 = "SELECT `product_id`, categories.category_title AS categories_category_title,  brands.`title` AS brand_title, products.`title` AS product_title, `operating_system`,`maximum_refresh_rate`,`processor_manufacturer`,`processor_model`,`weight`,`price`,`description`, products.`img` AS product_img
    FROM `products` 
    INNER JOIN brands ON brands.brand_id = products.brand_id
    INNER JOIN categories ON categories.category_id = products.category_id
    WHERE products.product_id = $product_id;";
}else{
    $card_output4 = "SELECT `product_id`, categories.category_title AS categories_category_title,  brands.`title` AS brand_title, products.`title` AS product_title, `operating_system`,`maximum_refresh_rate`,`processor_manufacturer`,`processor_model`,`weight`,`price`,`description`, products.`img` AS product_img,
    (SELECT `orderproducts_id`
    FROM `order_products`
    INNER JOIN orders ON orders.order_id = order_products.order_id
    WHERE `product_id`= products.product_id AND orders.user_id = $user_id) AS orderproducts_id
    FROM `products` 
    INNER JOIN brands ON brands.brand_id = products.brand_id
    INNER JOIN categories ON categories.category_id = products.category_id
    WHERE products.product_id = $product_id;";
}
$rezult10 = $connect->query($card_output4)->fetch_assoc();
?>
<? require_once "header-bottom.php"; ?>
<div class="product-page-div">
    <div class="top-info-pp">
        <div class="container-product-page">

            <div class="carousel-product">
                <img src="<? echo $rezult10['product_img']; ?>" alt="" class="img-carousel">
            </div>

            <div class="right-text-block">
                <h3 class="title-product-cart"><? echo $rezult10['product_title']; ?></h3>
                <p class="short-description">Краткое описание</p>
                <p class="text-short-description"><? echo $rezult10['description']; ?></p>
                <div class="info-price-product-cart">
                    <p class="price-product"><? echo number_format($rezult10['price'],'0', '.', ' '); ?> ₽</p>
                    <?if (key_exists("user_id", $_SESSION)): ?>
                        <? if (is_null($rezult10['orderproducts_id'])): ?>
                            <form action="adding-cart-basket.php" method="post" class="form-basket add-button">
                                <input type="hidden" value="<? echo $rezult10['product_id']; ?>" name="product-id">
                                <button class="buy-basket new-bth">Добавить в корзину</button>
                            </form>
                        <? else: ?>
                            <form action="delete-cart.php" method="post" class="delete-cart add-button">
                                <input type="hidden" value="<? echo $rezult10['orderproducts_id']; ?>" name="product-id-delete">
                                <button class="buy-basket new-bth">Удалить из корзины</button>
                            </form>
                        <? endif; ?>
                    <? else: ?>
                        <button class="buy-basket product-page-button">Добавить в корзину</button>
                    <? endif; ?>
                </div>
            </div>
        </div>
    </div>

        <hr class="line">

    <div class="header-pp">
        <p class="title-header-pp active-color" id="d-header">Описание</p>
        <p class="title-header-pp" id="s-header">Характеристики</p>
    </div>

    <div class="product-page-description" id="description">
        <div class="description-pp">
            <p class="description-text-pp"><? echo $rezult10['description']; ?></p>
        </div>
    </div>

    <div class="product-page-specifications hidden" id="specification">
        <div class="specifications-pp">
            <div class="block-specifications-pp">
                <p class="text-left-pp">Производитель</p>
                <p class="text-right-pp"><? echo $rezult10['brand_title']; ?></p>
            </div>
            <div class="block-specifications-pp">
                <p class="text-left-pp">Тип устройства</p>
                <p class="text-right-pp"><? echo $rezult10['categories_category_title']; ?></p>
            </div>
            <div class="block-specifications-pp">
                <p class="text-left-pp">Операционная система</p>
                <p class="text-right-pp"><? echo $rezult10['operating_system']; ?></p>
            </div>
            <div class="block-specifications-pp">
                <p class="text-left-pp">Максимальная частота обновления</p>
                <p class="text-right-pp"><? echo $rezult10['maximum_refresh_rate']; ?> Гц</p>
            </div>
            <div class="block-specifications-pp">
                <p class="text-left-pp">Производитель процессора</p>
                <p class="text-right-pp"><? echo $rezult10['processor_manufacturer']; ?></p>
            </div>
            <div class="block-specifications-pp">
                <p class="text-left-pp">Модель процессора</p>
                <p class="text-right-pp"><? echo $rezult10['processor_model']; ?></p>
            </div>
            <div class="block-specifications-pp">
                <p class="text-left-pp">Вес</p>
                <p class="text-right-pp"><? echo $rezult10['weight']; ?></p>
            </div>
        </div>
    </div>
</div>
<script src="js/product-page.js"></script>
<? require_once "footer.php"; ?>
