<div class="container">
    <div class="header-bottom">
        <div class="navigation-links basket-links">
            <a href="index.php" class="navigation-link js-class">На главную</a>
            <?if (key_exists("user_id", $_SESSION)):?>
            <a href="order-history.php" class="navigation-link js-class">История заказов</a>
            <? endif; ?>
        </div>
    </div>
</div>
<hr class="line">

