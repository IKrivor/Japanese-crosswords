<!DOCTYPE html>
<html>
<head>
    <?php
    require_once "./functions/crossDB.php";
    $cros = getCross(1, $_GET["id"]);
    $title = $cros["name"];
    print '<script language="javascript">var id = '.$cros["id"].';</script>';
    require_once "blocks/head.php";
    ?>
</head>
<body>
<?php require_once "blocks/header.php" ?>

<div id="grid">
    <canvas id = "leftOfGrid"  style="background: #E6E6E6;"  class="canvas">
        <script>
            drawLeft();
        </script>
    </canvas>
    <div id="topAndBody">
        <canvas id = "topOfGrid"  style="background: #E6E6E6;" class="canvas">
            <script>
                drawTop();
            </script>
        </canvas>

        <canvas id = "bodyOfGrid"  style="background: white;" class="canvas">
            <script>
                readMatrixOfPict();
                drawBody();
            </script>
        </canvas>
    </div>
</div>
<div id="underGrid">
        <a class="help help_1" href="#">
            <div class="circle" id="help1but" onclick="firstHelp()"  style="padding-top: 2px; text-align: center; font-size: 20pt;font-weight: bold;">
                3
            </div>
            <span class="airhelp">Показать неправильную клетку</span>
        </a>

        <a class="help help_2" href="#">
            <div class="circle2" id="help2but" onclick="secondHelp()" style=" vertical-align: top; text-align: center;
             font-size: 20pt;font-weight: bold;">
                3
            </div>
            <span class="airhelp">Показать правильную клетку</span>
        </a>

    <a class="help help_3" href="#">
        <div id="indic" style="color: #626262; font-size: 30pt; cursor: default; font-weight: bolder;">&#10003;
        </div>
        <span class="airhelp">Результат отгадывания</span></a>
</div>

    
    


<?php require_once "blocks/footer.php" ?>
</body>
</html>