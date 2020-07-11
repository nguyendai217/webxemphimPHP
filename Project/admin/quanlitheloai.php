﻿<?php
include('../lib_db.php');

$sql= "select*from theloai";
$row= select_list($sql);

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Quản lí thể loại</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="assets/css/custom.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
  <div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Binary admin</a>
      </div>
      <div style="color: white;
              padding: 15px 50px 5px 50px;
              float: right;
              border-radius: 2px;
              font-size: 16px;">
              <a href="logout.php" class="btn btn-success square-btn-adjust"> Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a> 
      </div>
  </nav>
      <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
          <ul class="nav" id="main-menu">
            <li class="text-center">
            <img src="assets/img/find_user.png" class="user-image img-responsive"/>
            </li>
            <li>
              <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
            </li>
            <li>
              <a class="active-menu" href="quanlitheloai.php"><i class="fa fa-desktop fa-3x"></i> Quản lí thể loại</a>
            </li>
            <li>
              <a href="quanliphim.php"><i class="fa fa-qrcode fa-3x"></i> Quản lí phim</a>
            </li>
            <li>
              <a href="quanlibinhluan.php"><i class="fa fa-bar-chart-o fa-3x"></i>Quản lí bình luận </a>
            </li>
            <li>
              <a href="themphim.php"><i class="fa fa-table fa-3x"></i> Thêm phim mới</a>
            </li>
            <li>
              <a href="quanliusers.php"><i class="fa fa-edit fa-3x"></i> Quản lí users </a>
            </li>
          </ul>
        </div>

      </nav>
      <!-- /. NAV SIDE  -->
      <div id="page-wrapper">
        <div id="page-inner">
          <div class="row">
            <div class="col-md-12">
              <h2>Quản lí thể loại</h2>
              <h5>Welcome Jhon Deo , Love to see you back. </h5>
            </div>
          </div>
          <!-- /. ROW  -->
          <hr />
          <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-5">
            <h4 style="color: green;">Thêm thể loại</h4>
            <form action="">
            <input style="height: 34px;width: 250px;" type="text" name="addtheloai" placeholder="Tên thể loại..">
            <input type="submit" class="btn btn-success" value="Thêm" >
            </form>
          </div>
        </div>
        <br>
         <div class="row">
           <div class="col-md-1"></div>
          <div class="col-md-10">
            <!--   Kitchen Sink -->
              <div class="panel panel-default">
                  <div class="panel-heading" >
                      Danh sách thể loại
                  </div>
                  <div class="panel-body">
                      <div class="table-responsive">
                          <table class="table table-striped table-bordered table-hover">
                              <thead style="text-align: center;">
                                  <tr>
                                      <th>ID</th>
                                      <th>Tên thể loại</th>
                                      <th>Chỉnh sửa</th>
                                      <th>Xóa thể loại</th>
                                  </tr>
                              </thead>
                              <tbody style="text-align: center;">
                              <?php foreach($row as $rs) { ?>
                                <tr>
                                  <td><?php echo $rs['id_theloai']?></td>
                                  <td><?php echo $rs['theloai']?></td>
                                  <td><a style="font-size: 20px;" href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                  <td><a style="font-size: 20px; color: brown;" href=""><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                              </tr>
                              <?php 
                            }?>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
               <!-- End  Kitchen Sink -->
          </div>
         </div>
          
        </div>
      </div>
      <!-- /. PAGE WRAPPER  -->
  </div>
  <!-- /. WRAPPER  -->
  <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
  <!-- JQUERY SCRIPTS -->
  <script src="assets/js/jquery-1.10.2.js"></script>
  <!-- BOOTSTRAP SCRIPTS -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- METISMENU SCRIPTS -->
  <script src="assets/js/jquery.metisMenu.js"></script>
  <!-- CUSTOM SCRIPTS -->
  <script src="assets/js/custom.js"></script>

</body>

</html>