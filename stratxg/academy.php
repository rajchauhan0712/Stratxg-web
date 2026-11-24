
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
    height: 166px;
  }

  .blog-entry {
    height: 405px;
  }
  
  .testimonial.left_pos {
	background: #361134;
	color: #fff;
}
.author-info {
	color: #fff;
}
.author-info strong {
	float: left;
}
.image_tite_d {
    text-align: right !important;
	font-style: italic;
	font-size: smaller;
    color: white;
}

.image_tite_d1 {
    text-align: right !important;
	font-style: italic;
	font-size: smaller;
    color: white;
}

.image_tite_d2 {
    text-align: right !important;
	font-style: italic;
	font-size: smaller;
    color: white;
}

.image_tite_d3 {
    text-align: right !important;
	font-style: italic;
	font-size: smaller;
    color: white;
}

.image_tite_d4 {
    text-align: right !important;
	font-style: italic;
	font-size: smaller;
    color: white;
}

.image_tite_d5 {
    text-align: right !important;
	font-style: italic;
	font-size: smaller;
    color: white;
}

.testimonial-info::before {
	color: #fff !important;
}
.testimonial-avatar img {
	border: 4px solid #fff !important;
}
.testimonial.left_pos {
	padding: 0px !important;
}
.back_ground {
    /*background: #262626;
    height: 405px !important;*/

}

.back_ground1 {
    /*background: #262626;
    height: 405px !important;*/

}

.back_ground2 {
    /*background: #262626;
    height: 405px !important;*/

}

.back_ground3 {
   /* background: #262626;
    height: 405px !important;*/

}

.back_ground4 {
    /*background: #262626;
    height: 405px !important;*/

}

.back_ground5{
    /*background: #262626;
    height: 405px !important;*/

}

.img_student_hwe
{
 	width: 66% !important;
	height: 120px;
	margin-bottom: 4%;
	margin-left: 31%;
	margin-top: 93%;
}
.img_student_hwe1
{
 	width: 66% !important;
	height: 120px;
	margin-bottom: 4%;
	margin-left: 10%;
	margin-top: 93%;
}

.img_student_hwe2
{
 	width: 66% !important;
	height: 120px;
	margin-bottom: 4%;
	margin-left: 31%;
	margin-top: 93%;
}

.img_student_hwe3
{
 	width: 66% !important;
	height: 120px;
	margin-bottom: 4%;
	margin-left: 10%;
	margin-top: 93%;
}

.img_student_hwe4
{
 	width: 66% !important;
	height: 120px;
	margin-bottom: 4%;
	margin-left: 31%;
	margin-top: 93%;
}

.img_student_hwe5
{
 	width: 66% !important;
	height: 120px;
	margin-bottom: 4%;
	margin-left: 31%;
	margin-top: 93%;
}

@media (min-width: 320px) and (max-width: 767px) {
    .testimonial-info img {
	width: 210px !important;
}
.testimonial.left_pos
{
    margin-left:unset !important;
}
.img_student_hwe
{
 	width: 120px !important;
	height: 120px;
	margin-bottom: 4%;
	margin-left: 30% !important;
	margin-top: unset !important;
}
.img_student_hwe1
{
 	width: 120px !important;
	height: 120px;
	margin-bottom: 4%;
	margin-left: unset !important;
	margin-top: unset !important;
}
.img_student_hwe2
{
 	width: 120px !important;
	height: 120px;
	margin-bottom: 4%;
	margin-left: 25% !important;
	margin-top: unset !important;
}
.img_student_hwe3
{
 	width: 120px !important;
	height: 120px;
	margin-bottom: 4%;
	margin-left: unset !important;
	margin-top: unset !important;
}
.img_student_hwe4
{
 	width: 120px !important;
	height: 120px;
	margin-bottom: 4%;
	margin-left: 25% !important;
	margin-top: unset !important;
}
.img_student_hwe5
{
 	width: 120px !important;
	height: 120px;
	margin-bottom: 4%;
	margin-left: 20% !important;
	margin-top: unset !important;
}
.back_ground {
    /*background: #262626;
    height: 630px !important;*/

}
.back_ground1 {
    /*background: #262626;
    height: 590px !important;*/

}

.back_ground2 {
    /*background: #262626;
    height: 730px !important;*/

}

.back_ground3 {
    /*background: #262626;
    height: 630px !important;*/

}

.back_ground4 {
    /*background: #262626;
    height: 690px !important;*/

}

.back_ground5 {
    /*background: #262626;
    height: 590px !important;*/

}


}
.back_ground {
    /*background: #262626;
    height: auto;*/
	
	
}
.col-md-4.image_mag {
   
	float: right;
	padding-right: 5%;
	display:block;
}
.image_tite_d {
    text-align: center !important;
	font-style: italic;
	font-size: smaller;
    color: white;
}
.image_tite_d1 {
    text-align: center !important;
	font-style: italic;
	font-size: smaller;
    color: white;
    margin-left:-30% !important;
}
.image_tite_d2 {
    text-align: center !important;
	font-style: italic;
	font-size: smaller;
    color: white;
    margin-left:10% !important;
}
.image_tite_d3 {
    text-align: center !important;
	font-style: italic;
	font-size: smaller;
    color: white;
    margin-left:-30% !important ;
}
.image_tite_d4 {
    text-align: center !important;
	font-style: italic;
	font-size: smaller;
    color: white;
}
.image_tite_d5 {
    text-align: center !important;
	font-style: italic;
	font-size: smaller;
    color: white;
}

