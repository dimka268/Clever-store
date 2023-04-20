<?php
$connect = new mysqli('localhost', 'root', '', 'clever_store');
$category_output = "SELECT * FROM `categories` LIMIT 0, 5";
$rezult3 = $connect->query($category_output)->fetch_all(MYSQLI_ASSOC);
?>

<div class="container">
    <div class="header-bottom">
        <div class="navigation-links">
            <a href="index.php" class="navigation-link js-class">Главная</a>
            <? foreach ($rezult3 as $category):?>
                <a href="cards-category.php?category=<? echo $category['category_id']; ?>" class="navigation-link js-class"><? echo $category['category_title']; ?></a>
            <? endforeach ?>
        </div>
    </div>
</div>
<hr class="line">