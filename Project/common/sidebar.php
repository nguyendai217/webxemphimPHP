<?php 
include('./lib_db.php');
$sql= "Select*from theloai limit 0,8";
$result= select_list($sql);

$sql1="select*from phim ORDER by soluotxem desc limit 0,4";
$result1= select_list($sql1);

$sql2="select*from phim ORDER by id_phim desc limit 0,4";
$result2= select_list($sql2);
?>
<div class="main-right">
  <div class="theloai">
    <div class="header-tl">
      <span>THỂ LOẠI</span>
    </div>
    <ul>
    <?php foreach($result as $rs)
    {?>
      <li><img src="./image/icon-theloai.png" alt=""><a class="hvr-forward" href="theloai.php?id_theloai=<?php echo $rs["id_theloai"] ?>"><?php echo $rs["theloai"] ?></a></li>
    <?php
    }?>
    </ul>
  </div><!-- End div the loai -->

  <div class="group-phim-right">
    <div class="header-right">
      <img src="image/phimxemnhieu.png" alt="" />
    </div>
    <?php foreach($result1 as $rs1)
    {?>
    <div class="phim-right">
      <a href="thongtinphim.php?id_phim=<?php echo $rs1["id_phim"] ?>">
      <img src="admin/<?php echo $rs1["anhminhhoa"] ?> " alt="" class="hvr-shrink">
      </a>
      <div class="thongtinphim-right">
        <a href="thongtinphim.php?id_phim=<?php echo $rs1["id_phim"] ?>"><?php echo $rs1["tenphim"]?></a><br>
        <span>Views: <?php echo $rs1["soluotxem"]?></span><br>
        <span>Thời gian: <?php echo $rs1["thoiluongphim"]?> </span>
      </div>
    </div>
    <?php
    }?>
  </div><!-- End div phim -->

  <div class="group-phim-right">
    <div class="header-right">
      <img src="image/phimsapchieu.png" alt="" />
    </div>
    <?php foreach($result2 as $rs2)
    { ?>
    <div class="phim-right">
      <a href="thongtinphim.php?id_phim=<?php echo $rs2["id_phim"] ?>">
      <img src="admin/<?php echo $rs2["anhminhhoa"] ?> " alt="" class="hvr-shrink">
      </a>
      <div class="thongtinphim-right">
        <a href="thongtinphim.php?id_phim=<?php echo $rs2["id_phim"] ?>"><?php echo $rs2["tenphim"]?></a><br>
        <span>Views: <?php echo $rs2["soluotxem"]?></span><br>
        <span>Thời gian: <?php echo $rs2["thoiluongphim"]?> </span>
      </div>
    </div>
    <?php
    }?>
  </div><!-- End div phim -->

  <div class="timphim">
    <img src="image/timphim.png" alt="" style="height: 30px;">
    <table>
      <tr>
        <td>
          <ul>
            <li> <img src="image/icon-tag1.png" alt=""><a href="">Marvel</a></li>
            <li> <img src="image/icon-tag1.png" alt=""><a href="">Kinh dị</a></li>
            <li> <img src="image/icon-tag1.png" alt=""><a href="">Doreamon</a></li>
          </ul>
        </td>
        <td>
          <ul>
            <li> <img src="image/icon-tag1.png" alt=""><a href="">Marvel</a></li>
            <li> <img src="image/icon-tag1.png" alt=""><a href="">Kinh dị</a></li>
            <li> <img src="image/icon-tag1.png" alt=""><a href="">Doreamon</a></li>
          </ul>
        </td>
      </tr>
    </table>
  </div>
</div>