.image_tite_h{
	color: #acf235;
	margin-top: 1%;
}
.content_div {
    margin-left: 8%;
    font-style: italic;
    font-size: smaller;
    text-align: inherit;
	color: white;
}

.row.row_class {
    padding: 2%;
}
.title_div {
    padding: 10%;
	padding-bottom: 0%;
}
.image_mag_mobile {
	display:none !important;
}

@media (min-width: 320px) and (max-width: 480px) {
  
 .col-md-4.image_mag {
	 display:none !important;
}
.image_mag_mobile {
	display:block !important;
	text-align: center !important;
	padding-top: 6% !important;
	height:auto;
}
.img_student_hwe1_mobile{
	width: 66% !important;
	height: 120px;
}
.image_class {
   margin-left: 33% !important;
}
 
 .image_tite_d1 {
    font-style: italic;
    font-size: smaller;
    color: white;
}
 
  
}







</style>
<!--================================= page-title-->
<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}'
  style="background-image: url(images/bg/04.jpg);">
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
          <p class="text-white">This is Customized Comprehensive Capability building programs on
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
    <div class="row mt-70">
      <div class="col-lg-12 col-md-12 text-center">
        <h4 class="mb-30">Registrations </h4>
      </div>
      <div class="col-lg-12 col-md-12 text-center">
        <div class="tab round">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#research-07" data-toggle="tab">  India</a>
            </li>
            <li><a href="#design-07" data-toggle="tab">  Bangladesh</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade in active" id="research-07">
              <div class="row">
                <!--<div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="blog-entry mb-50">
                    <div class="entry-image clearfix">
                      <img class="img-responsive" src="images/nosocomial.png" alt="">
                    </div>
                    <div class="blog-detail">
                      <div class="entry-title mb-10">
                        <a href="nosocomial.php">Nosocomial</a>
                      </div>
                      <div class="entry-meta mb-10">
                        <ul>
                          <li><a href="#"><i class="fa fa-calendar-o"></i> 6 June 2020</a></li>
                        </ul>
                      </div>
                      <div class="entry-content">

                      </div>
                      <div class="entry-share clearfix">
                        <div class="entry-button">
                          <a class="button arrow" href="nosocomial.php">Register<i class="fa fa-angle-right"
                              aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>-->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="blog-entry mb-50">
                    <div class="entry-image clearfix">
                      <img class="img-responsive" src="images/Free-Lean-Six-Sigma-Training.jpg" alt="">
                    </div>
                    <div class="blog-detail">
                      <div class="entry-title mb-10">
                        <a href="leanYellowBelt.php">Lean Six Sigma <br> (Yellow Belt) </a>
                      </div>
                      <div class="entry-meta mb-10">
                        <ul>
                          <li><a href="#"><i class="fa fa-calendar-o"></i> </a></li>
                        </ul>
                      </div>
                     
                      <div class="entry-share clearfix">
                        <div class="entry-button">
                          <a class="button arrow" href="leanYellowBelt.php"></i>Register <i class="fa fa-angle-right"
                              aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="blog-entry mb-50">
                    <div class="entry-image clearfix">
                      <img class="img-responsive" src="images/green.jpg" alt="">
                    </div>
                    <div class="blog-detail">
                      <div class="entry-title mb-10">
                        <a href="leansixsigmagreen.php">Lean Six Sigma Green Belt</a>
                      </div>
                      <div class="entry-meta mb-10">
                        <ul>
                          <li><a href="#"><i class="fa fa-calendar-o"></i> </a></li>
                        </ul>
                      </div>

                      <div class="entry-share clearfix">
                        <div class="entry-button">
                          <a class="button arrow" href="leansixsigmagreen.php">Register<i class="fa fa-angle-right"
                              aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                
                
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="blog-entry mb-50">
                    <div class="entry-image clearfix">
                      <img class="img-responsive" src="images/green.jpg" alt="">
                    </div>
                    <div class="blog-detail">
                      <div class="entry-title mb-10">
                        <a href="leansixsigmagreen.php">Lean Six Sigma Black Belt</a>
                      </div>
                      <div class="entry-meta mb-10">
                        <ul>
                          <li><a href="#"><i class="fa fa-calendar-o"></i> </a></li>
                        </ul>
                      </div>

                      <div class="entry-share clearfix">
                        <div class="entry-button">
                          <a class="button arrow" href="#">Register<i class="fa fa-angle-right"
                              aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                
               <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="blog-entry mb-50">
                    <div class="entry-image clearfix">
                      <img class="img-responsive" src="images/pgm11.jpg" alt="">
                    </div>
                    <div class="blog-detail">
                      <div class="entry-title mb-10">
                        <a href="projectmng.php">Project Management Consulting</a>
                      </div>
                      <div class="entry-meta mb-10">
                        <ul>
                          <li><a href="#"><i class="fa fa-calendar-o"></i> 16th May 2020</a></li>
                        </ul>
                      </div>
                      <div class="entry-content">

                      </div>
                      <div class="entry-share clearfix">
                        <div class="entry-button">
                          <a class="button arrow" href="projectmng.php">Register<i class="fa fa-angle-right"
                              aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
                
                
                
              <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="blog-entry mb-50">
                    <div class="entry-image clearfix">
                      <img class="img-responsive" src="images/hr1.jpg" alt="">
                    </div>
                    <div class="blog-detail">
                      <div class="entry-title mb-10">
                        <a href="hrexpert.php">Digital HR Training & Certification</a>
                      </div>
                      <div class="entry-meta mb-10">
                        <ul>
                          <li><a href="#"><i class="fa fa-calendar-o"></i> 5th June 2020</a></li>
                        </ul>
                      </div>

                      <div class="entry-share clearfix">
                        <div class="entry-button">
                          <a class="button arrow" href="hrexpert.php">Register<i class="fa fa-angle-right"
                              aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                
               
               <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="blog-entry mb-50">
                    <div class="entry-image clearfix">
                      <img class="img-responsive" src="images/hr1.jpg" alt="">
                    </div>
                    <div class="blog-detail">
                      <div class="entry-title mb-10">
                        <a href="hrexpert.php">Data Science Expert</a>
                      </div>
                      <div class="entry-meta mb-10">
                        <ul>
                          <li><a href="#"><i class="fa fa-calendar-o"></i> 5th June 2020</a></li>
                        </ul>
                      </div>

                      <div class="entry-share clearfix">
                        <div class="entry-button">
                          <a class="button arrow" href="#">Register<i class="fa fa-angle-right"
                              aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
                  
                
                
                 
                               


                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="blog-entry mb-50">
                    <div class="entry-image clearfix">
                      <img class="img-responsive" src="images/38332_5412_6.jpg" alt="">
                    </div>
                    <div class="blog-detail">
                      <div class="entry-title mb-10">
                        <a href="advance_training.php">Advance MS Excel Training</a>
                      </div>
                      <div class="entry-meta mb-10">
                        <ul>
                          <li><a href="#"><i class="fa fa-calendar-o"></i> 6th May 2020</a></li>
                        </ul>
                      </div>
                      <div class="entry-content">

                      </div>
                      <div class="entry-share clearfix">
                        <div class="entry-button">
                          <a class="button arrow" href="advance_training.php">Register<i class="fa fa-angle-right"
                              aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                

                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="blog-entry mb-50">
                    <div class="entry-image clearfix">
                      <img class="img-responsive" src="images/21.jpg" alt="">
                    </div>
                    <div class="blog-detail">
                      <div class="entry-title mb-10">
                        <a href="emotionalIntl.php">Emotional Intelligence</a>
                      </div>
                      <div class="entry-meta mb-10">
                        <ul>
                          <li><a href="#"><i class="fa fa-calendar-o"></i> 31st May 2020</a></li>
                        </ul>
                      </div>

                      <div class="entry-share clearfix">
                        <div class="entry-button">
                          <a class="button arrow" href="emotionalIntl.php">Register<i class="fa fa-angle-right"
                              aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="blog-entry mb-50">
                    <div class="entry-image clearfix">
                      <img class="img-responsive" src="images/24.jpeg" alt="">
                    </div>
                    <div class="blog-detail">
                      <div class="entry-title mb-10">
                        <a href="relationmgt.php">Relationship Management</a>
                      </div>
                      <div class="entry-meta mb-10">
                        <ul>
                          <li><a href="#"><i class="fa fa-calendar-o"></i> 29th May 2020</a></li>
                        </ul>
                      </div>

                      <div class="entry-share clearfix">
                        <div class="entry-button">
                          <a class="button arrow" href="relationmgt.php">Register<i class="fa fa-angle-right"
                              aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                

                

              </div>
            </div>
            <div class="tab-pane fade" id="design-07">
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="blog-entry mb-50">
                  <div class="entry-image clearfix">
                    <img class="img-responsive" src="images/yellowbelt1.jpeg" alt="">
                  </div>
                  <div class="blog-detail">
                    <div class="entry-title mb-10">
                      <a href="leanYellowBangla.php">Lean Six Sigma Yellow Belt</a>
                    </div>
                    <div class="entry-meta mb-10">
                      <ul>
                        <li><a href="#"><i class="fa fa-calendar-o"></i> </a></li>
                      </ul>
                    </div>

                    <div class="entry-share clearfix">
                      <div class="entry-button">
                        <a class="button arrow" href="leanYellowBangla.php">Register<i class="fa fa-angle-right"
                            aria-hidden="true"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="row">
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
                <a class="button arrow" href="details_page.php?course=<?php echo $id; ?>">Read More<i
                    class="fa fa-angle-right" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }
      } ?>
    </div> -->
  </div>
