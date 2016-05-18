<?php
require_once "./functions/crossDB.php";
?>
<meta charset="utf-8">
<title><?=$title?></title>
<link href="/css/style.css" rel="stylesheet" type="text/css">
<link href="css/bgslider.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="js/bgstretcher.js"></script>

<script type="text/javascript">

    $(document).ready(function(){

        //  Initialize Backgound Stretcher
        $('BODY').bgStretcher({
            images: ['img/fon/fon_1.jpg', 'img/fon/fon_2.jpg', 'img/fon/fon_3.jpg', 'img/fon/fon_4.jpg', 'img/fon/fon_5.jpg',
                'img/fon/fon_6.jpg'],
            imageWidth: 1024,
            imageHeight: 768,
            callbackfunction: $(this).bgStretcher.pause(),
            slideDirection: 'W',
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