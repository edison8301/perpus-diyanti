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

      <?php 
  if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
      echo " username dan password salah!";
    }else if($_GET['pesan'] == "logout"){
      echo "Anda telah berhasil logout";
    }else if($_GET['pesan'] == "belum_login"){
      echo "harus Login";
    }
  }
  ?>

  <br>
   

    <section class="material-half-bg">
      <div class="cover"></div>
    </section>

    <section class="login-content">
      <div class="logo">
        <img src="" width="400px">
      </div>

      <div class="login-box">
        <form class="login-form" method="post" action="cek_login.php">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Login</h3>
            
            <div class="form-group">
              <label class="control-label">USERNAME</label>
                <input class="form-control" type="text" placeholder="Username" autofocus name="username">
            </div>

            <div class="form-group">
              <label class="control-label">PASSWORD</label>
                <input class="form-control" type="password" placeholder="Password" name="password">
            </div>

            <!-- <div class="form-group">
              <div class="utility">
                  <p class="semibold-text mb-2" style="margin-left: 250px;"><a href="#" data-toggle="flip" style="color: #FF9800;">Forgot Password ?</a></p>
              </div>
            </div> -->

            <div class="form-group btn-container">
              <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>Login</button><br>
              <!-- <button class="btn btn-default" type="button" onclick="history.back()">Cancel</button>
              <a href="register.php"><button class="btn btn-info" type="button">Register</button></a> -->
            </div>
          </form>

         <!--  <form class="forget-form" action="">
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
              
              <div class="form-group">
                <label class="control-label">EMAIL</label>
                  <input class="form-control" type="text" placeholder="Email">
              </div>

              <div class="form-group btn-container">
                <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
              </div>

              <div class="form-group mt-3">
                <p class="semibold-text mb-0">
                  <a href="#" data-toggle="flip" style="color: #FF9800;">
                    <i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
              </div>
          </form> -->
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
      // $('.login-content [data-toggle="flip"]').click(function() {
      //   $('.login-box').toggleClass('flipped');
      //   return false;
      // });
    </script>
  </body>
</html>