</section>
<!--Ganesh code-->
<section class="theme-bg page-section-ptb">
  <div class="container-fluid">
    <div class="section-title text-center ">
      <h3 class="text-white ">Student's Speak  </h3>
    </div>
    <div class="row text-center">
      <div class="col-lg-12 col-md-6">
        <div class="owl-carousel" data-nav-dots="true" data-items="2" data-md-items="2" data-sm-items="1"
          data-xs-items="1" data-xx-items="1" data-space="20">
          <!--<div class="item">
            <div class="item style_css">
          <div class="back_ground">
     
            </div>
            </div>
          </div>-->
          
          <div class="item">
            <div class="testimonial left_pos" style="padding: 0px;">
            <div class="item style_css">
          		<div class="back_ground">
                	<!--1 item-->
                    <!--mobile view-->
                    <div class="image_mag_mobile">
                    	<!--<img id="logo_img" src="images/academy.png" alt="logo" style="width: 66%;margin-top: 100%;float: right;">-->
                        <div class="">
                        	<img alt="" src="images/academy/co5.bmp" id="image_id_1" class="img_student_hwe image_class">
                        </div>
                       <h6 class="image_tite_h " >Purnanjali Chandra

</h6>
                        <p class="image_tite_p">M.Sc in Water Policy and Governance
