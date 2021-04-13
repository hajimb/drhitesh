

<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>Sexologist | Admin Section</title>

<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">



<link rel="stylesheet" href=" <?php echo base_url();?>assets/admin/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<link rel="stylesheet" href=" <?php echo base_url();?>assets/admin/bootstrap/css/blue.css">

<link rel="stylesheet" href="  <?php echo base_url();?>assets/admin/bootstrap/css/AdminLTE.min.css">

<link rel="stylesheet" href="  <?php echo base_url();?>assets/admin/bootstrap/css/_all-skins.min.css">



<input type="hidden" name="base_url" id="base_url" value=" <?php echo base_url();?>">

<!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<![endif]-->

</head><body class="hold-transition login-page">

<div class="login-box">

  <div class="login-logo"> <a href=" <?php echo base_url();?>admin"><img src=" <?php echo base_url();?>assets/img/logo.png"></a></div>

  <!-- /.login-logo -->

  <div class="login-box-body">

    <p class="login-box-msg">Sign in to start your session</p>

    <form method="post" id="loginform">

           <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="username" name="username" id="username" value="" tabindex=1>

        <span class="glyphicon glyphicon-envelope form-control-feedback"></span> </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Password" name="password" id="password" autocomplete="Off" value="" tabindex=2>

        <span class="glyphicon glyphicon-lock form-control-feedback"></span> </div>

      <div class="row">

        <div class="col-xs-8">

          <div class="checkbox icheck">

            <label><input type="checkbox" name="remember" id="remember" value="yes"  tabindex=3> Remember Me </label>

          </div>

        </div>

        <div class="col-xs-4">

        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>" />

        <input type="submit"  class="btn btn-primary btn-block btn-flat loginbtn" tabindex=4 value="Sign In">

          

        </div>

      </div>

    </form>

    <a href=" <?php echo base_url();?>">I forgot my password</a>

</div></div>

</body>

<script src=" <?php echo base_url();?>assets/admin/bootstrap/js/jQuery-2.1.4.min.js"></script> 

<script src=" <?php echo base_url();?>assets/admin/bootstrap/js/bootstrap.min.js"></script> 

<script src=" <?php echo base_url();?>assets/admin/bootstrap/js/icheck.min.js"></script> 

<script src=" <?php echo base_url();?>assets/js/jquery.toaster.js"></script>

<script>

var base_url = $("#base_url").val();

  $(function () {

    $('input').iCheck({

      checkboxClass: 'icheckbox_square-blue',

      radioClass: 'iradio_square-blue',

      increaseArea: '20%' // optional

    });

  });

</script>

<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/login.js?random=596eec19c2241"></script>

</html>

