<!DOCTYPE html>
<html>
<head>
    <?php 
    $title = "Кроссворды";
    require_once "blocks/head.php";

    $cross = getCross();
    ?>
</head>
<body>
    <?php require_once "blocks/header.php" ?>

    

    <div id="body">

        <?php
        for($i = 0; $i < count($cross); $i++){
            echo '<div class="cross">
            <span>'.$cross[$i]["name"].'</span>
            <a href="cross.php"><img src="img/cross/'.$cross[$i]["id"].'.png"></a>
            <span>'.$cross[$i]["complexity"].'</span>
        </div>';
            if($i == 2 || $i == 5 || $i == 8)
                echo "<div class=\"clear\"><br></div>";
        }
        ?>
<!--
        <div class="cross">
            <span>Название</span>
            <a href="cross.php"><img src="img/cross_test.png"></a>
            <span>Сложность</span>
        </div>
        <div class="cross">
            <span>Название</span>
            <a href="cross.php"><img src="img/cross_test.png"></a>
            <span>Сложность</span>
        </div>
        <div class="cross">
            <span>Название</span>
            <a href="cross.php"><img src="img/cross_test.png"></a>
            <span>Сложность</span>
        </div>
        <div class="cross">
            <span>Название</span>
            <a href="cross.php"><img src="img/cross_test.png"></a>
            <span>Сложность</span>
        </div>
        <div class="cross">
            <span>Название</span>
            <a href="cross.php"><img src="img/cross_test.png"></a>
            <span>Сложность</span>
        </div>
        <div class="cross">
            <span>Название</span>
            <a href="cross.php"><img src="img/cross_test.png"></a>
            <span>Сложность</span>
        </div>
        <div class="cross">
            <span>Название</span>
            <a href="cross.php"><img src="img/cross_test.png"></a>
            <span>Сложность</span>
        </div>
        <div class="cross">
            <span>Название</span>
            <a href="cross.php"><img src="img/cross_test.png"></a>
            <span>Сложность</span>
        </div>
        <div class="cross">
            <span>Название</span>
            <a href="cross.php"><img src="img/cross_test.png"></a>
            <span>Сложность</span>
        </div>-->

    </div>    

    <?php require_once "blocks/footer.php" ?>
</body>
</html>