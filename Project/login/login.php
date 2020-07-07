<?php
   include("./lib_db.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form    
      $myusername = mysqli_real_escape_string($connect,$_POST['username']);
      $mypassword = mysqli_real_escape_string($connect,$_POST['password']); 
      
      $sql = "SELECT id_user FROM users WHERE username = '$myusername' and password= '$mypassword'";
      $result = mysqli_query($connect,$sql);
      $row = mysqli_fetch_array($result);
      $count = mysqli_num_rows($result);		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         header("location:../admin/index.html ");
      }else {
         echo("Your Login Name or Password is invalid");
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="container login-form">
        <h2 class="login-title">- Please Login -</h2>
        <div class="panel panel-default">
            <div class="panel-body">
                <form method="POST">
                    <div class="input-group login-userinput">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input id="txtUser" type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input id="txtPassword" type="password" class="form-control" name="password"
                            placeholder="Password">
                        <span id="showPassword" class="input-group-btn">
                            <button class="btn btn-default reveal" type="button"><i
                                    class="glyphicon glyphicon-eye-open"></i></button>
                        </span>
                    </div>
                    <input class="btn btn-primary btn-block login-button" value="Đăng nhập" type="submit" id="btnlogin">
                        </input>
                    <div class="checkbox login-options">
                        <a href="./index.php">Trở về trang chủ.</a>
                        <a href="register.php" class="login-forgot">Chưa có tài khoản, đăng kí ?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/main.js"></script>
</body>

</html>