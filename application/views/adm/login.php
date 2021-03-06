<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
   <head>
        <title>Admin Home Page</title>
        <!-- Bootstrap -->
        <link href="<?php echo base_url('assets2/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url('assets2/bootstrap/css/bootstrap-responsive.min.css');?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url('assets2/vendors/easypiechart/jquery.easy-pie-chart.css');?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url('assets2/assets/styles.css');?>" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<?php echo base_url('assets2/vendors/modernizr-2.6.2-respond-1.1.0.min.js');?>"></script>
    </head>
  <body id="login">
    <div class="container">

      <form class="form-signin" method="post" action="<?php echo base_url().'index.php/admLogin/do_login';?>">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" class="input-block-level" placeholder="Email address" name="adm_mail">
        <input type="password" class="input-block-level" placeholder="Password" name="adm_password">
       
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
    <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>