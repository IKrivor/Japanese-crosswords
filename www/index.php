<!DOCTYPE html>
<html>
<head>
    <?php 
    $title = "Кроссворды";
    require_once "blocks/head.php"; 
    ?>
    <link href="css/bgslider.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
    <script type="text/javascript" src="js/bgstretcher.js"></script>

    <script type="text/javascript">

        $(document).ready(function(){

            //  Initialize Backgound Stretcher
            $('BODY').bgStretcher({
                images: ['img/fon_1.jpg', 'img/fon_2.jpg', 'img/fon_3.jpg'],
                imageWidth: 1024,
                imageHeight: 768,
                callbackfunction: $(this).bgStretcher.pause(),
                slideDirection: 'N',
                slideShowSpeed: 1000,
                transitionEffect: 'fade',
                sequenceMode: 'normal',
                buttonPrev: '#prev',
                buttonNext: '#next',
                pagination: '#nav',
                anchoring: 'left center',
                anchoringImg: 'left center'

            });

        });

    </script>
</head>
<body>
    <?php require_once "blocks/header.php" ?>

    <div id="page" style="display: none_;"></div>

    <a href="#" id='prev'>Предыдущий слайд</a> | <a href="#" id='next'>Следующий слайд</a>

    <div id="body">
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
        </div>

    </div>    

    <?php require_once "blocks/footer.php" ?>
</body>
</html>