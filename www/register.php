<?php
    require_once "functions/connectDB.php";

    function addUser($name, $login, $pass){
        global $mysqli;
        connectDB();
        $result = $mysqli->query("INSERT INTO `users` (`name`, `login`, `pass`, `coins`) VALUES
    ('".$name."', '".$login."', '".md5($pass)."', '30')");
        closeDB();
        return $result;
    }
?>

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
    <?php require_once "./functions/connectDB.php";?>
    
<form id="register" name="register" method="post" >
    <input type="text" name="name" placeholder="Введите Ваше имя" required/><br>
    <input type="text" name="login" placeholder="Введите логин" required/><br>
    <input type="password" name="pass" placeholder="Введите пароль" required/><br>
    <input type="password" name="r_pass" placeholder="Повторите пароль" required/><br>
    <input type="submit" name="submit" value="Зарегистрироваться"/>
    <?php
    if(isset($_POST["submit"])){
        if($_POST["pass"] == $_POST["r_pass"]){
            $success = addUser($_POST["name"], $_POST["login"], $_POST["pass"]);
            if($success){header("Location:index.php"); exit();}//не работает
            else echo '<div id="er_mes">Пользователь с таким логином уже существует!</div>';
        }  else{
            echo '<div id="er_mes">Пароли не совпадают!</div>';
        }
    }
    ?>
</form>

<?php require_once "blocks/footer.php" ?>
</body>
</html>