Tata Institute of Social Sciences
Mumbai 
 

                      </p>	
                    </div>
                	
                
                  <div class="row row_class">
                  	<div class="col-md-8">
                    	<div class="title_div"> 
                            <span style='/*! position: absolute; *//*! top: -15px; *//*! left: -35px; */color: #7f7f7f;content: "\201C";font-family: Georgia, serif;font-size: 84px;'>“</span><p style=" color: white;margin: -7%;/*! font-weight: lighter; */ margin-left: 17%;font-size: 15px;text-align: center;">Facilitating Water Supply to irrigation in Semi-Arid Rural Areas from Treated Wastewater




</p> 
                            <div style="margin-top: 18%;margin-left: 90%;">
                            	<span style="/*! position: absolute; *//*! top: -15px; *//*! left: -35px; */color: #7f7f7f;content: &quot;\201C&quot;;font-family: Georgia, serif;font-size: 84px;">”</span>
                                </div>
                        </div>
                        <div class=""> 
                         <p class="content_div">Facilitating Water Supply to irrigation in Semi-Arid Rural Areas from Treated Wastewater
 


<br><br>

“I am working in the domain of wastewater treatment in  the Rural areas and the impact it can create on Irrigational practices of farmers even in a water-stressed situation.”
 

</p>
					   </div>	
                    </div>
                    <div class="col-md-4 image_mag">
                    	<!--<img id="logo_img" src="images/academy.png" alt="logo" style="width: 66%;margin-top: 100%;float: right;">-->
                        <div class="">
                        	<img alt="" src="images/academy/co5.bmp" class="img_student_hwe">
                        </div>
                       <h6 class="image_tite_d image_tite_h " >Purnanjali Chandra

