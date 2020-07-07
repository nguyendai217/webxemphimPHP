<?php
include("./lib_db.php");
$sql = "Select *from phim,theloai where phim.id_theloai=theloai.id_theloai  and theloai.id_theloai=$_get ORDER by soluotxem desc limit 0,4";
$result = select_list($sql);
?>
<div class="phimcungtheloai">
    <div class="group-phim">
        <div class="imgheader">
            <img src="image/phimlienquan.png" alt="" />
            <a href="">XEM THÊM</a>
        </div>
        <?php
        foreach ($result as $rs) {
        ?>
            <div class="motphim">
                <a href="thongtinphim.php?id_phim=<?php echo $rs["id_phim"] ?>"> <img src="<?php echo $rs["anhminhhoa"] ?>" alt="" class="hvr-shrink" /></a>
                <div class="thongtin">
                    <a href=""><?php echo $rs["tenphim"] ?></a><br />
                    <p>Thời gian: <?php echo $rs["thoiluongphim"] ?></p>
                </div>
                <div class="viewphim">
                    <p> Views: <?php echo $rs["soluotxem"] ?></p>
                </div>
            </div>
        <?php
        } ?>
    </div>
</div>