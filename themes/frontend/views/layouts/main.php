<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from www.pixfill.com/templates/rockit2.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Mar 2016 05:16:14 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
        $baseUrl = Yii::app()->theme->baseUrl;
//        $cs = Yii::app()->getClientScript();
//        Yii::app()->clientScript->registerCoreScript('jquery');
        ?>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <link href="<?php echo $baseUrl; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $baseUrl; ?>/assets/css/bootstrap-theme.min.html" rel="stylesheet">
        <link href="<?php echo $baseUrl; ?>/assets/css/iconmoon.css" rel="stylesheet">
        <link href="<?php echo $baseUrl; ?>/style.css" rel="stylesheet">
        <link href="<?php echo $baseUrl; ?>/assets/css/menu.css" rel="stylesheet">
        <link href="<?php echo $baseUrl; ?>/assets/css/color.css" rel="stylesheet">
        <link href="<?php echo $baseUrl; ?>/assets/css/widget.css" rel="stylesheet">
        <link href="<?php echo $baseUrl; ?>/assets/css/browser-detect.css" rel="stylesheet">
        <link href="<?php echo $baseUrl; ?>/assets/css/responsive.css" rel="stylesheet">
        <link href="<?php echo $baseUrl; ?>/assets/css/jplayer.blue.monday.min.css" rel="stylesheet">
        <!-- <link href="assets/css/rtl.css" rel="stylesheet"> Uncomment it if needed! -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    </head>
    <body>
        <div class="wrapper"> 
            <!-- Header Start -->
                <?php require_once 'header.php'; ?>
            <!-- Header End --> 
             <?php echo $content;   ?>
            <!-- Footer Start -->
            <?php require_once 'footer.php'; ?>
            <!-- Footer End --> 
        </div>
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/scripts/jquery.min.js"></script> 
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/scripts/modernizr.min.js"></script> 
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/scripts/bootstrap.min.js"></script> 
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/scripts/browser-detect.js"></script> 
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/scripts/selectFx.js"></script> 
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/scripts/menu.js"></script>
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/scripts/jquery.flexslider.js"></script> 
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/scripts/jquery.countdown.js"></script> 
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/scripts/jquery.matchHeight.html"></script>
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/scripts/slick-min.html"></script>
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/scripts/slick.js"></script> 
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/scripts/jquery.jplayer.min.js"></script> 
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/scripts/jplayer.playlist.min.js"></script>
        <!-- Put all Functions in functions.js --> 
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/scripts/functions.js"></script>
    </body>

    <!-- Mirrored from www.pixfill.com/templates/rockit2.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Mar 2016 05:17:22 GMT -->
</html>