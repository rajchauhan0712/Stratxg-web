<div class="modal fade" id="biomedical" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
        <div class="section-title mb-10">
          <h6 class="mt-40 mb-20">Bio Medical Waste Registration</h6>
        </div>
        <?php 
        if(isset($_SESSION['msg'])){
          echo $_SESSION['msg'];
        }
        ?>
      </div>
      <div class="modal-body">
        <form class="gray-form" method="POST" action="php/bio.php">
          <div class="form-group">
            <input type="name" class="form-control" placeholder="Name" name="name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <textarea class="form-control" rows="4" placeholder="message" name="message"></textarea>
          </div>
          
           <div class="g-recaptcha section-field clearfix" data-sitekey="6LeJz50UAAAAAJzddsXZWZwaktiwdoienImKxMtp" ></div>
          <button type="submit" class="button" name="biomedical">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="button gray" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="leansixsigma" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
        <div class="section-title mb-10">
          <h6 class="mt-40 mb-20">Lean Six Sigma (Yellow Belt) Training</h6>
	 <img src="https://stratxg.com/images/yellowind.jpeg" class="img-responsive" alt="">
          <img src="https://stratxg.com/images/Free-Lean-Six-Sigma-Training.jpg" class="img-responsive" alt="">
          <p class="text-center">We are offering this course at a 300% discount pricing MRP : ₹4,999 To Register Make a payment via Paytm or UPI on +91 9930715001 </p>
        </div>
        <?php 
        if(isset($_SESSION['msg'])){
          echo $_SESSION['msg'];
        }
        ?>
      </div>
      <div class="modal-body">
        <form class="gray-form" method="POST" action="php/bio.php">
          <div class="form-group">
            <input type="name" class="form-control" placeholder="Name" name="name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="number" class="form-control" name="phone" placeholder="Mobile No">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="edu_qual" placeholder="Education Qualification">
          </div>
          <div class="form-group">
            <select name="batch" class="form-control" id="">
              <option value="Batch1">Batch I</option>
              <option value="Batch2">Batch II</option>
              <option value="Batch3">Batch III</option>
              <option value="Batch4">Batch IV</option>
              <option value="Batch5">Batch V</option>
              <option value="Batch6">Batch VI</option>
              <option value="Batch7">Batch VII</option>
              <option value="Batch8">Batch VIII</option>
              <option value="Batch9">Batch IX</option>
              <option value="Batch10">Batch X</option>
              <option value="Batch11">Batch XI</option>
              <option value="Batch12">Batch XII</option>
              <option value="Batch13">Batch XIII</option>
              <option value="Batch14">Batch XIV</option>
            </select>
            <input type="hidden" name="sub" value="1">
          </div>
          <div class="form-group">
            <textarea class="form-control" rows="4" placeholder="Address" name="message"></textarea>
          </div>
          <button type="submit" class="button" name="internship">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="button gray" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="leanYellowBangla" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
        <div class="section-title mb-10">
          <h6 class="mt-40 mb-20">Registration Link For Bangladesh</h6>
        </div>
      </div>
      <div class="modal-body">
	<ul>
		<li><a href="leanYellowBangla.php">Lean Six Sigma Yellow Belt </a></li>
	</ul>
      </div>
      <div class="modal-footer">
        <button type="submit" class="button gray" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="success_modal">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-content">
        <div class="modal-body">
          <div class="thank-you-pop text-center">
            <img src="images/tick.png" alt="tick" width="150px">
            <h1>Thank You!</h1>
            <p>Your submission is received kindly check your email and make a payment to confirm your seats</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="footer page-section-pt black-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-6 xs-mb-30">
        <div class="footer-useful-link footer-hedding">
          <h6 class="text-white mb-30 mt-10 text-uppercase">Navigation</h6>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="business.php">Products & Services</a></li>
            <li><a href="careers.php">Careers</a></li>
            <li><a href="gallery.php">Gallery </a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="csr.php">CSR </a></li>
            <li><a href="payment.php">Payment</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-6 xs-mb-30">
        <div class="footer-useful-link footer-hedding">
          <h6 class="text-white mb-30 mt-10 text-uppercase">Our Subsidiaries</h6>
          <ul>
            <li><a href="http://Cureforworld.com" target="_blank">Cureforworld</a></li>
            <li><a href="" target="_blank">StratXG Edutech</a></li>
            <li><a href="http://iotvitisystems.com" target="_blank">IOTvitisystems</a></li>
            <li><a href="http://stratxg.com/images/XG.pdf" target="_blank">XG Foundation</a></li>
            <li><a href="http://lowendjobs.com/" target="_blank">Lowendjobs</a></li>
          </ul>
	<h6 class="text-white mb-30 mt-10 text-uppercase">Bangladesh Training & Webnair</h6>
	<ul>
