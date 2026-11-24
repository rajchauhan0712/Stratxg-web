<?php 
  require_once('config/connect.php');
  require_once('common/top.php');
  require_once('common/header.php');
  if(isset($_GET['course'])){
    $course = $_GET['course'];
    $qry= mysqli_query($con,"SELECT * FROM add_course_db WHERE id='$course'");
    if(mysqli_num_rows($qry)){
      $row = mysqli_fetch_array($qry);
      $title = $row['title'];
      $description = $row['description'];
      $category = $row['category'];
      $cdate = $row['classdate'];
      $learning_outcome = $row['learning_outcome'];
      $cimage = $row['cimage'];
      $cseats = $row['cseats'];
      $course_content = $row['course_id'];
      $fnew_pd = rtrim($learning_outcome, ' | ');
      $newlo = explode(" | ",$fnew_pd);
    }
  }
if(isset($_POST['submit'])){
        $ct_name = mysqli_real_escape_string($con,$_POST['name']);
        $ct_email = mysqli_real_escape_string($con,$_POST['email']);
        $ct_message = mysqli_real_escape_string($con,$_POST['message']);
        $ct_sub = "Academy Query Form";
        if(empty($ct_name) && empty($ct_email) && empty($ct_sub)){
            $error_ct = "All * fields are compulsory";
        }else{
            $to = "Stratxg <info@stratxg.com>"."\r\n";
            $subject = $ct_sub;
            $headers = "MIME-Version: 1.0"."\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8"."\r\n";
            $headers .= "from: ".$ct_name." <".$ct_email.">"."\r\n";
            $message = $ct_message;
            $sent = mail($to,$subject,$message,$headers);
            if($sent){
                $success_ct = "Your message has submitted successfully";
            }else{
                $success_ct = "Fail to submit form";
            }
        }
    }
?>
<style>
  .accordion.animated .acd-group .acd-heading {
    text-transform: uppercase;
  }

  .accordion.animated .acd-group.acd-active .acd-heading {
    text-transform: uppercase;
  }

  .blog.timeline-sidebar .timeline li.timeline-inverted .timeline-badge {
    left: -55px;
  }

</style>
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
<section class="white-bg blog timeline-sidebar page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8">
        <ul class="timeline">
          <li class="entry-date"> <span> Seats <?php echo $cseats; ?></span></li>
          <li class="timeline-inverted">
            <div class="timeline-badge primary"><a>16 <span>Oct</span></a></div>
            <div class="timeline-panel">
              <div class="blog-entry">
                <div class="entry-image clearfix">
                  <img class="img-responsive" src="admin/uploads/<?php echo $cimage; ?>" alt="">
                </div>
                <div class="blog-detail">
                  <div class="entry-title mb-10">
                    <h1 class="uppercase text-black"><?php echo $title; ?></h1>
                  </div>
                  <div class="entry-meta mb-10">
                    <ul>
                      <li> <i class="fa fa-folder-open-o"></i> <a href="#"> <?php echo $category;?></a> </li>
                      <!--                      <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>-->
                      <li><a href="#"><i class="fa fa-calendar-o"></i> <?php echo $cdate; ?></a></li>
                    </ul>
                  </div>
                  <div class="entry-content">
                    <h5 class="uppercase mt-30">COURSE DESCRIPTION</h5>
                    <p><?php echo $description;?></p>
                  </div>
                  <div class="title mt-30">
                    <h5>Course content</h5>
                  </div>
                  <div class="accordion animated">
                    <?php   $qry1 = mysqli_query($con,"SELECT * FROM course_header_db WHERE course_head_id='$course_content'");
                            if(mysqli_num_rows($qry1)){
                              while($row1 = mysqli_fetch_array($qry1)){
                              $head_id = $row1['course_head_id'];
                              $heading = $row1['course_heading'];
                      //        $trimhead = rtrim($heading," | ");
                      //        $head = explode(" | ",$trimhead);
                             ?>
                    <div class="acd-group">
                      <a href="#" class="acd-heading"><?php echo $heading;?></a>
                      <div class="acd-des" style="display: block;">
                        <ul class="list list-mark">
                          <?php  
                            $qry3=mysqli_query($con,"SELECT * FROM course_header_content WHERE course_header_id	='$heading'");
                            if(mysqli_num_rows($qry3)){
                              $row2 = mysqli_fetch_array($qry3);
                              $ccontent = $row2['course_content'];
                              $newcc = rtrim($ccontent," | ");
                              $nweCcontent = explode(" | ", $newcc);
                            foreach($nweCcontent as $newContent => $key2){
                              echo "<li>".$key2."</li>";
                            }
                            } 
                          ?>
                        </ul>
                      </div>
                    </div>
                    <?php }}?>
                  </div>
                  <h5 class="uppercase mt-30">LEARNING OUTCOMES</h5>
                  <ul class="list list-edit">
                    <?php  foreach($newlo as $outcome => $key){
                      echo "<li>".$key."</li>";
                    }
                    ?>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li class="clearfix timeline-inverted" style="float: none;"></li>
        </ul>
      </div>
      <!-- sidebar-widget-->
      <div class="col-lg-4 col-md-4 sm-mt-60">
        <div class="sidebar-widget">
           <?php if(isset($success_ct)){ echo '<div class="alert alert-success">'.$success_ct.'</div>';}?>
          <h6 class="mt-40 mb-20">Quick contact</h6>
          <form class="gray-form" method="post">
            <div class="form-group">
              <input type="name" class="form-control" placeholder="Name" name="name">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputphone" name="email" placeholder="Email">
            </div>

            <div class="form-group">
              <textarea class="form-control" rows="4" placeholder="message" name="message"></textarea>
            </div>
            <button type="submit" class="button" name="submit" href="#" >Submit</button>
          </form>
        </div>
        <!-- <div class="sidebar-widget">
          <h6 class="mt-40 mb-20">Recommend Course </h6>
          <div class="recent-post clearfix">
            <div class="recent-post-image">
              <img class="img-responsive" src="images/blog/02.jpg" alt="">
            </div>
            <div class="recent-post-info">
              <a href="#">Six Sigma Yellow Belt</a>
              <span><i class="fa fa-calendar-o"></i> September 30, 2018</span>
            </div>
          </div>
          <div class="recent-post clearfix">
            <div class="recent-post-image">
              <img class="img-responsive" src="images/blog/02.jpg" alt="">
            </div>
            <div class="recent-post-info">
              <a href="#">Six Sigma Green Belt</a>
              <span><i class="fa fa-calendar-o"></i> September 30, 2018</span>
            </div>
          </div>
          <div class="recent-post clearfix">
            <div class="recent-post-image">
              <img class="img-responsive" src="images/blog/03.jpg" alt="">
            </div>
            <div class="recent-post-info">
              <a href="#">Six Sigma Black Belt</a>
              <span><i class="fa fa-calendar-o"></i> September 30, 2018</span>
            </div>
          </div>
        </div> -->
        <!-- <div class="sidebar-widget mt-40 text-center">
          <h6 class="mb-20">About the Author</h6>
          <p>We are the <strong> webster </strong> dolor sit ametLorem Ipsum Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, <br> <br>
            Consequat ipsum, nec sagittis sem nibh id elit nibh vel velit auctor aliquet. sem nibh Aenean sollicitudin, </p>
        </div> -->
      </div>
    </div>
  </div>
</section>
<?php require_once('common/footer.php');?>
<?php require_once('common/bottom.php');?>
