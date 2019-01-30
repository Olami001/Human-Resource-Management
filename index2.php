<?php
  include('admin/includes/config.php');
  if (isset($_POST['signin'])) {
    # code...
    $uname = $_POST['uname'];
    $passkey = md5($_POST['passkey']);
    if (empty($uname) || empty($passkey)) {
      # code...
      echo'<script>alert("Username or password field must not be Null");</script>';
    }
    else{
      if ($uname =='admin' && $passkey=='pass3word') {
        # code...
        $session['admin'] = $uname;
        header('location:admin/dashboard.php');
      }
      else{
        $sql = mysqli_query($con, "select * from employee_tb where EmpID = '$uname' AND Password = '$passkey'");
        if (mysqli_num_rows($sql) > 0) {
          $fetch = mysqli_fetch_assoc($sql);
          $_SESSION['eid'] = $fetch['EmpID'];
          header('location:user/index.php');
        }
        else
          echo'<script>alert("Username or password not correct!!!");</script>';
      }
        
      }
    }
  
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>UDUS-HMRS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/stylesheet.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  
</head>
<body class="hold-transition login-page" style="background: url('images/weather.jpg');">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b style="color: green">UDUS-</b> <span style="color: #fafafa;">HRMS</span></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form  method="post">
        <div class="form-group has-feedback">
          <input type="text" name="uname" class="form-control" placeholder="Username">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="password" name="passkey" class="form-control" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" name="signin" class="btn btn-success btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
    <a href="#" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
