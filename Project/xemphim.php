<?php 
include('page/header.php');
include('page/menu.php');
include('page/slider.php');
include('lib_db.php');

$_get=$_GET['id_phim'];
$sql="Select * from phim where id_phim='$_get'";
$row= select_one($sql);

$sql2="UPDATE phim SET soluotxem = soluotxem +1 WHERE id_phim='$_get'";
$update= exec_update($sql2);
?>
<div class="main">
      <div class="main-left">
        <h3 style="margin-left: 10px;margin-top: 10px;">Tên phim :<?php echo $row["tenphim"] ?></h3>
        <video width="700" height="400" controls autoplay>
          <source src="<?php echo $row['linkphim']?>" type="video/mp4">
        </video>
      </div>
      <?php require('page/sidebar.php') ?>
</div>
<?php require('page/footer.php')?>