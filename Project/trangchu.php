<?php
include("lib_db.php");
$sql1 = "select * from phim limit 8 ";
$row= select_list($sql1);

$sql2 = "select * from phim limit 8 ";
$row2= select_list($sql2);

$sql3 = "select * from phim limit 4 ";
$row3= select_list($sql3);
?>
<div class="main">
  <div class="main-left">
    <div class="group-phim">
      <div class="imgheader">
        <img src="image/phimxemnhieu.png" alt="" />
        <a href="">XEM THÊM</a>
      </div>
      <?php foreach($row as $rs1) {?>
        <div class="motphim">
          <a href="thongtinphim.php?id_phim=<?php echo $rs1['id_phim'] ?>"> <img src="<?php echo $rs1["anhminhhoa"] ?>" alt="" class="hvr-shrink" /></a>
          <div class="thongtin">
            <a href=""><?php echo $rs1["tenphim"] ?></a><br />
            <p>Thời gian: <?php echo $rs1["thoiluongphim"] ?></p>
          </div>
          <div class="viewphim">
            <p>Views: <?php echo $rs1["soluotxem"]?></p>
          </div>
        </div>
      <?php }?>
    </div>
    <div class="group-phim">
      <div class="imgheader">
        <img src="image/phimhot.png" alt="" />
        <a href="">XEM THÊM</a>
      </div>
      <?php foreach($row2 as $rs2) {?>
        <div class="motphim">
          <a href="thongtinphim.php?id_phim=<?php echo $rs2['id_phim'] ?>"> <img src="<?php echo $rs2["anhminhhoa"] ?>" alt="" class="hvr-shrink" /></a>
          <div class="thongtin">
            <a href=""><?php echo $rs2["tenphim"] ?></a><br />
            <p>Thời gian: <?php echo $rs2["thoiluongphim"] ?></p>
          </div>
          <div class="viewphim">
            <p>Views: <?php echo $rs2["soluotxem"]?></p>
          </div>
        </div>
      <?php }?>
    </div>

    <div class="group-phim">
      <div class="imgheader">
        <img src="image/phimle.png" alt="" />
        <a href="">XEM THÊM</a>
      </div>
      <?php foreach($row3 as $rs3) {?>
        <div class="motphim">
          <a href="thongtinphim.php?id_phim=<?php echo $rs3['id_phim'] ?>"> <img src="<?php echo $rs3["anhminhhoa"] ?>" alt="" class="hvr-shrink" /></a>
          <div class="thongtin">
            <a href=""><?php echo $rs3["tenphim"] ?></a><br />
            <p>Thời gian: <?php echo $rs3["thoiluongphim"] ?></p>
          </div>
          <div class="viewphim">
            <p>Views: <?php echo $rs3["soluotxem"]?></p>
          </div>
        </div>
      <?php }?>
    </div>
  </div>
    <?php include('page/sidebar.php'); ?>
  </div>