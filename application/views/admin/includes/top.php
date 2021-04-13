<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sexologist | Dashboard</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bootstrap/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/sweetalert.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bootstrap/css/shadowbox.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<?php if($pagename == 'morris'){?>
	<link rel="stylesheet" href=" <?php echo base_url();?>assets/admin/bootstrap/css/morris.css">
<?php }
if($pagename == 'dashboard'){?>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datepicker.css"></link>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bootstrap/css/flat/blue.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bootstrap/css/bootstrap3-wysihtml5.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bootstrap/css/jquery-jvectormap-1.2.2.css">
<?php }
if($pagename == 'advancedform'){?>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bootstrap/css/select2.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bootstrap/css/daterangepicker-bs3.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bootstrap/css/all.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bootstrap/css/bootstrap-colorpicker.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bootstrap/css/bootstrap-timepicker.min.css">
<?php }
if($pagename == 'editor_form'){?>
	<link rel="stylesheet" href=" <?php echo base_url();?>assets/admin/bootstrap/css/bootstrap3-wysihtml5.min.css">
<?php }
if($pagename == 'sliders'){?>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bootstrap/css/ion.rangeSlider.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bootstrap/css/ion.rangeSlider.skinNice.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bootstrap/css/slider.css"> 
<?php }
if($pagename == 'calendar' || $pagename == 'compose'|| $pagename == 'readmail' || $pagename == 'mailbox'){?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bootstrap/css/fullcalendar.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bootstrap/css/fullcalendar.print.css" media="print">
<?php }
if($pagename == 'compose' || $pagename == 'readmail' || $pagename == 'mailbox'){?>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bootstrap/css/flat/blue.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bootstrap/css/bootstrap3-wysihtml5.min.css">
<?php }?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bootstrap/css/datatable.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bootstrap/css/AdminLTE.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bootstrap/css/_all-skins.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/fullcalendar.min.css">
<input type="hidden" name="base_url" id="base_url" value="<?php echo base_url();?>">
<script src="<?php echo base_url();?>assets/admin/ckeditor/ckeditor.js"></script>
<!-- <link href="https://sdk.ckeditor.com/theme/css/sdk-inline.css" rel="stylesheet"> -->

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">