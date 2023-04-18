<? require_once "header.php"; ?>
<div class="main2">
    <form action="connection-register.php" method="post" class="modal-window">
        <div class="container-modal">
            <a href="log_in.php" class="link-log-in">
                <img src="img/Arrow-exit.svg" alt="Назад" class="arrow">
            </a>
            <img src="img/Clever_store_logo.svg" alt="Логотип магазина" class="logo-modal">
            <h3 class="title-modal">Регистрация</h3>
            <div class="inputs-form">
                <input type="text" maxlength="50" id="name" name="name" class="form-modal" placeholder="Введите свое имя" autocomplete="off">
                <input type="email" maxlength="320" id="login" name="login" class="form-modal" placeholder="Введите свою почту (логин)" autocomplete="off">
                <input type="password" minlength="4" id="password1" name="password1" maxlength="16" class="form-modal" placeholder="Придумайте пароль (от 4 до 16 символов)" autocomplete="off">
                <input type="password" minlength="4" id="password2" name="password2" maxlength="16" class="form-modal" placeholder="Повторите пароль" autocomplete="off">
            </div>
            <div class="buttons-form regist">
                <button type="submit" class="button-modal">Зарегистрироваться</button>
            </div>
        </div>
    </form>
</div>