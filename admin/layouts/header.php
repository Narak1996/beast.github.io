<?php require_once 'config/connect.php'; ?>
<?php
  session_start();
  if(@$_SESSION['logged']!='logged'&& @$_COOKIE['logged']!='logged'){
    header('location:login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mama Admin </title>

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script src="theme/vendors/jquery/dist/jquery.min.js"></script>

     <!-- Bootstrap -->
    <link href="theme/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="theme/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <!-- <link href="theme/vendors/nprogress/nprogress.css" rel="stylesheet"> -->
    
    <!-- Custom Theme Style -->
    <link href="theme/build/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    
    <!-- <link rel="stylesheet" type="text/css" href="datatables.min.css">
    <script type="text/javascript" src="datatables.min.js"></script> -->

    <link rel="stylesheet" type="text/css" href="datable/datatables.min.css">
    <script type="text/javascript" src="datable/datatables.min.js"></script>
    
    <style>
      @font-face{
      font-family: myfont;
      src:url('../fonts/AKbalthom KhmerLer [Version 2.00].ttf');
    }
    *{
      font-family: myfont;
    }
    div.photo{
      width: 70px;height: 70px; 
      background-size: cover!important; 
      border-radius: 50%; 
      border:5px solid grey;
      margin-top: 8px; 
      margin-left: 10px;
      /*background: url('img/profile_picture/me.JPG');*/
      /*background: red;*/
    }
    </style>
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><img src="../img/logo/logo.png" width="40px" style="margin-top: -15px"></i><span class="admin_text" style="font-size:35px;"> ម៉ាម៉ា</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <!-- <img src="img/profile_picture/me.JPG" alt="..." class="img-circle profile_img"> -->
                <div class="photo"  
                  <?php 
                    $t_i=$_SESSION["user"]->img;
                    echo "style=\"background:url('img/profile_picture/".$t_i."');\" "; 
                    ?>
                 ></div>
              </div>
              <div class="profile_info">
                <h2><?= $_SESSION['user']->full_name ?></h2>
                <span><?= $_SESSION['user']->phone ?></span>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <?php include 'layouts/navigation.php' ?>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.php?action=logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              

              
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  































                  