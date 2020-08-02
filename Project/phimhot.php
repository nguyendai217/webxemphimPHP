<?php
include('common/header.php');
include('common/menu.php');
include('common/slider.php');
include('lib_db.php');

$limit = 12;
$page = isset($_REQUEST["page"]) ? $_REQUEST["page"] : 0;
if ($page < 1) $page = 1;
$offset = ($page - 1) * $limit;
$baseUrl = "phimhot.php?page=";

$sql1 = "select count(*) as count from phim";
$rs = select_one($sql1);
$total = $rs['count'];
$numPage = ceil($total / $limit);

$sql = "select * from phim ORDER by soluotxem desc limit $offset,$limit";
$result = select_list($sql);
?>
<div class="main">
  <div class="main-left">
    <div class="group-phim">
      <div class="imgheader">
        <h5 style="margin: 5px 5px 5px 5px;"> <i class="fa fa-film" aria-hidden="true"></i> PHIM HOT</h5>
      </div>
      <?php foreach ($result as $rs) { ?>
        <div class="motphim">
          <a href="thongtinphim.php?id_phim=<?php echo $rs['id_phim'] ?>"> <img src="admin/<?php echo $rs["anhminhhoa"] ?>" alt="" class="hvr-shrink" /></a>
          <div class="thongtin">
            <a href=""><?php echo $rs["tenphim"] ?></a><br />
            <p>Thời gian: <?php echo $rs["thoiluongphim"] ?></p>
          </div>
          <div class="viewphim">
            <p>Views: <?php echo $rs["soluotxem"] ?></p>
          </div>
        </div>
      <?php } ?>


      <div class="container" style="margin-left: 310px; float: left; margin-top: 8px;">
        <ul class="pagination">
          <?php if ($numPage > 1) for ($i = 1; $i <= $numPage; $i++) { ?>
            <li class="page-item <?php if ($page == $i) echo "active" ?> "><a class="page-link" href="<?php echo $baseUrl . $i ?>"><?php echo $i ?></a></li>
          <?php } ?>
        </ul>
      </div>

    </div>

  </div>

  <?php include('common/sidebar.php'); ?>
</div>
<?php
include('common/footer.php');
?>