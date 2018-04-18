
<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.0
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Login Page | Materialize - Material Design Admin Template</title>

  <!-- Favicons-->
  <link rel="icon" href="<?php echo base_url('assets/images/favicon/favicon-32x32.png') ;?>" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="/images/favicon/apple-touch-icon-152x152.png<?php echo base_url('assets') ;?>">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="<?php echo base_url('assets/images/favicon/mstile-144x144.png') ;?>">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="<?php echo base_url('assets/css/materialize.css') ;?>" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url('assets/css/style.css') ;?>" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
  <link href="<?php echo base_url('assets/css/custom/custom-style.css') ;?>" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url('assets/css/layouts/page-center.css') ;?>" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="<?php echo base_url('assets/js/plugins/prism/prism.css') ;?>" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url('assets/js/plugins/perfect-scrollbar/perfect-scrollbar.css') ;?>" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" id="frm_login">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="images/login-logo.png" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text">Login <h5> SIPELAUT </h5></p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" type="text" name="username">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" name="passwords">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input type="submit" value="Login" class="btn waves-effect waves-light col s12">
          </div>
        </div>
      </form>
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/jquery-1.11.2.min.js') ;?>"></script>
  <!--materialize js-->
  <script type="text/javascript" src="<?php echo base_url('assets/js/materialize.js') ;?>"></script>
  <!--prism-->
  <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/prism/prism.js') ;?>"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js') ;?>"></script>

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url('assets/js/plugins.js') ;?>"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="<?php echo base_url('assets/js/custom-script.js') ;?>"></script>

</body>

</html>