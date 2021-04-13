<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
    <title><?php echo (!empty($setting->title)?$setting->title:null) ?></title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/images/favicon.png"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">

    <!-- this styles only adds some repairs on idevices  -->

    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-datepicker.css"></link>

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- ######### CSS STYLES ######### -->

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/reset.css?time=<?php echo time();?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css?time=<?php echo time();?>" type="text/css" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome/css/font-awesome.min.css">

    <!-- simple line icons -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/simpleline-icons/simple-line-icons.css" media="screen" />

    <!-- et linefont icons -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/et-linefont/etlinefont.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/shadowbox.css">

    <!-- animations -->
    <!--link href="<?php echo base_url();?>assets/js/animations/css/animations.min.css" rel="stylesheet" type="text/css" media="all" /-->

    <!-- responsive devices styles -->
    <link rel="stylesheet" media="screen" href="<?php echo base_url();?>assets/css/responsive-leyouts.css?time=<?php echo time();?>" type="text/css" />

    <!-- shortcodes -->
    <link rel="stylesheet" media="screen" href="<?php echo base_url();?>assets/css/shortcodes.css?time=<?php echo time();?>" type="text/css" />

    <!-- mega menu -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css?time=<?php echo time();?>" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/js/mainmenu/demo.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/menu.css?time=<?php echo time();?>" rel="stylesheet">
    <!--link href="<?php echo base_url();?>assets/js/mainmenu/menu11.css" rel="stylesheet"-->

    <!-- MasterSlider -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/js/masterslider/style/masterslider.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/js/masterslider/skins/default/style.css?random=<?php echo time();?>" />

    <!-- cubeportfolio -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/cubeportfolio/cubeportfolio.min.css">

    <!-- owl carousel -->
    <link href="<?php echo base_url();?>assets/js/carouselowl/owl.transitions.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/js/carouselowl/owl.carousel.css" rel="stylesheet">

    <!-- tabs 2 -->
    <link href="<?php echo base_url();?>assets/js/tabs2/tabacc.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/js/tabs2/detached2.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/admin/bootstrap/css/shadowbox.css" rel="stylesheet" />

    <!-- tabs -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/tabs/assets/css/responsive-tabs3.css">

    <!-- accordion -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/accordion/style.css" />

    <link rel="stylesheet" href="<?php echo base_url();?>assets/js/flexslider/flexslider.css?time=<?php echo time();?>" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/flexslider/skin.css" />
    <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url();?>">
    <input type="hidden" name="daysshow" id="daysshow" value="<?php echo $setting->showdays;?>">
    <input type="hidden" name="timeslot" id="timeslot" value="<?php echo $setting->time_slot;?>">
    <input type="hidden" name="userid" id="userid" value="<?php echo $this->session->userdata('user_id');?>">
</head>
<body>
