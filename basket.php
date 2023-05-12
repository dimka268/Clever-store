<? require_once "header.php"; ?>
<? require_once "header-bottom-basket.php"; ?>

<? $user_id = $_SESSION['user_id'];
if (key_exists("user_id", $_SESSION)){
    $connect = new mysqli('localhost', 'root', '', 'clever_store');
    $basket_output = "SELECT `name` FROM `users` WHERE user_id = '$_SESSION[user_id]'";
    $rezult_basket = $connect->query($basket_output)->fetch_all(MYSQLI_ASSOC);

    $getting_basket = "SELECT * FROM `orders` WHERE `status`= 0 AND `user_id` = $user_id;";
    $rezult_basket1 = $connect->query($getting_basket)->fetch_assoc();


    if (is_null($rezult_basket1)){
        $creating_basket = "INSERT INTO `orders`(`user_id`, `status`) VALUES ($user_id, 0);";
        $connect->query($creating_basket);
        $rezult_basket1 = $connect->insert_id;

    }else{
        $rezult_basket1 = $rezult_basket1['order_id'];
    }

        $output_basket = "SELECT `order_products`.`orderproducts_id` AS orderproducts_id, products.product_id AS product_id, categories.category_id AS category_id, categories.category_title AS category_title, 
           products.title AS title, products.price AS price, products.img AS img
    FROM `order_products` 
    INNER JOIN products ON products.product_id = order_products.product_id
    INNER JOIN categories ON categories.category_id = products.category_id
    WHERE order_id = $rezult_basket1";
        $rezult_output_basket = $connect->query($output_basket)->fetch_all(MYSQLI_ASSOC);
}
?>
<?if (key_exists("user_id", $_SESSION)):?>
    <? foreach ($rezult_basket as $basket): ?>
        <h3 class="text-greeting"><? echo $basket['name']?>, ваша корзина</h3>
    <? endforeach ?>
    <div class="basket">
        <div class="container-basket">


            <div class="cards-basket">
                <? $count_products = count($rezult_output_basket);
                   $count_price2 = 0;
                if ($count_products != 0): ?>

                <? foreach ($rezult_output_basket as $basket_cart): ?>
                <div class="card-basket">
                    <div class="cart-container">
                        <img src="<? echo $basket_cart['img']?>" alt="Фото товара" class="img-cart-product basket-img">
                        <div class="cart-caregory basket-category">
                            <a href="cards-category.php?category=<? echo $basket_cart['category_id']; ?>" class="category"><? echo $basket_cart['category_title']?></a>
                        </div>

                        <div class="main_text_basket">
                            <a href="product-page.php?product=<? echo $basket_cart['product_id']; ?>" class="link-cart-basket">
                                <p class="title-cart-basket"><? echo $basket_cart['title']; ?></p>
                            </a>

                            <div class="amount-cart">
                                <label for="input">Количество:</label>
                                <div class="button-amount">
                                    <button class="js-minus-btn" type="button">-</button>
                                    <input readonly class="js-number value-js" type="number" name="number" value="1">
                                    <button class="js-plus-btn" type="button">+</button>
                                </div>
                            </div>
                        </div>

                        <div class="left-card-basket">
                            <p class="cart-price-basket" data-price="<? echo $basket_cart['price'] ?>"><? echo number_format($basket_cart['price'],'0', '.', ' '); ?> ₽</p>
                            <form action="delete-cart.php" method="post" class="delete-cart">
                                <input type="hidden" value="<? echo $basket_cart['orderproducts_id']; ?>" name="product-id-delete">
                                <button class="buy-basket">Удалить из корзины</button>
                            </form>
                        </div>
                    </div>
                </div>
                <?  $count_price2 += $basket_cart['price'];
                    endforeach; ?>

                <? else: ?>
                <div class="class-info-null">
                    <h5 class="info-null-basket">В корзине пока пусто</h5>
                    <p class="info-null-basket">Загляните в категории, чтобы выбрать товары или найдите нужное в поиске</p>
                </div>
                <? endif; ?>

            </div>


            <div class="slider-basket container-slider">

                <div class="goods-warehouse">
                    <h3 class="title-slider">Детали заказа</h3>
                    <div class="radio-slider">
                        <label class="form-check-label" for="flexSwitchCheckChecked">Получить товар со склада</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                        </div>
                    </div>
                    <div class="div-block-info">
                        <div class="amount-slider">
                            <p class="varchar-slider" id="count-p"><? echo $count_products ?> товара</p>
                            <p class="varchar-slider" id="count-f-price"><? echo number_format($count_price2,'0', '.', ' ')?> ₽</p>
                        </div>
                        <div class="amount-slider">
                            <p class="varchar-slider">Скидка</p>
                            <p class="varchar-slider">- 0 ₽</p>
                        </div>
                    </div>

                    <div class="total-price">
                        <h3 class="total-text">Итого:</h3>
                        <h3 class="price-total" id="count-price"><? echo number_format($count_price2,'0', '.', ' ')?> ₽</h3>
                    </div>

                    <button class="buy-basket slider-button">Купить</button>
                </div>
            </div>

        </div>
    </div>
<? else: ?>
    <div class="container-basket">
        <p class="text-null-basker">Уважаемый пользователь, для просмотра и наполнения корзины необходимо пройти процесс регистрации или входа в аккаунт. С уважением, администрация сайта Clever store</p>
    </div>
<? endif; ?>
<script src="js/mail.js"></script>
<? require_once "footer.php"; ?>