<?php
ob_start();
require_once('common/top.php');
require_once('common/header.php');
require_once('config/connect.php');
?>
<style>
  .testimonial {
    background: none;
    color: #FFF;
    font-size: 16px;
  }

  .testimonial-info:before {
    color: #FFF;
  }

  .author-info {
    color: #FFF;
    display: flex;
    flex-direction: row;
    vertical-align: middle;
    align-items: center;
  }

  .testimonial-avatar img {
    border: 4px solid #FFF;
  }
</style>
<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}'
  style="background-image: url(images/bg/03.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-title-name">
          <h1>Our Clients and Strategic partners </h1>
          <p>Expanding Horizons</p>
        </div>
        <ul class="page-breadcrumb">
          <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
          <li><span>Clients </span> </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- client -->
<section class="page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="section-title text-center">
        <h2 class="title-effect">Our Clients <br> Consulting | Technology | Education | Healthcare</h2>
      </div>
      <div class="row">
        <div class="section-title text-center">
          <h2 class="title-effect">Consulting</h2>
        </div>
        <div class="col-lg-12 col-md-12 mt-10">
          <div class="clients-list border column-5">
            <ul class="list-unstyled">
              <?php 
              $qry = mysqli_query($con,"SELECT image_name, description, category, subcategory FROM clients_db WHERE category='client' AND subcategory='consulting'");
              if(mysqli_num_rows($qry) > 0){
                while ($row = mysqli_fetch_array($qry)) {
            ?>
              <li>
                <img class="img-responsive center-block" src="images/clients/<?php echo $row['image_name']; ?>" alt="">
                <p class="text-center text-muted" style="font-size: 10px;"><?php echo $row['description']; ?></p>
              </li>
              <?php } }?>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="section-title text-center">
          <h2 class="title-effect">Technology</h2>
        </div>
        <div class="col-lg-12 col-md-12">
          <div class="clients-list border column-5">
            <ul class="list-unstyled">
              <?php 
              $qry = mysqli_query($con,"SELECT image_name, description, category, subcategory FROM clients_db WHERE category='client' AND subcategory='Technology'");
              if(mysqli_num_rows($qry) > 0){
                while ($row = mysqli_fetch_array($qry)) {
            ?>
              <li>
                <img class="img-responsive center-block" src="images/clients/<?php echo $row['image_name']; ?>" alt="">
                <p class="text-center text-muted" style="font-size: 10px;"><?php echo $row['description']; ?></p>
              </li>
              <?php }} ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="section-title text-center">
          <h2 class="title-effect">Education</h2>
        </div>
        <div class="col-lg-12 col-md-12">
          <div class="clients-list border column-5">
            <ul class="list-unstyled">
              <?php 
              $qry = mysqli_query($con,"SELECT image_name, description, category, subcategory FROM clients_db WHERE category='client' AND subcategory='Education'");
              if(mysqli_num_rows($qry) > 0){
                while ($row = mysqli_fetch_array($qry)) {
            ?>
              <li>
                <img class="img-responsive center-block" src="images/clients/<?php echo $row['image_name']; ?>" alt="">
                <p class="text-center text-muted" style="font-size: 10px;"><?php echo $row['description']; ?></p>
              </li>
              <?php }} ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="section-title text-center">
          <h2 class="title-effect">Healthcare</h2>
        </div>
        <div class="col-lg-12 col-md-12">
          <div class="clients-list border column-5">
            <ul class="list-unstyled">
              <?php 
              $qry = mysqli_query($con,"SELECT image_name, description, category, subcategory FROM clients_db WHERE category='client' AND subcategory='Healthcare'");
              if(mysqli_num_rows($qry) > 0){
                while ($row = mysqli_fetch_array($qry)) {
            ?>
              <li>
                <img class="img-responsive center-block" src="images/clients/<?php echo $row['image_name']; ?>" alt="">
                <p class="text-center text-muted" style="font-size: 10px;"><?php echo $row['description']; ?> </p>
              </li>
              <?php }} ?>
            </ul>
          </div>
        </div>
      </div>


    </div>
  </div>
</section>

