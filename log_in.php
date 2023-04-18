<? require_once "header.php"; ?>
<div class="main2">
    <form action="connection-log_in.php" method="post" class="modal-window">
        <div class="container-modal">
            <img src="img/Clever_store_logo.svg" alt="Логотип магазина" class="logo-modal">
            <h3 class="title-modal">Вход</h3>
            <div class="inputs-form">
                <input type="email" id="login" name="login" class="form-modal" placeholder="Логин" autocomplete="off">
                <input type="password" id="password" name="password1" class="form-modal" placeholder="Пароль" autocomplete="off">
            </div>
            <div class="buttons-form">
                <button class="button-modal">Войти</button>
                <p class="text-between-button">Если вы не зарегистрированы то</p>
                <a href="register.php" class="link-register">
                    <button class="button-modal">Зарегистрироваться</button>
                </a>
            </div>
        </div>
    </form>
</div>