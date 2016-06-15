<?php ob_start(); echo '<!DOCTYPE html>
<html><head>';
    require_once "./functions/crossDB.php";
    $title = "Кроссворды";
    require_once "blocks/head.php";
    $cross = getCross(9, null);
    echo '</head>
<body>';

     require_once "blocks/header.php" ?>

    <div id="body">
        <?php
        for($i = 0; $i < count($cross); $i++){
            echo '<div class="cross">
            <span>'.$cross[$i]["name"].'</span>
            <a href="cross.php?id='.$cross[$i]["id"].'"><img src="img/cross/'.$cross[$i]["id"].'.png"></a>
            <span>'.$cross[$i]["complexity"].'</span>
        </div>';
            if($i == 2 || $i == 5 || $i == 8)
                echo "<div class=\"clear\"><br></div>";
        }
        ?>
    </div>    

    <?php require_once "blocks/footer.php" ?>
</body>
</html>