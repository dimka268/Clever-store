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
                    <? if(!array_key_exists('user_id', $_SESSION)):?>
                        <div class="cart-navigation">
                            <a href="log_in.php" class="text-navigation last js-class">
                                <img src="img/exit.svg" alt="" class="img-cart">
                                Выйти</a>
                        </div>
                    <?else:?>
                        <div class="cart-navigation">
                            <a href="log_in.php" class="text-navigation last">
                                <img src="img/sign_in.svg" alt="" class="img-cart">
                                Войти</a>
                        </div>
                    <?endif?>

                </div>
            </div>

        </div>

    </header>