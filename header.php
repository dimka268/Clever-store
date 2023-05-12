<? session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" href="img/Clever_store_logo.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/stocks.css">
    <link rel="stylesheet" href="css/recommendations.css">
    <link rel="stylesheet" href="css/brands.css">
    <link rel="stylesheet" href="css/modal-window.css">
    <link rel="stylesheet" href="css/basket.css">
    <link rel="stylesheet" href="css/catalog.css">
    <link rel="stylesheet" href="css/cards-category.css">
    <link rel="stylesheet" href="css/order-history.css">
    <link rel="stylesheet" href="css/product-page.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>Clever store</title>
</head>
<body>

    <header class="header">

        <div class="container">
            <div class="header-top">
                <a href="index.php" class="link-index">
                    <img src="img/Clever_store_logo.svg" alt="Logo" class="logo">
                </a>
                <div class="search-header">
                    <input type="search" class="search" id="search" placeholder="Поиск по товарам">
                    <button class="button-search">
                        <img src="img/search_magnifier.svg" alt="Поиск" class="magnifier">
                    </button>
                </div>

                <div class="header-top-navigation">
                    <div class="cart-navigation">
                        <a href="catalog.php" class="text-navigation js-class">
                            <img src="img/catalog.svg" alt="" class="img-cart">
                        Каталог</a>
                    </div>
                    <div class="cart-navigation">
                        <a href="basket.php" class="text-navigation js-class">
                        <img src="img/basket.svg" alt="" class="img-cart">
                        Корзина</a>
                    </div>
                    <? if(key_exists("user_id", $_SESSION)): ?>
                        <div class="cart-navigation">
                            <a class="text-navigation last" href="log-out.php">
                                <img src="img/exit.svg" alt="" class="img-cart">
                                Выйти</a>
                        </div>
                    <? else: ?>
                        <div class="cart-navigation">
                            <a class="text-navigation last" id="bth-aut">
                                <img src="img/sign_in.svg" alt="" class="img-cart">
                                Войти</a>
                        </div>
                    <? endif ?>

                </div>
            </div>

        </div>

    </header>

    <div class="main2 hidden" id="log-in">
        <form action="connection-log_in.php" method="post" class="modal-window ">
            <div class="container-modal">
                <button type="button" class="link-log-in" id="exit">
                    <img src="img/Arrow-exit.svg" alt="Назад" class="arrow">
                </button>
                <img src="img/Clever_store_logo.svg" alt="Логотип магазина" class="logo-modal">
                <h3 class="title-modal">Вход</h3>
                <div class="inputs-form">
                    <input type="email" id="email" name="email" class="form-modal" placeholder="Логин" autocomplete="off">
                    <input type="password" id="password" name="password1" class="form-modal" placeholder="Пароль" autocomplete="off">
                </div>
                <div class="buttons-form">
                    <button type="submit" class="button-modal">Войти</button>
                    <p class="text-between-button">Если вы не зарегистрированы то</p>
                        <button type="button" class="button-modal" id="go_register">Зарегистрироваться</button>
                </div>
            </div>
        </form>
    </div>
    <div class="main2 hidden" id="register">
        <form action="connection-register.php" method="post" class="modal-window form-registr" id="form-registr" >
            <div class="container-modal">
                <button type="button" class="link-log-in" id="exit2">
                    <img src="img/Arrow-exit.svg" alt="Назад" class="arrow" >
                </button>
                <img src="img/Clever_store_logo.svg" alt="Логотип магазина" class="logo-modal">
                <h3 class="title-modal">Регистрация</h3>
                <div class="inputs-form">
                    <input type="text" maxlength="50" id="name" name="name" class="form-modal" placeholder="Введите свое имя" autocomplete="off">
                    <input type="email" maxlength="320" id="email" name="email" class="form-modal" placeholder="Введите свою почту (логин)" autocomplete="off">
                    <p class="error-valid hidden"></p>
                    <input type="password" minlength="4" id="password1" name="password1" maxlength="16" class="form-modal" placeholder="Придумайте пароль (от 4 до 16 символов)" autocomplete="off">
                    <input type="password" minlength="4" id="password2" name="password2" maxlength="16" class="form-modal" placeholder="Повторите пароль" autocomplete="off">
                </div>
                <div class="buttons-form regist">
                    <button type="submit" class="button-modal">Зарегистрироваться</button>
                </div>
            </div>
        </form>
    </div>