</h6>
                        <p class="image_tite_d">M.Sc in Water Policy and Governance
Tata Institute of Social Sciences
Mumbai 
 

                      </p>	
                    </div>
                  </div>
                
                
                
     			
            	</div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial left_pos" style="padding: 0px;">
            <div class="item style_css">
          		<div class="back_ground1">
                	<!--2 item-->
                  <!--mobile view-->
                  <div class="image_mag_mobile">
                  <!--<img id="logo_img" src="images/academy.png" alt="logo" style="width: 66%;margin-top: 100%;float: right;">-->
                        <div class="">
                            <img alt="" src="images/academy/co4.bmp" id="image_id_2" class="img_student_hwe1 img_student_hwe1_mobile image_class" style="width: 33% !important;margin-left: 30% !important;">
                        </div>
                       <h6 class="image_tite_h " id=""  >Dr. Dhananjay A Sukhadeve
</h6>
                        <p class="image_tite_p">BAMS, MHA (TISS) 

                      </p>	
                    </div>
                  <div class="row row_class">
                  	<div class="col-md-8">
                    	<div class="title_div"> 
                            <span style='/*! position: absolute; *//*! top: -15px; *//*! left: -35px; */color: #7f7f7f;content: "\201C";font-family: Georgia, serif;font-size: 84px;'>“</span><p style=" color: white;margin: -7%;/*! font-weight: lighter; */ margin-left: 17%;font-size: 15px;text-align: center;">Reducing Waiting Time in Registration Process at Centenary Hospital, Mumbai



</p> 
                            <div style="margin-top: 18%;margin-left: 90%;">
                            	<span style="/*! position: absolute; *//*! top: -15px; *//*! left: -35px; */color: #7f7f7f;content: &quot;\201C&quot;;font-family: Georgia, serif;font-size: 84px;">”</span>
                                </div>
                        </div>
                        <div class=""> 
                         <p class="content_div">Stratxg Lean Six Sigma Training has helped me to identify the process inefficiencies by using LSS methodologies. 


<br><br>

Stratxg Lean Six Sigma Training has helped me to identify the process inefficiencies by using LSS methodologies. 
 

</p>
					   </div>	
                    </div>
                    <div class="col-md-4 image_mag">
                    	<!--<img id="logo_img" src="images/academy.png" alt="logo" style="width: 66%;margin-top: 100%;float: right;">-->
                        <div class="">
                        <img alt="" src="images/academy/co4.bmp" class="img_student_hwe1 img_student_hwe1_mobile" style="width: 60% !important;margin-left: 15% !important;">
                        </div>
                       <h6 class="image_tite_d1 image_tite_h " >Dr. Dhananjay A Sukhadeve