<section class="theme-bg page-section-ptb">
  <div class="container-fluid">
    <div class="section-title text-center ">
      <h3 class="text-white ">Client's Speak </h3>
    </div>
    <div class="row text-center">
      <div class="col-lg-12 col-md-6">
        <div class="owl-carousel" data-nav-dots="true" data-items="2" data-md-items="2" data-sm-items="1"
          data-xs-items="1" data-xx-items="1" data-space="20">
          <div class="item">
            <div class="testimonial left_pos">
              <div class="testimonial-avatar"> <img alt="" src="images/team/20.jpg"> </div>
              <div class="testimonial-info"> Thanks a lot for your superlative efforts. Its highly appericable we wish
                to work with the entire team in future as well soon we will release the scope extension, thanks once
                again for delivering an excellent product - BSafe Application, achieving workers participation in safety
                compliances </div>
              <div class="author-info"> <strong>Sudhir Naithani - Head Safety - Statkraft</strong> <img
                  src="images/thumb.png" style="width:8rem ;margin-left:10px" alt=""> </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial left_pos">
              <div class="testimonial-avatar"> <img alt="" src="images/team/19.jpg"> </div>
              <div class="testimonial-info"> Thanks StratXG for recommending and helping to achieve international
                vegiterin certification this really helped to transform the process which helped us to be selected in
                SWIGGY HALL OF FAME 2019</div>
              <div class="author-info"> <strong>KS Krishnan - Founder - Uttarbhojan</strong> <img src="images/thumb.png"
                  style="width:8rem ;margin-left:10px" alt=""> </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial left_pos">
              <div class="testimonial-avatar"> <img alt="" src="images/team/18.jpg"> </div>
              <div class="testimonial-info">Pleased to see dedication and hard work of StratXG team in market
                penetration strategy and sales for adipo REMISSION 1degreee Hyperthermia and alining to AdipoLABs vision
                of "HEALTHY LIFE-HUMAN BIGGEST DESIRE" </div>
              <div class="author-info"> <strong>Mohamed Jinna - Chairman - AdipoLABs </strong> <img
                  src="images/thumb.png" style="width:8rem ;margin-left:10px" alt=""> </div>
            </div>
          </div>
<!--          <div class="item">-->
<!--            <div class="testimonial left_pos">-->
<!--              <div class="testimonial-avatar"> <img alt="" src="images/team/23.jpg"> </div>-->
<!--              <div class="testimonial-info">I found stratXG team very trustworthy,reliable,highly skilled and thourough professional. they are carrying stratXG core values(Trust, Integrity, Collaboration, Innovation & Goverance)  in real sense. </div>-->
<!--              <div class="author-info"> <strong>Sangita Mehrotra - Head HR - RosyBlue </strong> <img-->
<!--                  src="images/thumb.png" style="width:8rem ;margin-left:10px" alt=""> </div>-->
<!--            </div>-->
<!--          </div>-->
        </div>
      </div>
    </div>
  </div>
