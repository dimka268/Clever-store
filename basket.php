<? require_once "header.php"; ?>
<? require_once "header-bottom-basket.php"; ?>

<? $connect = new mysqli('localhost', 'root', '', 'clever_store');
$basket_output = "SELECT `name` FROM `users` WHERE user_id = '$_SESSION[user_id]'";
$rezult_basket = $connect->query($basket_output)->fetch_all(MYSQLI_ASSOC);
?>

<? foreach ($rezult_basket as $basket): ?>
    <h3 class="text-greeting"><? echo $basket['name']?>, ваша корзина</h3>
<? endforeach ?>
<div class="basket">
    <div class="container-basket">


        <div class="cards-basket">

            <div class="card-basket">
                <div class="cart-container">
                    <img src="img/asus.png" alt="Фото товара" class="img-cart-product basket-img">
                    <div class="cart-caregory basket-category">
                        <a href="#" class="category">Ноутбуки</a>
                    </div>

                    <div class="main_text_basket">
                        <a href="#" class="link-cart-basket">
                            <p class="title-cart-basket">Игровой ноутбук ASUS TUF Gaming F15 FX506HC-HN105</p>
                        </a>

                        <div class="amount-cart">
                            <label for="input">Количество:</label>
                            <div class="button-amount">
                                <button class="js-minus-btn" type="button">-</button>
                                <input id="number-diet" class="js-number" type="number" name="number" value="1">
                                <button class="js-plus-btn" type="button">+</button>
                            </div>
                        </div>
                    </div>

                    <div class="left-card-basket">
                        <p class="cart-price-basket">84 899₽</p>
                        <button class="buy-basket">Купить</button>
                    </div>
                </div>
            </div>

            <div class="card-basket">
                <div class="cart-container">
                    <img src="img/asus.png" alt="Фото товара" class="img-cart-product basket-img">
                    <div class="cart-caregory basket-category">
                        <a href="#" class="category">Ноутбуки</a>
                    </div>

                    <div class="main_text_basket">
                        <a href="#" class="link-cart-basket">
                            <p class="title-cart-basket">Игровой ноутбук ASUS TUF Gaming F15 FX506HC-HN105</p>
                        </a>

                        <div class="amount-cart">
                            <label for="input">Количество:</label>
                            <div class="button-amount">
                                <button class="js-minus-btn" type="button">-</button>
                                <input id="number-diet" class="js-number" type="number" name="number" value="1">
                                <button class="js-plus-btn" type="button">+</button>
                            </div>
                        </div>
                    </div>

                    <div class="left-card-basket">
                        <p class="cart-price-basket">84 899₽</p>
                        <button class="buy-basket">Купить</button>
                    </div>
                </div>
            </div>

            <div class="card-basket">
                <div class="cart-container">
                    <img src="img/asus.png" alt="Фото товара" class="img-cart-product basket-img">
                    <div class="cart-caregory basket-category">
                        <a href="#" class="category">Ноутбуки</a>
                    </div>

                    <div class="main_text_basket">
                        <a href="#" class="link-cart-basket">
                            <p class="title-cart-basket">Игровой ноутбук ASUS TUF Gaming F15 FX506HC-HN105</p>
                        </a>

                        <div class="amount-cart">
                            <label for="input">Количество:</label>
                            <div class="button-amount">
                                <button class="js-minus-btn" type="button">-</button>
                                <input id="number-diet" class="js-number" type="number" name="number" value="1">
                                <button class="js-plus-btn" type="button">+</button>
                            </div>
                        </div>
                    </div>

                    <div class="left-card-basket">
                        <p class="cart-price-basket">84 899₽</p>
                        <button class="buy-basket">Купить</button>
                    </div>
                </div>
            </div>

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
                        <p class="varchar-slider">3 товара</p>
                        <p class="varchar-slider">254 697 ₽</p>
                    </div>
                    <div class="amount-slider">
                        <p class="varchar-slider">Скидка</p>
                        <p class="varchar-slider">- 0 ₽</p>
                    </div>
                </div>

                <div class="total-price">
                    <h3 class="total-text">Итого:</h3>
                    <h3 class="price-total">238 897 ₽</h3>
                </div>

                <button class="buy-basket slider-button">Купить</button>
            </div>
        </div>
    </div>
</div>

<? require_once "footer.php"; ?>