<?php 
include('common/header.php');
include('common/menu.php');
include('common/slider.php');
include('lib_db.php');
$sql="select * from phim ORDER by soluotxem desc limit 0,12";
$result= select_list($sql);
?>
<div class="main">
  <div class="main-left">
    <div class="group-phim">
      <div class="imgheader">
        <h5 style="margin: 5px 5px 5px 5px  ;"> <i class="fa fa-film" aria-hidden="true"></i> PHIM HOT</h5>
      </div>
      <?php foreach($result as $rs) {?>
        <div class="motphim">
          <a href="thongtinphim.php?id_phim=<?php echo $rs['id_phim'] ?>"> <img src="admin/<?php echo $rs["anhminhhoa"] ?>" alt="" class="hvr-shrink" /></a>
          <div class="thongtin">
            <a href=""><?php echo $rs["tenphim"] ?></a><br />
            <p>Thời gian: <?php echo $rs["thoiluongphim"] ?></p>
          </div>
          <div class="viewphim">
            <p>Views: <?php echo $rs["soluotxem"]?></p>
          </div>
        </div>
      <?php }?>
    </div>
  </div>
    <?php include('common/sidebar.php'); ?>
  </div>
  <?php
  include('common/footer.php');
  ?>