<!DOCTYPE html>
<html>
<head>
    <?php
    require_once "./functions/crossDB.php";
    $title = "Регистрация";
    require_once "blocks/head.php";
    ?>
</head>
<body>
<?php require_once "blocks/header.php" ?>

<?php

?>
<form id="register">
    <input type="text" name="name" placeholder="Введите Ваше имя" required/><br>
    <input type="text" name="login" placeholder="Введите логин" required/><br>
    <input type="password" name="pass" placeholder="Введите пароль" required/><br>
    <input type="password" name="pass" placeholder="Повторите пароль" required/><br>
    <input type="submit" name="submit" value="Зарегистрироваться"/>
</form>

<?php require_once "blocks/footer.php" ?>
</body>
</html>