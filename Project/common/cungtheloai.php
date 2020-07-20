<?php
include("./lib_db.php");
$phim = isset($_REQUEST["id_phim"]) ? $_REQUEST["id_phim"] : 0;

$tl= "select id_theloai from phim where id_phim=$phim";
$kq= select_one($tl);
$sql = "Select *from phim,theloai where phim.id_theloai=theloai.id_theloai  and theloai.id_theloai={$kq["id_theloai"]} ORDER by soluotxem desc limit 0,4";
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
                <a href="thongtinphim.php?id_phim=<?php echo $rs["id_phim"] ?>"> <img src="admin/<?php echo $rs["anhminhhoa"] ?>" alt="" class="hvr-shrink" /></a>
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