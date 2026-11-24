<?php
require_once('common/top.php');
require_once('common/header.php');
?>
<!--=================================
page-title-->
<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(images/bg/02.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-title-name">
          <h1>Welcome to stratXG</h1>
          <p>Now Think The Unthinkable With StratXG</p>
        </div>
        <ul class="page-breadcrumb">
          <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
          <li><span>Contact </span> </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!--=================================page-title -->

<!--================================= contact-->
<section class="contact white-bg page-section-ptb">
  <h5 class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-md-offset-2">
        <div class="section-title text-center">
          <h1>StratXG Consulting Private Limited</h1>
          <h6>You are one step away from transformational growth</h6>
          <h2>Let’s Get In Touch!</h2>
          <p>Below are our touchpoints. please contact for any query</p>
        </div>
      </div>
    </div>
    <div class="row mb-30">
      <div class="touch-in white-bg">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="contact-box text-center">
            <i class="fa fa-building-o theme-color"></i>
            <h5 class="uppercase mt-20">Address</h5>
            <p class="mt-20">ILESEUM GLC Bavdhan 18 DSK Ranwara Rd, Pakharbaug Society, Ram Nagar,Bavdhan Pune. 411021</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="contact-box text-center">
            <i class="ti-mobile theme-color"></i>
            <h5 class="uppercase mt-20">Phone</h5>
            <p class="mt-20"> +(91) 976 921 1415 <br>+(91) 870 069 2070</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="contact-box text-center">
            <i class="ti-email theme-color"></i>
            <h5 class="uppercase mt-20">Email</h5>
            <p class="mt-20">info@stratxg.com <br> support@stratxg.com</p>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="row mt-20">
      <div class="col-sm-12">
        <div id="formmessage">Success/Error Message Goes Here</div>
        <form class="form-horizontal" id="contactform" role="form" method="post" action="php/contact-form.php">
          <div class="contact-form clearfix">
            <div class="section-field">
              <input id="name" type="text" placeholder="Name*" class="form-control ravi_hwe_text_hwe_box_hwe" name="name">
            </div>
            <div class="section-field">
              <input type="email" placeholder="Email*" class="form-control ravi_hwe_text_hwe_box_hwe" name="email">
            </div>
            <div class="section-field">
              <input type="text" placeholder="Phone*" class="form-control ravi_hwe_text_hwe_box_hwe" name="phone">
            </div>
            <div class="section-field textarea">
              <textarea class="form-control input-message ravi_hwe_text_hwe_box_hwe" placeholder="Comment*" rows="7" name="message"></textarea>
            </div>
            <div class="g-recaptcha section-field clearfix" data-sitekey="6LeJz50UAAAAAJzddsXZWZwaktiwdoienImKxMtp" ></div>
            <div class="section-field submit-button">
              <input type="hidden" name="action" value="sendEmail" />
              <button id="submit" name="submit" type="submit" value="Send" class="button mb-10" > Send your message </button>
            </div>
          </div>
        </form>
        <div id="ajaxloader" style="display:none"><img class="center-block mt-30 mb-30" src="images/pre-loader/loader-02.svg" alt=""></div>
      </div>
    </div>
    
    
    
    
    
    <div class="row text-center">
      <h3>Our Presence</h3>
      <h5>India</h5>
      <div class="col-md-3"><img src="images/img/mumbai.jpg" alt="" class="img-responsive img-rounded" style="height:164px;width: 270px;margin: auto;">
        <h5 class="mt-10">Mumbai</h5>
      </div>
      <div class="col-md-3"><img src="images/img/pune.jpg" alt="" class="img-responsive img-rounded" style="height:164px;width: 270px;margin: auto;">
        <h5 class="mt-10">Pune</h5>
      </div>
      <div class="col-md-3"><img src="images/img/delhi.jpg" alt="" class="img-responsive img-rounded" style="height:164px;width: 270px;margin: auto;">
        <h5 class="mt-10">Delhi</h5>
      </div>
      <div class="col-md-3"><img src="images/img/chandigarh.jpg" alt="" class="img-responsive img-rounded" style="height:164px;width: 270px;margin: auto;">
        <h5 class="mt-10">Chandigarh</h5>
      </div>
      <div class="col-md-3"><img src="images/img/chennai.jpg" alt="" class="img-responsive img-rounded" style="height:164px;width: 270px;margin: auto;">
        <h5 class="mt-10">Chennai</h5>
      </div>
      <div class="col-md-3"><img src="images/img/madhrai.PNG" alt="" class="img-responsive img-rounded" style="height:164px;width: 270px;margin: auto;">
        <h5 class="mt-10">Madurai</h5>
      </div>
      
         <div class="col-md-3"><img src="images/img/jaipur.png" alt="" class="img-responsive img-rounded" style="height:164px;width: 270px;margin: auto;">
        <h5 class="mt-10">Jaipur</h5>
      </div>
      
      
       <div class="col-md-3"><img src="images/img/kolkata.png" alt="" class="img-responsive img-rounded" style="height:164px;width: 270px;margin: auto;">
        <h5 class="mt-10">Kolkata</h5>
      </div>
      <div class="col-md-3"><img src="images/img/guwahati.jpg" alt="" class="img-responsive img-rounded" style="height:164px;width: 270px;margin: auto;">
        <h5 class="mt-10">Guwahati</h5>
      </div>
<div class="col-md-3"><img src="images/img/ahemdabad.jpg" alt="" class="img-responsive img-rounded" style="height:164px;width: 270px;margin: auto;">
        <h5 class="mt-10">Ahemdabad</h5>
      </div>
<div class="col-md-3"><img src="images/img/bengaluru.jpg" alt="" class="img-responsive img-rounded" style="height:164px;width: 270px;margin: auto;">
        <h5 class="mt-10">Bengaluru</h5>
      </div>
    </div>
      
    </div>
    
    <div class="container">
        
    <div class="row text-center ">
      <h5>International</h5>
      <div class="col-md-3"><img src="images/img/sigapore.jpg" alt="" class="img-responsive img-rounded" style="height:164px;width: 270px;margin: auto;">
        <h5 class="mt-10">Singapore</h5>
      </div>
      <div class="col-md-3"><img src="images/img/uk.jpg" alt="" class="img-responsive img-rounded" style="height:164px;width: 270px;margin: auto;">
        <h5 class="mt-10">UK</h5>
      </div>
      <div class="col-md-3"><img src="images/img/usa.jpg" alt="" class="img-responsive img-rounded" style="height:164px;width: 270px;margin: auto;">
        <h5 class="mt-10">USA</h5>
      </div>
      
      <div class="col-md-3"><img src="images/img/bangladesh.png" alt="" class="img-responsive img-rounded" style="height:164px;width: 270px;margin: auto;">
        <h5 class="mt-10">Bangladesh</h5>
      </div>
      
      </div>
      
    
    
    
  </div>
</section>
<!--================================= contact-->
<!--================================= contact map -->
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15066.355750711413!2d72.84998!3d19.2567386!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x33c5cb8de77a4fb1!2sPrithvi%20Palace!5e0!3m2!1sen!2sin!4v1586672391055!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;"  tabindex="0"></iframe>
<!--=================================  contact map -->
<?php require_once('common/footer.php'); ?>
<!-- Google recaptcha -->

<script src='https://www.google.com/recaptcha/api.js'></script>
<?php require_once('common/bottom.php'); ?>