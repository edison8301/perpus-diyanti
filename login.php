<?php

  // if ( isset($_SESSION['nama']) && $_SESSION['password'] != '' ) {
  //     $halaman = $_SESSION['nama'];

  //     header('location:index.php');
  //     exit();
  // }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Perpustakaan</title>
  </head>
  <body>

    <section class="material-half-bg">
      <div class="cover"></div>
    </section>

    <section class="login-content">
      <div class="logo">
        <img src="" width="400px">
      </div>

      <div class="login-box">

        <form class="login-form" action="check-login.php" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Login</h3>
            
            <div class="form-group">
              <label class="control-label">USERNAME</label>
                <input class="form-control" type="text" placeholder="Username" autofocus="" name="username">
            </div>

            <div class="form-group">
              <label class="control-label">PASSWORD</label>
                <input class="form-control" type="password" placeholder="Password" name="password">
            </div>
           
           <?php
                    /* handle error */
                    if (isset($_GET['error'])) : ?>
                        <div class="alert alert-warning alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
                        </div>
                    <?php endif;?>

              <div class="form-group btn-container">
             <input type="submit" class="btn btn-block btn-primary" value="Login" />
              <!-- <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>Login</button><br>
              -->
            </div>
          </form>

          
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
        $('.login-box').toggleClass('flipped');
        return false;
      });
    </script>
  </body>
</html>