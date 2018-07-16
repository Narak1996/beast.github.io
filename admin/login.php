<?php 
  require_once 'config/connect.php';
?>
<?php 

     session_start();
     if (isset($_POST['btnlog'])) {
        $username=$_POST['username'];
        $pw=$_POST['pw'];
        // $enc=sha1(md5($pw)).sha1("khmer");
        $enc_pw=sha1(md5($pw)).sha1("khmer");
        $stm="SELECT full_name,img,position,phone,id FROM tb_user WHERE username='$username' AND password='$enc_pw' AND status='1'";
        $user=$conn->query($stm);
        if (mysqli_num_rows($user)==1) {
          $user_data=mysqli_fetch_object($user);
          $_SESSION['logged']="logged";
          setcookie('logged','logged',time()+(3600*24));
          $_SESSION['user']=$user_data;
          $_SESSION['c_user']=$user_data->id;
          header("location:index.php?c=".$user_data->id);
        }
        else {
          $_SESSION['logged']="no";
          echo '<div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>User Acount or password!</strong> is incorrect ...
                </div>';
        }

      } 
      if ($_GET['action']=="logout") {
        session_destroy();
        setcookie('logged','logged',time()-3600);
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

    <title>MaMa Admin | </title>

    <!-- Bootstrap -->
    <link href="theme/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="theme/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="theme/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="theme/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="theme/build/css/custom.min.css" rel="stylesheet">
    <style>
      @font-face{
      font-family: myfont;
      src:url('../fonts/AKbalthom KhmerLer [Version 2.00].ttf');
      }
      *{
      font-family: myfont;

      }
      .login{
        background: url('img/spiration-light.png');
        /*background-repeat: repeat-x;*/
        /*background: rgba(155, 89, 182,1.0);*/
        /*background-position: 0 600px;*/
      }
      h3,p{
        text-shadow: 1px 1px rgba(0,0,0,0.6);
        color: rgba(241, 196, 15,1.0);
      }
      input[type="text"],input[type="password"]{
        /*background:rgba(26, 188, 156,1.0);*/
        background: transparent;
        transition: 0.3s;
        border: none!important;
        border-bottom:  1px solid rgba(44, 62, 80,1.0)!important;
        box-shadow: none!important;
        border-radius: 0px!important;

      }
      input[type="text"]:focus,input[type="password"]:focus{
        /*background:rgba(26, 188, 156,1.0)!important;*/
        background: transparent!important;
        color: rgba(44, 62, 80,1.0)!important;
        font-size: 20px;
      }
      .frmlog{
        /*background:rgba(26, 188, 156,0.3);*/
        padding: 20px 20px;
        border-radius: 5px;
        /*box-shadow: 1px 1px 6px 2px rgba(0,0,0,0.5);*/
        /*border: 1px solid black;*/
      }
      button.btn-cus{
        border: 1px solid rgba(44, 62, 80,1.0);
        padding: 2px 20px;
        border-radius: 2px;
        color: rgba(192, 57, 43,1.0)!important;
        font-size: 15px!important;
        background: url(img/grey.PNG);
        background-repeat: repeat-x;
        background-size: contain;
        background-position: 0 40px;
        transition: 0.5s;
        text-shadow: none;
      }
      button.btn-cus:hover{
        text-decoration: none;
        background-position: 0 0px;
        color: black!important;
      }
    </style>
  </head>
  
  <body class="login">
    
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form class="frmlog" action="login.php" method="post">
              <h3>ចូលទៅកាន់​ <strong>ម៉ាម៉ា</strong></h3>
              <div>
                <input type="text" class="form-control" placeholder="ឈ្មោះ" required="" name="username" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="លេខសម្ងាត់" required="" name="pw" />
              </div>
              <div>
                <button class="btn-cus" name="btnlog">ចូល</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                  

                <div class="clearfix"></div>
                <br />

                <div>
                  <img src="../img/logo/logo.jpg" width="40px">
                  <h3>ម៉ាម៉ា</h3>
                  <p>Copyright© 2018 Mama, All Rights Reserved. <a href="../index.php">ម៉ាម៉ា</a></p>
                </div>
              </div>
            </form>
          </section>
        </div>

        
      </div>
    </div>
  </body>
</html>