</h6>
                        <p class="image_tite_d1">BAMS, MHA (TISS) 

                      </p>	
                    </div>
                  </div>
                
                
                
     			
            	</div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial left_pos" style="padding: 0px;">
            <div class="item style_css">
          		<div class="back_ground2">
                 <!--3 item-->
                  <!--mobile view-->
                  <div class="image_mag_mobile">
                  	<div class="">
                        	<img alt="" src="images/academy/co3.bmp" id="image_id_3" class="img_student_hwe2 image_class">
                        </div>
                       <h6 class="image_tite_h " >PIYUSH ASHOKKUMAR</h6>
                        <p class="image_tite_p">TEAM MEMBER
                            CHILDLINE INDIA FOUNDATION 
                            INDIAN SOCIAL WELFARE SOCIETY, GONDIA
                      </p>
                  </div>
                  <div class="row row_class">
                  	<div class="col-md-8">
                    	<div class="title_div"> 
                            <span style='/*! position: absolute; *//*! top: -15px; *//*! left: -35px; */color: #7f7f7f;content: "\201C";font-family: Georgia, serif;font-size: 84px;'>“</span><p style=" color: white;margin: -7%;/*! font-weight: lighter; */ margin-left: 17%;font-size: 15px;text-align: center;">CHECK UP CAMP ON HEALTH CARE & COVID-19 AWARENESS IN BLOCKS OF GONDIA & SALEKASA AT GONDIA DISTRICT, MAHARASHTRA (INDIA)


</p> 
                            <div style="margin-top: 18%;margin-left: 90%;">
                            	<span style="/*! position: absolute; *//*! top: -15px; *//*! left: -35px; */color: #7f7f7f;content: &quot;\201C&quot;;font-family: Georgia, serif;font-size: 84px;">”</span>
                                </div>
                        </div>
                        <div class=""> 
                         <p class="content_div">STRATXG Project Management Industrial Tools and Training has helped me to identify scope of process refining techniques by using Project Management methodologies.

<br><br>

“I am working in child line India foundation  with parent Ngo  Indian social welfare society Gondia.
Now I Working on Check up Camp on Health Care And Covid-19 Awareness in Gondia and salekasa Block. 

</p>
					   </div>	
                    </div>
                    <div class="col-md-4 image_mag">
                    	<!--<img id="logo_img" src="images/academy.png" alt="logo" style="width: 66%;margin-top: 100%;float: right;">-->
                        <div class="">
                        	<img alt="" src="images/academy/co3.bmp" class="img_student_hwe2">
                        </div>
                       <h6 class="image_tite_d2 image_tite_h " >PIYUSH ASHOKKUMAR</h6>
                        <p class="image_tite_d2">TEAM MEMBER
                            CHILDLINE INDIA FOUNDATION 
                            INDIAN SOCIAL WELFARE SOCIETY, GONDIA
                      </p>	
                    </div>
                  </div>
                
                
                
     			
            	</div>
              </div>
            </div>
          </div>
          
          <div class="item">
            <div class="testimonial left_pos" style="padding: 0px;">
            <div class="item style_css">
          		<div class="back_ground3">
                <!--4 item-->
                  <!--mobile view-->
                  <div class="image_mag_mobile">
                  	<div class="">
                        	<img alt="" src="images/academy/image_2.jpg" id="image_id_4" class="img_student_hwe3 image_class">
                        </div>
                       <h6 class="image_tite_h " >Prateek Lohan</h6>
                        <p class="image_tite_p">B.Tech in Electrical Engineering </p>
                  </div>
                  <div class="row row_class">
                  	<div class="col-md-8">
                    	<div class="title_div"> 
                            <span style='/*! position: absolute; *//*! top: -15px; *//*! left: -35px; */color: #7f7f7f;content: "\201C";font-family: Georgia, serif;font-size: 84px;'>“</span><p style=" color: white;margin: -7%;/*! font-weight: lighter; */ margin-left: 17%;font-size: 21px;text-align: center;">To start a 3MW Solar Power Plant                          in   Maharashtra
</p> 
                            <div style="margin-top: 18%;margin-left: 90%;">
                            	<span style="/*! position: absolute; *//*! top: -15px; *//*! left: -35px; */color: #7f7f7f;content: &quot;\201C&quot;;font-family: Georgia, serif;font-size: 84px;">”</span>
                                </div>
                        </div>
                        <div class=""> 
                         <p class="content_div">Stratxg Project Management Training has introduced  skills in me of different knowledge areas of Project Management to deliver to an organisation’s program or project.
