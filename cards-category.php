<?php
$category_id = $_GET["category"];
?>
<? require_once "header.php"; ?>
<? require_once "header-bottom.php"; ?>

<div class="container-catalog">
    <h3 class="title-main">Компьютеры</h3>
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

            <div class="card-basket card-category">

                <div class="cart-container">
                    <img src="img/asus.png" alt="Фото товара" class="img-cart-product basket-img">

                    <div class="main_text_basket">
                        <a href="#" class="link-cart-basket">
                            <p class="title-cart-basket category-list">Игровой ноутбук ASUS TUF Gaming F15 FX506HC-HN105</p>
                        </a>

                        <div class="specifications">
                            <div class="block-specifications">
                                <p class="text-left">Тип устройства</p>
                                <p class="text-right">Ноутбук</p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Операционная система</p>
                                <p class="text-right">Windows 11</p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Диагональ экрана</p>
                                <p class="text-right">15.6"</p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Разрешения экрана</p>
                                <p class="text-right">1920x1080 Пикс</p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Производитель процессора</p>
                                <p class="text-right">Intel</p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Производитель видеокарты</p>
                                <p class="text-right">Nvidia</p>
                            </div>
                        </div>
                    </div>

                    <div class="left-card-basket">
                        <p class="cart-price-basket">84 899₽</p>
                        <button class="buy-basket">Добавить в корзину</button>
                    </div>
                </div>

            </div>

            <div class="card-basket card-category">

                <div class="cart-container">
                    <img src="img/asus.png" alt="Фото товара" class="img-cart-product basket-img">

                    <div class="main_text_basket">
                        <a href="#" class="link-cart-basket">
                            <p class="title-cart-basket category-list">Игровой ноутбук ASUS TUF Gaming F15 FX506HC-HN105</p>
                        </a>

                        <div class="specifications">
                            <div class="block-specifications">
                                <p class="text-left">Тип устройства</p>
                                <p class="text-right">Ноутбук</p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Операционная система</p>
                                <p class="text-right">Windows 11</p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Диагональ экрана</p>
                                <p class="text-right">15.6"</p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Разрешения экрана</p>
                                <p class="text-right">1920x1080 Пикс</p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Производитель процессора</p>
                                <p class="text-right">Intel</p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Производитель видеокарты</p>
                                <p class="text-right">Nvidia</p>
                            </div>
                        </div>
                    </div>

                    <div class="left-card-basket">
                        <p class="cart-price-basket">84 899₽</p>
                        <button class="buy-basket">Добавить в корзину</button>
                    </div>
                </div>

            </div>

            <div class="card-basket card-category">

                <div class="cart-container">
                    <img src="img/asus.png" alt="Фото товара" class="img-cart-product basket-img">

                    <div class="main_text_basket">
                        <a href="#" class="link-cart-basket">
                            <p class="title-cart-basket category-list">Игровой ноутбук ASUS TUF Gaming F15 FX506HC-HN105</p>
                        </a>

                        <div class="specifications">
                            <div class="block-specifications">
                                <p class="text-left">Тип устройства</p>
                                <p class="text-right">Ноутбук</p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Операционная система</p>
                                <p class="text-right">Windows 11</p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Диагональ экрана</p>
                                <p class="text-right">15.6"</p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Разрешения экрана</p>
                                <p class="text-right">1920x1080 Пикс</p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Производитель процессора</p>
                                <p class="text-right">Intel</p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Производитель видеокарты</p>
                                <p class="text-right">Nvidia</p>
                            </div>
                        </div>
                    </div>

                    <div class="left-card-basket">
                        <p class="cart-price-basket">84 899₽</p>
                        <button class="buy-basket">Добавить в корзину</button>
                    </div>
                </div>

            </div>

            <div class="card-basket card-category">

                <div class="cart-container">
                    <img src="img/asus.png" alt="Фото товара" class="img-cart-product basket-img">

                    <div class="main_text_basket">
                        <a href="#" class="link-cart-basket">
                            <p class="title-cart-basket category-list">Игровой ноутбук ASUS TUF Gaming F15 FX506HC-HN105</p>
                        </a>

                        <div class="specifications">
                            <div class="block-specifications">
                                <p class="text-left">Тип устройства</p>
                                <p class="text-right">Ноутбук</p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Операционная система</p>
                                <p class="text-right">Windows 11</p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Диагональ экрана</p>
                                <p class="text-right">15.6"</p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Разрешения экрана</p>
                                <p class="text-right">1920x1080 Пикс</p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Производитель процессора</p>
                                <p class="text-right">Intel</p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Производитель видеокарты</p>
                                <p class="text-right">Nvidia</p>
                            </div>
                        </div>
                    </div>

                    <div class="left-card-basket">
                        <p class="cart-price-basket">84 899₽</p>
                        <button class="buy-basket">Добавить в корзину</button>
                    </div>
                </div>

            </div>

            <div class="card-basket card-category">

                <div class="cart-container">
                    <img src="img/asus.png" alt="Фото товара" class="img-cart-product basket-img">

                    <div class="main_text_basket">
                        <a href="#" class="link-cart-basket">
                            <p class="title-cart-basket category-list">Игровой ноутбук ASUS TUF Gaming F15 FX506HC-HN105</p>
                        </a>

                        <div class="specifications">
                            <div class="block-specifications">
                                <p class="text-left">Тип устройства</p>
                                <p class="text-right">Ноутбук</p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Операционная система</p>
                                <p class="text-right">Windows 11</p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Диагональ экрана</p>
                                <p class="text-right">15.6"</p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Разрешения экрана</p>
                                <p class="text-right">1920x1080 Пикс</p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Производитель процессора</p>
                                <p class="text-right">Intel</p>
                            </div>
                            <div class="block-specifications">
                                <p class="text-left">Производитель видеокарты</p>
                                <p class="text-right">Nvidia</p>
                            </div>
                        </div>
                    </div>

                    <div class="left-card-basket">
                        <p class="cart-price-basket">84 899₽</p>
                        <button class="buy-basket">Добавить в корзину</button>
                    </div>
                </div>

            </div>
        
        </div>

    </div>
</div>
<? require_once "footer.php"; ?>