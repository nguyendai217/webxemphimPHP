<?php
include("./lib_db.php");
$sql = "Select * from theloai limit 0,5"; 
$result = select_list($sql);
?>
<div class="footer">
  <div class="footer-left">
    <div class="logo-footer">
      <img src="image/logo.png" alt="">
    </div>
    <div class="clear-both"></div>
    <span>Xemphimso.com</span><br>
    <span>Xem phim chất lượng cao.</span>
  </div>
  <div class="footer-center">
    <div class="hd-footer">
      <ul>
        <li class="thongtin-footer">Thể Loại</li>
        <?php foreach($result as $rs)
          {?>
          <li><a href="theloai.php?id_theloai=<?php echo $rs["id_theloai"] ?>"><?php echo $rs["theloai"] ?></a></li>
          <?php
        }?>
      </ul>
    </div>
    <div class="hd-footer">
      <ul>
        <li class="thongtin-footer">Quốc gia</li>
        <li><a href="">Phim Việt Nam</a></li>
        <li><a href="">Phim Hàn Quốc</a></li>
        <li><a href="">Phim Mỹ</a></li>
        <li><a href="">Phim Trung Quốc</a></li>
        <li><a href="">Phim Thái Lan</a></li>
      </ul>
    </div>
    <div class="hd-footer">
      <ul>
        <li class="thongtin-footer">About</li>
        <li><a href="">Giới Thiệu</a></li>
        <li><a href="">Liên Hệ</a></li>
        <li><a href="">Báo Cáo</a></li>
        <li><a href="">Hợp Tác</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-right">
    <h5>Phản hồi</h5>
    <div class="form-phanhoi">
      <form action="">
        <span>Email</span>
        <input type="text" placeholder="Email"><br>
        <span>Nội dung</span>
        <input type="text" placeholder="Nội dung">
        <br>
        <input type="submit" value="Phản hồi" style="width:160px; height: 26px; margin-top: 6px; margin-left: 10px;">
      </form>
    </div>
  </div>
</div>
</div>
</body>
</html>