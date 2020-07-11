<?php
include('../lib_db.php');
$sql= "select*from theloai";
$row= select_list($sql);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="quanlitheloai.php"><i class="fa fa-desktop fa-3x"></i> Quản lí thể loại</a>
                    </li>
                    <li>
                        <a href="quanliphim.php"><i class="fa fa-qrcode fa-3x"></i> Quản lí phim</a>
                    </li>
                    <li>
                        <a href="quanlibinhluan.php"><i class="fa fa-bar-chart-o fa-3x"></i>Quản lí bình luận </a>
                    </li>
                    <li>
                        <a class="active-menu" href="themphim.php"><i class="fa fa-table fa-3x"></i> Thêm phim mới</a>
                    </li>
                    <li>
                        <a href="quanliusers.php"><i class="fa fa-edit fa-3x"></i> Quản lí users </a>
                    </li>
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Thêm phim mới</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>  
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div class="row">
                     <div class="col-md-2"></div>
                     <div class="col-md-8">
                        <form role="form">
                            <div class="form-group">
                                <label>Tên phim</label>
                                <input class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Đạo diễn</label>
                                <input class="form-control"  />
                            </div>
                            <div class="form-group">
                                <label>Diễn Viên</label>
                                <input class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Thời lượng phim</label>
                                <input class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Năm sản xuất</label>
                                <input class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Nơi sản xuất</label>
                                <input class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Tags</label>
                                <input class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Thể loại</label>
                                <select name="add_tl">
                                    <option>Tuỳ chọn</option>
                                <?php foreach($row as $rs) { ?>   
                                <option value="<?php echo $rs['id_theloai']?>"><?php echo $rs['theloai']?></option>
                                <?php }?>
                            
                            </select>
                            </div>
                            <div class="form-group">
                                <label>Ảnh phim</label>
                                <input type="file" />
                            </div>
                            <div class="form-group">
                                <label>Nội dung phim</label>
                                <textarea class="form-control" rows="4"></textarea>
                            </div>
                            <input type="submit" class="btn btn-success" value="Thêm">
                            <input type="button" class="btn btn-danger" value="Hủy bỏ" onclick="return cancle();">
                        </form>
                     </div>
                 </div>
               
            
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
       <script>
        function cancle(){
	        window.location = 'themphim.php';
	        return false;
        }
</script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
