<?php
require_once('config/connect.php');
require_once('common/top.php');
require_once('common/header.php');
?>
<!--=================================
page-title-->
<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}'
  style="background-image: url(images/bg/14.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-title-name">
          <h1>Gallery of events</h1>
          <p>Empowering Individuals to respond to opportunities, Continuously Learn to create a Learning Organization
            with core objectives - Evolutionary Growth and Constant Innovation</p>
        </div>
        <ul class="page-breadcrumb">
          <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
          <li><span>Gallery </span> </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="white-bg masonry-main page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="isotope-filters">
          <button data-filter=".ground">Team At Ground Zero</button>
          <button data-filter=".work">Work &amp; Fun</button>
          <button data-filter=".learning">Learning &amp; Skills Enhancement</button>
          <button data-filter=".customer">Happy Customer</button>
          <button data-filter=".video">Video</button>
          <button data-filter="" class="active">All</button>
        </div>
        <div class="masonry columns-4 popup-gallery" style="position: relative; height: 881.25px;">
          <div class="grid-sizer"></div>
          <?php
          $qry = mysqli_query($con, "SELECT * FROM image_gallery WHERE type='image'");
          if ($row = mysqli_num_rows($qry) > 0) {
            while ($img = mysqli_fetch_array($qry)) {
              $iname = $img['name'];
              $iimage = $img['image_name'];
              $idescription = $img['description'];
              $icategory = $img['category'];
              ?>
          <div class="masonry-item <?php if (empty($icategory)) { } else {echo $icategory;} ?>"
            style="position: absolute; left: 0%; top: 0px;">
            <div class="portfolio-item">
              <img src="images/gallery/<?= $iimage; ?>.jpg" alt="">
              <div class="portfolio-overlay">
               <h4 class="text-white"><?= $iname; ?></h4>
                <span class="text-white"><?= $idescription; ?></span>
              </div>
              <a class="popup portfolio-img" href="images/gallery/<?= $iimage; ?>.jpg"><i
                  class="fa fa-arrows-alt"></i></a>
            </div>
          </div>
          <?php }
        }  
        $qry1 = mysqli_query($con,"SELECT * FROM image_gallery WHERE type='video'");
          if ($row = mysqli_num_rows($qry1) > 0) {
            while ($img = mysqli_fetch_array($qry1)) {
              $iname = $img['name'];
              $iimage = $img['image_name'];
              $idescription = $img['description'];
              $icategory = $img['category'];
        ?>
          <div class="masonry-item <?php if (empty($icategory)) { } else {echo $icategory;} ?>"
            style="position: absolute; left: 0%; top: 0px;">
            <div class="popup-video-image popup-gallery">
              <video class="img-responsive" controls>
                <source src="images/gallery/<?= $iimage; ?>.mp4" type="video/mp4"></video>
              <a class="popup-youtube" href="images/gallery/<?= $iimage; ?>.mp4"> <i class="fa fa-play"></i> </a>
            </div>
            <div class="portfolio-item">

            </div>
          </div>
          <?php }} ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require_once('common/footer.php'); ?>
<?php require_once('common/bottom.php'); ?>