<?php include('common/header.php') ?>
<?php include('common/menu.php') ?>
<?php include('common/slider.php') ?>
<?php include('lib_db.php') ?>
<?php
$phim = isset($_REQUEST["id_phim"]) ? $_REQUEST["id_phim"] : 0;
$sql = "Select *from phim,theloai where phim.id_theloai=theloai.id_theloai and phim.id_phim={$phim}";
$row = select_one($sql);

?>
<div class="main">
    <div class="main-left">
        <div class="chitietphim">
            <div class="imgheader">
                <h5> <i class="fa fa-file-text-o" aria-hidden="true"></i>THÔNG TIN PHIM</h5>
            </div>
            <div class="chitiet">
                <div class="img-phim">
                    <img src="admin/<?php echo $row["anhminhhoa"] ?>">
                    <div class="clear-both"></div>
                    <div class="play">
                        <a href="xemphim.php?id_phim=<?php echo $row["id_phim"] ?>"><img src="image/xemphim.png" alt=""></a>
                    </div>
                </div>

                <div class="thongtinphim">
                    <h4 style="margin-top: 5px;margin-left: 10px;">Tên phim: <?php echo $row["tenphim"] ?></h4>
                    <span>Diễn Viên: <?php echo $row["dienvien"] ?></span><br>
                    <span>Thời gian: <?php echo $row["thoiluongphim"] ?></span><br>
                    <span>Views: <?php echo $row["soluotxem"] ?></span><br>
                    <span>Thể Loại: <?php echo $row["theloai"] ?></span><br>
                    <span>Đánh giá: 4 sao</span><br>
                    <span>Quốc gia: <?php echo $row["quocgia"] ?></span><br>
                    <span>Độ phân giải: FullHD</span><br>
                    <span>Năm phát hành: <?php echo $row["namsanxuat"] ?></span><br>
                    <span>Ngôn ngữ: Phụ đề</span><br>
                    <span>Tags : <?php echo $row["tags"] ?></span><br>
                </div>
            </div>
        </div>

        <div class="noidungphim">
            <div class="imgheader">
                <img src="image/noidungphim.png" alt="" />
            </div>
            <div class="ndphim">
                <p><?php echo $row["thongtinphim"] ?></p>
                <img src="admin/<?php echo $row["imagenoidung"] ?>" alt="" class="imgnd">
            </div>
            <div class="binhluan">
                Bình luận
            </div>
            <?php include("common/cungtheloai.php")?>
        </div>
    </div>
    <?php include("common/sidebar.php") ?>
</div>
<?php require('common/footer.php'); ?>