</section>
<section class="page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="section-title text-center">
        <h2 class="title-effect">Our Strategic Partners</h2>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="clients-list border column-5">
          <ul class="list-unstyled">
            <li>
              <img class="img-responsive center-block" src="images/clients/05.png" alt="">
              <p class="text-center text-muted" style="font-size: 10px;">Envisioning the Future through Mobile, Web and
                Apps, integrated Mobile Money platform, Fraud protection suite</p>
            </li>
            <!-- <li>
              <img class="img-responsive center-block" src="images/clients/07.png" alt="">
              <p class="text-center text-muted" style="font-size: 10px;">Crises Control is an award-winning Mass
                Notification System and Incident Management platform radically different.</p>
            </li>
            <li>
              <img class="img-responsive center-block" src="images/clients/08.png" alt="">
              <p class="text-center text-muted" style="font-size: 10px;">Bynry makes it easy for you to deliver superior
                experiences across Consumer Services, Metering and Assets</p>
            </li>
            <li>
              <img class="img-responsive center-block" src="images/clients/09.png" alt="">
              <p class="text-center text-muted" style="font-size: 10px;">SeaportAI is cutting edge Analytics, Artificial
                Intelligence Company. We strive to simplify advanced technology for customers</p>
            </li>
            <li>
              <img class="img-responsive center-block" src="images/clients/10.jpg" alt="">
              <p class="text-center text-muted" style="font-size: 10px;">Cloud based Web-enabled HRMS suite, easy to
                customize, Recruitment, EJoin, Document Management, L&amp;D, Travel, Payroll, Reporting &amp; Analysis
              </p>
            </li> -->
            <li>
              <img class="img-responsive center-block" src="images/clients/10.png" alt="">
              <p class="text-center text-muted" style="font-size: 10px;">mFilterIt is a global Fraud Detection,
                Prevention Company, providing neutral, platform agnostic fraud detection for brand and marketing </p>
            </li>
            <li>
              <img class="img-responsive center-block" src="images/clients/11.png" alt="">
              <p class="text-center text-muted" style="font-size: 10px;">UNFYD® COMPASS helps you run your digital
                ecosystem with ease thus enhancing relationships with startup, SMB or an enterprise. </p>
            </li>
            <li>
              <img class="img-responsive center-block" src="images/clients/12.png" alt="">
              <p class="text-center text-muted" style="font-size: 10px;">DevAppSol an IOT company working on new age
                technologies LPWAN ,BLE and AR with successful installations across Different Verticals.</p>
            </li>
            <!-- <li>
              <img class="img-responsive center-block" src="images/clients/14.png" alt="">
              <p class="text-center text-muted" style="font-size: 10px;">Vijña Labs(Manipal Group Company) is focused on
                Artificial Intelligence (AI), Internet of Things (IoT) platforms and solutions.</p>
            </li>
            <li>
              <img class="img-responsive center-block" src="images/clients/15.png" alt="">
              <p class="text-center text-muted" style="font-size: 10px;">We are team of good storyteller, designers,
                engineers, straightest, and most importantly digital marketing experts.</p>
            </li>
            <li>
              <img class="img-responsive center-block" src="images/clients/20.jpg" alt="">
              <p class="text-center text-muted" style="font-size: 10px;">InfiAmp is the Research and Development company focus on the solar, wind and small hydro energy products with an aim to amplifying the use of renewable energy.</p>
            </li> -->
            <li>
              <img class="img-responsive center-block" src="images/clients/42.jpg" alt="">
              <p class="text-center text-muted" style="font-size: 10px;">The IBBF is an organisation aiming to
                strengthen trade and business relations between the UK and India, attract investments and boost small
                and medium enterprises.​</p>
            </li>
            <li>
              <img class="img-responsive center-block" src="images/clients/32.jpg" alt="">
              <p class="text-center text-muted" style="font-size: 10px;">Full-stack BI & AI-Driven Analytics Built on
                strong foundations, BIRD is the fastest BigData Analytics platform</p>
            </li>
            <li>
              <img class="img-responsive center-block" src="images/clients/35.png" alt="">
              <p class="text-center text-muted" style="font-size: 10px;">ASR Ventures although has vast experience in
                Technology and renewable industry, but its technology agnostic and unbiased nature</p>
            </li>
            <li>
              <img class="img-responsive center-block" src="images/clients/36.png" alt="">
              <p class="text-center text-muted" style="font-size: 10px;">Crown Interactive is a technology software
                company with its head office in Nigeria.We are dedicated to the provision of innovative business and
                system process solutions to customer around the world</p>
            </li>
            <li>
              <img class="img-responsive center-block" src="images/clients/37.png" alt="">
              <p class="text-center text-muted" style="font-size: 10px;">Voice Snap. This is an Internal App Exclusive
                to Voice Snap Employees to keep track. Lets Huddle. </p>
            </li>
            <li>
              <img class="img-responsive center-block" src="images/clients/40.png" alt="">
              <p class="text-center text-muted" style="font-size: 10px;">Perpetuuiti is focused on enabling Digital
                Transformation for companies by building futuristic software products.</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


<?php require_once('common/footer.php'); ?>
<?php require_once('common/bottom.php'); ?>