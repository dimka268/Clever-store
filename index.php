<? require_once "header.php"; ?>
<? require_once "header-bottom.php"; ?>
<?
$connect = new mysqli('localhost', 'root', '', 'clever_store');

    $card_output = "SELECT `product_id`, categories.category_id, categories.`category_title`, `brand_id`, `title`,`price`,`description`, products.`img` AS product_img
               FROM `products`
               INNER JOIN categories ON categories.category_id = products.category_id";
    $brand_output = "SELECT `img` FROM `brands` LIMIT 0, 12";
    $rezult = $connect->query($card_output)->fetch_all(MYSQLI_ASSOC);
    $rezult2 = $connect->query($brand_output)->fetch_all(MYSQLI_ASSOC);
    ?>
<div class="main">
        <div class="stocks">
            <h3 class="title-main">Новые акции</h3>
            <div class="container-slider">
                <div class="slider-main">
                    <img src="img/delivery.png" alt="" class="img-slider-stocks">
                </div>
            </div>
        </div>

    <div class="container-main">
        <div class="recommendations">
            <h3 class="title-main">Clever рекомендует</h3>
            <div class="carts-product-recommendations">
                <? $count = 1;
                foreach ($rezult as $cart):
                    if ($count > 4) break ?>
                        <!-- TODO:-->
                        <a href="product-page.php" class="cart-links-rec">
                            <div class="cart-product-rec">
                                <div class="container-cart">
                                    <img src="<? echo $cart['product_img']; ?>" alt="Фото компьютера" class="img-cart-product rec">
                                    <div class="cart-caregory">
                                        <a href="cards-category.php?category=<? echo $cart['category_id']; ?>" class="category"><? echo $cart['category_title']; ?></a>
                                    </div>
                                    <a href="product-page.php?product=<? echo $cart['product_id']; ?>" class="link-cart-product">
                                        <p class="cart-title-rec"><? echo $cart['title']; ?></p>
                                    </a>
                                    <p class="cart-price-rec"><? echo number_format($cart['price'],'0', '.', ' '); ?> ₽</p>
                                    <button class="buy-rec">В корзину</button>
                                </div>
                            </div>
                        </a>
                    <? $count++;
                endforeach?>
            </div>
        </div>

        <div class="brands">
            <h3 class="title-main">Популярные бренды</h3>
            <div class="carts-brands">

                <? foreach ($rezult2 as $category): ?>

                        <div class="cart-brand">
                            <img src="<? echo $category['img']; ?>" alt="Логотип бренда" class="img-cart-brand">
                        </div>

                    <? endforeach ?>
            </div>
        </div>

        <? if(array_key_exists('user_id', $_SESSION)): ?>
            <div class="recommendations">
                <h3 class="title-main">Вы недавно смотрели</h3>
                <? if (key_exists('products', $_SESSION)): ?>
                    <div class="carts-product-recommendations">
                        <? $products_mass = array_slice(array_unique($_SESSION['products'], SORT_REGULAR), -4, 4, true);
                        foreach ($products_mass as $id):
                            $card_output20 = "SELECT `product_id`, categories.category_id, categories.`category_title`, `brand_id`, `title`,`price`,`description`, products.`img` AS product_img
                            FROM `products`
                            INNER JOIN categories ON categories.category_id = products.category_id
                            where product_id = $id";
                            $cart = $connect->query($card_output20)->fetch_assoc();
                            ?>
                            <!-- TODO:-->
                            <a href="product-page.php" class="cart-links-rec">
                                <div class="cart-product-rec">
                                    <div class="container-cart">
                                        <img src="<? echo $cart['product_img']; ?>" alt="Фото компьютера" class="img-cart-product rec">
                                        <div class="cart-caregory">
                                            <a href="cards-category.php?category=<? echo $cart['category_id']; ?>" class="category"><? echo $cart['category_title']; ?></a>
                                        </div>
                                        <a href="product-page.php?product=<? echo $cart['product_id']; ?>" class="link-cart-product">
                                            <p class="cart-title-rec"><? echo $cart['title']; ?></p>
                                        </a>
                                        <p class="cart-price-rec"><? echo number_format($cart['price'],'0', '.', ' '); ?> ₽</p>
                                        <button class="buy-rec">В корзину</button>
                                    </div>
                                </div>
                            </a>
                            <? endforeach ?>
                    </div>
                <? else: ?>
                <p class="text-null-recent">Вы не просматривали товары нашего магазина, поэтому здесь пусто</p>
                <? endif; ?>
            </div>
        <? endif; ?>
    </div>
</div>
<? require_once "footer.php"; ?>
