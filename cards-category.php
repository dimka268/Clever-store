<?php
$category_id = $_GET["category"];
$page = $_GET["page"]?:1;
$offset = $page * 5 - 5;

$connect = new mysqli('localhost', 'root', '', 'clever_store');

$card_output2 = "SELECT * FROM `categories` WHERE category_id = $category_id";

$card_output3 = "SELECT `product_id`, categories.category_title AS categories_category_title,  brands.`title` AS brand_title, products.`title` AS product_title, `operating_system`,`maximum_refresh_rate`,`processor_manufacturer`,`processor_model`,`weight`,`price`,`description`, products.`img` AS product_img
FROM `products` 
INNER JOIN brands ON brands.brand_id = products.brand_id
INNER JOIN categories ON categories.category_id = products.category_id
WHERE products.category_id = $category_id LIMIT $offset, 5;";

$card_count1 = "SELECT COUNT(*) AS count
FROM `products` 
WHERE products.category_id = $category_id;";

$rezult7 = $connect->query($card_count1)->fetch_assoc()['count'];

$rezult5 = $connect->query($card_output2)->fetch_all(MYSQLI_ASSOC);

$rezult6 = $connect->query($card_output3)->fetch_all(MYSQLI_ASSOC);
?>
<? require_once "header.php"; ?>
<? require_once "header-bottom.php"; ?>

<div class="container-catalog">
    <? foreach ($rezult5 as $category):?>
    <h3 class="title-main"><? echo $category['category_title']; ?></h3>
    <? endforeach; ?>
    <div class="container-category">
        <div class="sidebar-cart-category">
            <div class="container-sidebar-cards">
                <p class="title-slider filters">Фильтры поиска</p>
                <div class="price-slider-category">
                    <p class="text-slider-category">Цена</p>
                    <div class="inputs-filter">
                        <input autocomplete="off" class="input-slider-category" placeholder="От 1 ₽" value="">
                        <input autocomplete="off" class="input-slider-category" placeholder="До 1 000 000 ₽" value="">
                    </div>
                </div>

                <div class="manufacturer">
                    <p class="text-slider-category">Производитель</p>
                    <div class="radio-slider radio-filter">
                        <label class="form-check-label label-filter" for="flexSwitchCheckChecked">Asus</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                        </div>
                    </div>

                    <div class="radio-slider radio-filter">
                        <label class="form-check-label label-filter" for="flexSwitchCheckChecked">Acer</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                        </div>
                    </div>

                    <div class="radio-slider radio-filter">
                        <label class="form-check-label label-filter" for="flexSwitchCheckChecked">Apple</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                        </div>
                    </div>

                    <div class="radio-slider radio-filter">
                        <label class="form-check-label label-filter" for="flexSwitchCheckChecked">MSI</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                        </div>
                    </div>

                    <div class="radio-slider radio-filter">
                        <label class="form-check-label label-filter" for="flexSwitchCheckChecked">Lenovo</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                        </div>
                    </div>

                    <div class="radio-slider radio-filter">
                        <label class="form-check-label label-filter" for="flexSwitchCheckChecked">Xiaomi</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                        </div>
                    </div>

                </div>

                <button class="apply-filters">Применить фильтры</button>
            </div>
        </div>

        <div class="cards-category">
        <? foreach ($rezult6 as $cart_category):?>
            <div class="card-basket card-category">

                <div class="cart-container">
                    <img src="<? echo $cart_category['product_img']; ?>" alt="Фото товара" class="img-cart-product basket-img">

                    <div class="main_text_basket">
                        <a href="product-page.php?product=<? echo $cart_category['product_id']; ?>" class="link-cart-basket">
                            <p class="title-cart-basket category-list"><? echo $cart_category['product_title']; ?></p>
                        </a>

                        <div class="specifications">
                            <div class="block-specifications">
                                <p class="text-left">Производитель</p>
                                <p class="text-right"><? echo $cart_category['brand_title']; ?></p>
                            </div>

                            <div class="block-specifications">
                                <p class="text-left">Операционная система</p>
                                <p class="text-right"><? echo $cart_category['operating_system']; ?></p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Частота обновления</p>
                                <p class="text-right"><? echo $cart_category['maximum_refresh_rate']; ?> Гц</p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Производитель процессора</p>
                                <p class="text-right"><? echo $cart_category['processor_manufacturer']; ?></p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Модель процессора</p>
                                <p class="text-right"><? echo $cart_category['processor_model']; ?></p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Вес</p>
                                <p class="text-right"><? echo $cart_category['weight']; ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="left-card-basket">
                        <p class="cart-price-basket"><? echo number_format($cart_category['price'],'0', '.', ' '); ?> ₽</p>
                        <button class="buy-basket">Добавить в корзину</button>
                    </div>
                </div>


            </div>
        <? endforeach; ?>

            <div class="pagination">
                <? for ($number_page = 1; $number_page <= $rezult7/5; $number_page++):?>
                <a href="cards-category.php?category=<? echo $category_id; ?>&page=<? echo $number_page ?>" class="link-page-pagination"><? echo $number_page ?></a>
                <? endfor ?>
            </div>

        </div>



    </div>
</div>
<? require_once "footer.php"; ?>