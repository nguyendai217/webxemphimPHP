<?php
include('./lib_db.php');
include('./login/checklogin.php');
session_start();
// $user = checkLoggedUser();
$user= isset($_SESSION['user']);
if($user){
  $user= $_SESSION['user'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Website xem phim online</title>
  <link rel="shortcut icon" href="image/film.png">
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/hover.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</head>

<body>
  <div class="wrapper">
    <div class="header">
      <div class="logo">
        <a href="index.php"><img src="image/logo.png" alt="" style="margin-top:10px;" /></a>
        <div class="login">
          <?php if(!$user){ ?>
          <span><a href="login/login.php"><i class="fa fa-user" aria-hidden="true"></i> Đăng nhập</a></span>
          <?php }?>
          <?php if($user){ ?>
          <span><a href="login/logout.php"><i class="fa fa-user" aria-hidden="true"></i><?php echo $user['username']?>,Logout</a></span>
          <?php }?>
        </div>
        <div class="form-search">
          <form action="./timkiem.php" method="GET">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search fa-lg"></i></button>
            </form>
        </div>
      </div>
    </div>