<br><br>

Stratxg Project Management Training has introduced  skills in me of different knowledge areas of Project Management to deliver to an organisation’s program or project.
</p>
					   </div>	
                    </div>
                    <div class="col-md-4 image_mag">
                    	<!--<img id="logo_img" src="images/academy.png" alt="logo" style="width: 66%;margin-top: 100%;float: right;">-->
                        <div class="">
                        	<img alt="" src="images/academy/image_2.jpg" class="img_student_hwe3">
                        </div>
                       <h6 class="image_tite_d3 image_tite_h " >Prateek Lohan</h6>
                        <p class="image_tite_d3">B.Tech in Electrical Engineering </p>
                    </div>
                  </div>
                
                
                
     			
            	</div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial left_pos" style="padding: 0px;">
            <div class="item style_css">
          		<div class="back_ground4">
                <!--5 item-->
                  <!--mobile view-->
                  <div class="image_mag_mobile">
                  		<img alt="" src="images/academy/image_1.jpg" id="image_id_5" class="img_student_hwe4 image_class">
                       <h6 class="image_tite_h " >Sandeep Kumar Singh</h6>
                        <p class="image_tite_p">MSc. In Water Policy and Governance 
                        TATA INSTITUTE OF SOCIAL SCIENCES 
                        MUMBAI</p>
                  </div>
                  <div class="row row_class">
                  	<div class="col-md-8">
                    	<div class="title_div"> 
                            <span style='/*! position: absolute; *//*! top: -15px; *//*! left: -35px; */color: #7f7f7f;content: "\201C";font-family: Georgia, serif;font-size: 84px;'>“</span><p style=" color: white;margin: -7%;/*! font-weight: lighter; */ margin-left: 17%;font-size: 17px;text-align: center;">Tracking Municipal and Industrial treated and Untreated waste water Disposal in the City of Agra
</p> 
                            <div style="margin-top: 18%;margin-left: 90%;">
                            	<span style="/*! position: absolute; *//*! top: -15px; *//*! left: -35px; */color: #7f7f7f;content: &quot;\201C&quot;;font-family: Georgia, serif;font-size: 84px;">”</span>
                                </div>
                        </div>
                        <div class=""> 
                         <p class="content_div">“StratXG Project Management Industrial Tools and Training has helped me to identify scope of project and to plan and exicute project by using Project Management”<br><br>

“I am working on Effect of waste water disposal on Water bodies like River, ponds and also its effect on Surface and ground water.”</p>
					   </div>	
                    </div>
                    <div class="col-md-4 image_mag">
                    	<!--<img id="logo_img" src="images/academy.png" alt="logo" style="width: 66%;margin-top: 100%;float: right;">-->
                        <img alt="" src="images/academy/image_1.jpg" class="img_student_hwe4">
                       <h6 class="image_tite_d4 image_tite_h " >Sandeep Kumar Singh</h6>
                        <p class="image_tite_d4">MSc. In Water Policy and Governance 
                        TATA INSTITUTE OF SOCIAL SCIENCES 
                        MUMBAI</p>
                    </div>
                  </div>
                
                
                
     			
            	</div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial left_pos" style="padding: 0px;">
            <div class="item style_css">
          		<div class="back_ground5">
                  <!--6 item-->
                  <!--mobile view-->
                  <div class="image_mag_mobile">
                  		<div class="">
                        	<img alt="" src="images/academy/Picture1.jpg" id="image_id_6" class="img_student_hwe3 image_class">
                        </div>
                       <h6 class="image_tite_h " >Dr Kshipra Sawant
</h6>
                        <p class="image_tite_p">MASTER OF HOSPITAL ADMINISTRATION <br>
TATA INSTITUTE OF SOCIAL SCIENCES  <br>
MUMBAI
                      </p>
                  </div>
                  <div class="row row_class">
                  	<div class="col-md-8">
                    	<div class="title_div"> 
                            <span style='/*! position: absolute; *//*! top: -15px; *//*! left: -35px; */color: #7f7f7f;content: "\201C";font-family: Georgia, serif;font-size: 84px;'>“</span><p style=" color: white;margin: -7%;/*! font-weight: lighter; */ margin-left: 17%;font-size: 15px;text-align: center;">Improving Hospital Emergency Department Process with Lean