<li><a href="https://www.stratxg.com/leanYellowBangla.php" >Lean Six Sigma Yellow Belt</a></li>
	</ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 xs-mb-30">
        <h6 class="text-white mb-30 mt-10 text-uppercase">Contact Us</h6>
        <ul class="addresss-info">
         
          <li><i class="fa fa-map-marker"></i>
            <p>STRATXG CONSULTING PRIVATE LIMITED <br> 
            8th Floor, BHAMA Center, Near Bhujbal Chawk, Pune-Mumbai express Way, Wakad, Pune 411057</p>
          </li>
          <li><i class="fa fa-phone"></i> <a href="tel:9769211415"> <span>+(91) 976 921 1415</span> </a> <br>
            <a href="tel:8700692070"> <span>+(91) 870 069 2070 </span> </a></li>
          <li><i class="fa fa-envelope-o"></i>Email:<span> info@stratxg.com</span></li>
          <!--<li><a href="">Payment</a></li>-->
        </ul>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 xs-mb-30">
        <div class="footer-useful-link footer-hedding">
          <h6 class="text-white mb-30 mt-10 text-uppercase">Training, Webnair & Workshops</h6>
          <ul>
            <li><a href="#biomedical" id="biomedical" data-toggle="modal" data-target="#biomedical">Bio Medical Waste
                Management Registration</a></li>
            <li><a href="nosocomial.php">Nosocomial</a></li>
            <li><a href="leanYellowBelt.php">Lean Six Sigma
                (Yellow Belt) Training</a></li>
            <li><a href="advance_training.php">Advance MS Excel Training</a></li>
            <li><a href="projectmng.php">Fundamentals of Industrial Project & Tools Training</a></li>
            <li><a href="emotionalIntl.php">Emotional Intelligence</a></li>
            <li><a href="relationmgt.php">Relationship Management</a></li>
            <li><a href="hrexpert.php">Digital HR Training & Certification</a></li>
            <li><a href="leansixsigmagreen.php">Lean Six Sigma Green Belt</a></li>
            <li><a href="data_science.php">Data Science & Analytics Expert - Training and Certification</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-widget mt-20">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 xs-mb-20 ">
         
          <ul class="footer-legal-links">
    <li><a href="privacy_policy.php">Privacy Policy</a></li>
    <li><a href="terms-and-condition.php">Terms & Conditions</a></li>
</ul>

        
          <p class="mt-15"> &copy;Copyright stratXG <span id="copyright">
              <script>
                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
              </script>
            </span> <a href="#"> </a> All Rights Reserved <br> Powered by stratXG Digital</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 text-right xs-text-left">
          <div class="footer-widget-social">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i> </a></li>
              <li><a href="https://www.linkedin.com/company/stratxg"><i class="fa fa-linkedin"></i> </a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--=================================  footer -->
</div>
<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>
<div id="back-to-top1"><a class="top1 arrow" href="https://api.whatsapp.com/send?phone=+91 958 814 3105"><img src="images/whatsapp_icon.png" style="height:60px; width:60px; "></a></div>
<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script type="text/javascript" src="js/plugins-jquery.js"></script>
<!-- custom -->
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">
  var plugin_path = 'js/';
</script>
<script>
  $(document).ready(function () {
   
    if (window.location.href.indexOf('#biomedical') != -1) {
      $('#biomedical').modal('show');
    }
    if (window.location.href.indexOf('#leansixsigma') != -1) {
      $('#leansixsigma').modal('show');
    }
    if (window.location.href.indexOf('#success_modal') != -1) {
      $('#success_modal').modal('show');
    }
  });
</script>
<style>
    #back-to-top1 .top1 {
	z-index: 999;
	position: fixed;
	margin: 0px;
	color: #fff;
	transition: all .5s ease-in-out;
	/* position: fixed; */
	bottom: 30px;
	right: 25px;
	border-radius: 3px;
	/* z-index: 999; */
	/* background: transparent; */
	font-size: 14px;
	/*background: #361134; */
	width: 40px;
	height: 40px;
	text-align: center;
}
/* ===== Footer Legal Links ===== */
.footer-legal-links {
    list-style: none;
    padding: 0;
    margin: 10px 0 0;
    display: flex;
    gap: 20px;
}

.footer-legal-links li {
    display: inline-block;
}

.footer-legal-links li a {
    color: #ffffff;
    font-size: 14px;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.3s ease;
}

.footer-legal-links li a:hover {
    color: #38bdf8; /* light blue hover */
    text-decoration: underline;
}

</style>