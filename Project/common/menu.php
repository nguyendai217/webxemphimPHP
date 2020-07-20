<?php
include("./lib_db.php");
$sql = "Select * from theloai"; 
$result = select_list($sql);
?>
<div class="menu-flim">
  <nav class="menu">
    <ul>
      <li class="current-item"><a href="index.php">Trang chủ</a></li>
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
      <li><a href="#">Năm sản xuất<span class="arrow">&#9660;</span></a>
        <ul class="sub-menu">
          <li><a href="#">2020</a></li>
          <li><a href="#">2019</a></li>
          <li><a href="#">2018</a></li>
          <li><a href="#">2017</a></li>
        </ul>
      </li>
      <li><a href="#">Quốc gia<span class="arrow">&#9660;</span></a>
        <ul class="sub-menu">
          <li><a href="#">Phim Mỹ</a></li>
          <li><a href="#">Phim Trung Quốc</a></li>
          <li><a href="#">Phim Việt Nam</a></li>
          <li><a href="#">Phim Hàn Quốc</a></li>
        </ul>
      </li>
      <li><a href="phimhot.php">Phim Hot</a></li>
      <li><a href="lienhe.php">Liên hệ</a></li>
    </ul>
  </nav>
</div>