</p> 
                            <div style="margin-top: 18%;margin-left: 90%;">
                            	<span style="/*! position: absolute; *//*! top: -15px; *//*! left: -35px; */color: #7f7f7f;content: &quot;\201C&quot;;font-family: Georgia, serif;font-size: 84px;">”</span>
                                </div>
                        </div>
                        <div class=""> 
                         <p class="content_div" style="margin-top: -10% !important;">Stratxg Lean Sig Sigma Training has helped me to identify the process inefficiencies by using LSS methodologies. 

<br><br>

“I am working on Hospital Emergency Department Processes to make it more faster to cater more patient”
 
</p>
					   </div>	
                    </div>
                    <div class="col-md-4 image_mag">
                    	<!--<img id="logo_img" src="images/academy.png" alt="logo" style="width: 66%;margin-top: 100%;float: right;">-->
                        <div class="">
                        	<img alt="" src="images/academy/Picture1.jpg" class="img_student_hwe5">
                        </div>
                       <h6 class="image_tite_d5 image_tite_h " >Dr Kshipra Sawant
</h6>
                        <p class="image_tite_d5">MASTER OF HOSPITAL ADMINISTRATION <br>
TATA INSTITUTE OF SOCIAL SCIENCES  <br>
MUMBAI


                      </p>	
                    </div>
                  </div>
                
                
                
     			
            	</div>
              </div>
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
<!--Ganesh code end-->
<!--<section class="theme-bg page-section-ptb">
  <div class="container-fluid">
    <div class="section-title text-center ">
      <h3 class="text-white ">Student's Speak </h3>
    </div>
    <div class="row text-center">
      <div class="col-lg-12 col-md-6">
        <div class="owl-carousel" data-nav-dots="true" data-items="2" data-md-items="2" data-sm-items="1"
          data-xs-items="1" data-xx-items="1" data-space="20">
          
          <div class="item">
            <div class="testimonial left_pos">
              <div class="testimonial-info"> <img alt="" src="images/academy/academy_slider_1.jpg" style="width: 550px;"> </div>
             </div>
          </div>
          
          <div class="item">
            <div class="testimonial left_pos">
              <div class="testimonial-info"> <img alt="" src="images/academy/academy_slider_2.jpg" style="width: 550px;"> </div>
             </div>
          </div>
          
          <div class="item">
            <div class="testimonial left_pos">
               <div class="testimonial-info"> <img alt="" src="images/academy/academy_slider_3.jpg" style="width: 550px;"> </div>
             </div>
          </div>
          
          <div class="item">
            <div class="testimonial left_pos">
               <div class="testimonial-info"> <img alt="" src="images/academy/academy_slider_4.jpg" style="width: 550px;"> </div>
             </div>
          </div>
          
          <div class="item">
            <div class="testimonial left_pos">
               <div class="testimonial-info"> <img alt="" src="images/academy/academy_slider_5.jpg" style="width: 550px;"> </div>
             </div>
          </div>
          
          <div class="item">
            <div class="testimonial left_pos">
               <div class="testimonial-info"> <img alt="" src="images/academy/academy_slider_6.jpg" style="width: 550px;"> </div>
             </div>
          </div>
          
          <div class="item">
            <div class="testimonial left_pos">
               <div class="testimonial-info"> <img alt="" src="images/academy/academy_slider_7.jpg" style="width: 550px;"> </div>
             </div>
          </div>
          
          
          
           
          
        </div>
      </div>
    </div>
  </div>
</section>-->




<section class="theme-bg page-section-ptb" style="margin-bottom:3%;margin-top: 3%;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 text-center">
       <!-- <h2 class="mb-30 text-white ">Get Quote </h2>  -->
        <a class="button border white" target="_blank" href="payment.php"><span> Pay Here </span></a>
      </div>
    </div>
  </div>
</section>

<?php require_once('common/footer.php'); ?>
<script>
  $(document).ready(function () {
    $('[data-toggle="popover"]').popover();
    $('#sixsigma').modal("show");
  });
</script>
<?php require_once('common/bottom.php'); ?>