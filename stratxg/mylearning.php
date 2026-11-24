<?php
require_once('config/connect.php');
require_once('common/top.php');
require_once('common/header.php');
?>
<style>
  .section-title .subtitle {
    font-size: 16px;
  }

  .blog-entry .blog-detail {
    height: 200px;
  }
</style>
<!--=================================
page-title-->
<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(images/bg/04.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-title-name">
          <h1>Welcome to stratXG Academy</h1>
          <p>One stop solution for digital & Industries Specific Learning & Development</p>
        </div>
        <ul class="page-breadcrumb">
          <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
          <li><span>Academy </span> </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="page-section-ptb theme-bg">
  <div class="container ">
    <div class="row ">
      <div class="col-lg-3 col-md-3 col-sm-3 xs-mb-30">
        <div class=" ">
          <div class="feature-icon">
            <span aria-hidden="true" class="fa fa-thumbs-o-up fa-4x text-white"></span>
          </div>
          <h4 class="text-white pt-20">Functional </h4>
          <p class="text-white">This is Customized Comprehensive Capability building
            programs on
            1. Growth <br>
            2. Operation <br>
            3. Digital<br>
            4. Analytics<br>
            5. Leadership Value Building <br>
            6. Organization Culture <br>
            7. Creative Thinking <br>
            8. Emotional Intelligence

          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 xs-mb-30">
        <div class=" ">
          <div class="feature-icon">
            <span aria-hidden="true" class="fa fa-mobile fa-4x text-white"></span>
          </div>
          <h4 class="text-white pt-20">Digital </h4>
          <p class="text-white">Creating and leveraging fundamental logical and technical
            knowledge right from Design Thinking stage to Implementation<br>
            1. Understanding Digital World <br>
            2. Design Thinking<br>
            3. Digital Marketing<br>
            4. Digital Fraud<br>
            5. Change management for Digital<br>
            6. Industry 4.0 Vs Digital</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class=" ">
          <div class="feature-icon">
            <span aria-hidden="true" class="fa fa-lightbulb-o fa-4x text-white"></span>
          </div>
          <h4 class="text-white pt-20">Innovation </h4>
          <p class="text-white">To build capabilities within the organization where each
            one is innovating and contributing for Growth<br>
            1. Lean - To enable large scale transformation<br>
            2. Six Sigma &amp; Innovation – For sustainable defect free<br>
            3. Agile – Speed and Stability<br>
            4. Project Management – Cost, Time &amp; Budget
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class=" ">
          <div class="feature-icon">
            <span aria-hidden="true" class="fa fa-lock fa-4x text-white"></span>
          </div>
          <h4 class="text-white pt-20">Compliance </h4>
          <p class="text-white">Taking compliance beyond regulatory, infusing compliances
            into the culture and every corner of the business.<br>
            1. ISO compliance – entire family<br>
            2. Compliances for Hospital and health care<br>
            3. Environment, Health & Safety
            4. Legal &amp; Regulatory<br>
            5. Business Specific customized compliance awareness</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="page-section-ptb ">
  <div class="container ">
    <div class="row">
      <?php
      $qry = "SELECT id, title, description, cimage from add_course_db ORDER BY title ASC";
      $run = mysqli_query($con, $qry);
      if (mysqli_num_rows($run) > 0) {
        while ($row = mysqli_fetch_array($run)) {
          $id = $row['id'];
          $title = $row['title'];
          $newtitle = substr($title, 0, 15);
          $cimage = $row['cimage'];
          ?>
          <div class="col-lg-3 col-md-3 col-sm-3">
            <form method="post">

            </form>
            <div class="blog-entry mb-50">
              <div class="entry-image clearfix">
                <img class="img-responsive" src="admin/uploads/<?php echo $cimage; ?>" alt="">
              </div>
              <div class="blog-detail">
                <div class="section-title  mb-10">
                  <a class="subtitle" href="#"><?php echo $title; ?></a>
                </div>
                <p><a href="#">Author</a></p>
                <div class="entry-share clearfix">
                  <div class="entry-button">
                    <a class="button arrow" href="details_page.php?course=<?php echo $id; ?>">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php }
      } ?>
    </div>
  </div>
</section>
<?php require_once('common/footer.php'); ?>
<script>
  $(document).ready(function() {
    $('[data-toggle="popover"]').popover();
  });
</script>
<?php require_once('common/bottom.php'); ?>