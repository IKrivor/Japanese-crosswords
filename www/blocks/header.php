<?php
require_once "functions/connectDB.php";
?>

<header>
    <a href="#" id='prev'><img src="./img/new_left_ar.png"></a>
    <a href="#" id='next'><img src="./img/new_right_ar.png"></a>

    <div id="logo"><img src="./img/new_logo.png"></div>
<!--    --><?//if(empty($_SESSION['name'])):?>
    <form id="enter" name="enter" method="post" action="./index.php">
        <input type="text" name="login" placeholder="Введите логин" required/><br>
        <input type="password" name="pass" placeholder="Введите пароль" required/><br>
        <?php
        ob_start();
        if(isset($_POST["submit"])){
            global $mysqli;
            connectDB();
            $login = $_POST["login"];
            $user = $mysqli->query("SELECT * FROM `users` WHERE `login` = '$login'");
            $user_data = $user->fetch_assoc();
            closeDB();
            if($user_data["pass"] == md5($_POST["pass"])) {
                session_start();
                $_SESSION["name"] = $user_data["name"];
                $_SESSION["coins"] = $user_data["coins"];
            }
            else {echo '<div id="mess">Неправильный логин или пароль!</div>';}
        }
        ?>
        <input type="submit" name="submit" value="Войти"/>
        <a href="/register.php">Регистрация</a>
    </form>
<!--    --><?//endif?>
    
    <div id="underLogo">
        <div id="user">
            <?if(!empty($_SESSION['name'])):?>
                <div id="user_name">
                    <?php echo $_SESSION['name'];?>
                </div>
                <div id="user_coins">
                    <?php echo $_SESSION['coins'];?>
                </div>
                <script>
                    jQuery(function ($) {
                       $(document).ready(function () {
                           $('#enter').css("display", "none");
                       });
                    });
                </script>
            <?endif?>
        </div>
        <ul id="mainMenu">
            <li><a href="/index.php">Кроссворды</a></li>
            <li><a href="/rules.php">Правила</a></li>
        </ul>
    </div>
    

    <div id="page" style="display: none_;"></div>

    
</header>