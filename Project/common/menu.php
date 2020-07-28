<?php
include("./lib_db.php");
$sql = "Select * from theloai limit 0,6"; 
$result = select_list($sql);
?>
<div class="menu-flim">
  <nav class="menu">
    <ul>
      <li class="current-item"><a href="index.php"><i class="fa fa-home"></i> Trang chủ</a></li>
      <li>
        <a href="#">Thể loại<span class="arrow">&#9660;</span></a>
        <ul class="sub-menu">
          <?php foreach($result as $rs)
          {?>
          <li><a href="theloai.php?id_theloai=<?php echo $rs["id_theloai"] ?>"><?php echo $rs["theloai"] ?></a></li>
          <?php
        }?>
        </ul>
      </li>
      <li><a href="phimhot.php">Phim hot</a></li>
      <li><a href="phimmoi.php">Phim mới</a></li>
      <li><a href="lienhe.php">Liên hệ</a></li>
    </ul>
  </nav>
</div>