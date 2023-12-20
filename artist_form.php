<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Modern Art Wing</title>

        <meta name="description" content="FlatApp is a Premium, Responsive and Flat Bootstrap Admin Dashboard Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="admin/img/favicon.ico">
        <link rel="apple-touch-icon" href="admin/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="57x57" href="admin/img/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" sizes="72x72" href="admin/img/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" sizes="114x114" href="admin/img/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="admin/img/apple-touch-icon-precomposed.png">
        <!-- END Icons -->


        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="admin/css/bootstrap.css">

        <!-- Related styles of various icon packs and javascript plugins -->
        <link rel="stylesheet" href="admin/css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="admin/css/main.css">


        <!-- Modernizr (Browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it) -->
        <script src="admin/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>

    <body class="login">

        <!-- Login Container -->
        <div id="login-container" >
            <!-- Login Block -->
            <div class="block-tabs block-themed themed-border-night">
                <ul id="login-tabs" class="nav nav-tabs themed-background-deepsea" data-toggle="tabs">
                    <li class="active text-center">
                        <a href="#login-form-tab">
                            <i class="icon-user"></i> Artist Sign Up
                        </a>
                    </li>
                   
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="login-form-tab">
      <?php 
  include "meRaviQr/qrlib.php";
  
  if(isset($_POST['create']))
  {
    $qc =  $_POST['qrContent'];
    $qrUname = $_POST['qrUname'];
    $qrImgName = "QR".rand();
    if($qc=="" && $qrUname=="")
    {
      echo "<script>alert('Please Enter Your Name And Msg For QR Code');</script>";
    }
    elseif($qc=="")
    {
      echo "<script>alert('Please Enter QR Code Msg');</script>";
    }
    elseif($qrUname=="")
    {
      echo "<script>alert('Please Enter Your Name');</script>";
    }
    else
    {
    $dev = "";
    $final = $qc.$dev;
    $qrs = QRcode::png($final,"userQr/$qrImgName.png","H","3","3");
    $qrimage = $qrImgName.".png";
    $workDir = $_SERVER['HTTP_HOST'];
    $qrlink = $workDir."/qrcode".$qrImgName.".png";
    $insQr = $meravi->insertQr($qrUname,$final,$qrimage,$qrlink);
    if($insQr==true)
    {
      echo "<script>alert('Thank You $qrUname. Success Create Your QR Code'); window.location='1.php?success=$qrimage';</script>";

    }
    else
    {
      echo "<script>alert('cant create QR Code');</script>";
    }
  }
 }
  ?>                   
  <?php 
  if(isset($_GET['success']))
  {
  ?>
  <div id="qrSucc">
  <div class="modal-content animate container">
    <?php 
    ?>
 
    <img src="userQr/<?php echo $_GET['success']; ?>" alt="">
    <?php 
$workDir = $_SERVER['HTTP_HOST'];
    $qrlink = $workDir."/qrcode/userQr/".$_GET['success'];
    ?>
     
    <input type="text" value="<?php echo $qrlink; ?>" readonly>

     </div></div>
  <?php
}
else
{
  ?>
                        <!-- Login Form -->
						<?php //include('val.php'); ?>
                        <form action="artistdetails_insert.php" method="post" id="formID" class="form-inline ">
                            <div class="control-group">
                                <div class="controls">
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-envelope-alt"></i></span>
                                        <input type="text" id="aname" name="aname" class="validate[required,custom[onlyLetter]]" placeholder="Artist Name..">
                                    </div>
                                </div>
                            </div>
							<div class="control-group">
                                <div class="controls">
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-envelope-alt"></i></span>
                                        <input type="text" id="workexp" class="validate[required,custom[onlyNumber]]" name="workexp" placeholder="Work Exp..">
                                    </div>
                                </div>
                            </div>
							<div class="control-group">
                                <div class="controls">
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-envelope-alt"></i></span>
                                        <input type="text" id="awardwin" class="validate[required]" name="awardwin" placeholder="Award Own..">
                                    </div>
                                </div>
                            </div>
							<div class="control-group">
                                <div class="controls">
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-envelope-alt"></i></span>
                                        <input type="text" id="addrs" name="addrs" class="validate[required]" placeholder="Address..">
                                    </div>
                                </div>
                            </div>
							<div class="control-group">
                                <div class="controls">
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-envelope-alt"></i></span>
                                        <input type="text" id="emailid" name="emailid" class="validate[required,custom[email]]" placeholder="Email..">
                                    </div>
                                </div>
                            </div>
							<div class="control-group">
                                <div class="controls">
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-envelope-alt"></i></span>
                                        <input type="text" id="contno" name="contno" class="validate[required,custom[mobile]]" placeholder="Contact No..">
                                    </div>
                                </div>
                            </div>
							<div class="control-group">
                                <div class="controls">
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-envelope-alt"></i></span>
                                        <input type="text" id="username" name="username" placeholder="Username.." class="validate[required]">
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-asterisk"></i></span>
                                        <input type="password" id="password" name="password" placeholder="Password.."  required class="validate[required]">
										<!--  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" -->
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls clearfix">
                                    <div class="pull-right">
                                        <button type="submit" name="create" class="btn btn-success remove-margin">Submit</button>
                                    </div>
                    <a href="login/index.html"><----- Login</a> </br>
					     
                                </div>
                            </div>
                        </form>
						    <?php 
}
   ?>
                        <!-- END Login Form -->
                    </div>
                    
                </div>
            </div>
            <!-- END Login Block -->
        </div>
        <!-- END Login Container -->

        <!-- Jquery library from Google ... -->
        <script src="#"></script>
        <!-- ... but if something goes wrong get Jquery from local file -->
        <script>!window.jQuery && document.write(unescape('%3Cscript src="js/vendor/jquery-1.9.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js -->
        <script src="js/vendor/bootstrap.min.js"></script>

        <!--
        Include Google Maps API for global use.
        If you don't want to use the Google Maps API globally, just remove this line and the gmaps.js plugin from js/plugins.js (you can put it in a seperate file)
        Then iclude them both in the pages you would like to use the google maps functionality
        -->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

        <!-- Jquery plugins and custom javascript code -->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Javascript code only for this page -->
        <script>
            $(function() {
                var timeout = 0;

                // If our browser support transitions (class will be added with the help of modernizr library) add a timeout of 750ms
                // Nice fallback for our animation on older browser (such as IE8-9)
                if ($('html').hasClass('csstransitions'))
                    timeout = 750;

                // On button hover or touch reveal the login form
                $('.login-btn').mouseenter(function() {
                    $('.left-door, .right-door, .login-btn').addClass('login-animate');

                    setTimeout(function() {
                        $('#login-container').fadeIn(1500);
                        $('.login-btn .name').fadeOut(250, function() {
                            $('.login-btn .square1, .login-btn .square2').fadeIn(750);
                            $('#login-email').focus();
                        });
                    }, timeout);
                });
            });
        </script>
    </body>
</html>