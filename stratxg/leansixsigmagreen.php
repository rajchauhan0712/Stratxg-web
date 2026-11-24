<?php
require_once('common/top.php');
require_once('common/header.php');
?>
 <script src="https://www.google.com/recaptcha/api.js"></script>	
<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}'
    style="background-image: url(images/bg/13.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-name">
                    <h1>Lean Six Sigma Green Belt </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title text-center">
                    <h2 class="title-effect">Lean Six Sigma Green Belt</h2>
                </div>
                <div class="col-md-6 mb-50">
                    <img src="images/greenbelt1.jpg" class="img-responsive" alt="">
                </div>
               
              
               
               
               
                <div class="col-md-6 mt-50" style="margin-top:0px !important;"><img src="images/greenbelt2.jpg" alt="" class="img-responsive img-thumbnail" style="height:340px;"></div>
              
               <div class="col-lg-12 col-md-12 mt-50">
                    <div class="section-title text-center">
                        <h2 class="title-effect">Six Sigma Green Belt Certification

                        </h2>
                    </div>
                A Council for Six Sigma Certification (CSSC) Certified Six Sigma Green Belt is an individual that possesses a thorough understanding of enhanced problem-solving skills, with an emphasis on the DMAIC (Define, Measure, Analyze, Improve and Control) model. <br><br>
The Green Belt Certification designation also reflects the knowledge by the individual to serve as a trained team member within his or her function-specific area of the organization. This focus allows the Green Belt to work on small, carefully defined Six Sigma projects, requiring less than a Black Belt’s full-time commitment to Six Sigma throughout the organization.

<br><br>
                </div>
            
               <div class="col-md-12" style="padding-left:10%">
                    <div class="col-md-12">
                        <img src="images/greenbelt3.jpg" class="img-responsive" alt="">
                    </div>
                    
                </div>
                
                 <div class="col-md-12" style="padding-left:5%">
                    <div class="col-md-12">
                        <img src="images/Picture4.jpg" class="img-responsive" alt="">
                    </div>
                    
                </div>
                
              
                <div class="col-md-6 mt-50">
                    <!-- <p>Kindly make a payment of Rs 299 using Paytm, Google Pay or UPI at Mobile No 9930715001 Or You can pay through <br> NEFT/Internet Banking Transfer at <br>
                    Account Holder: STRATXG CONSULTING PRIVATE LIMITED <br> Account Number: 50200040522822 <br> IFSC: HDFC0001106 <br>Branch: BORIVILI EAST - STATION EAST</p> -->
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
                                <input type="text" class="form-control" name="edu_qual"
                                    placeholder="Education Qualification">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="inst"
                                    placeholder="Institute or Organization">
                            </div>
                            <input type="hidden" name="sub" value="7">
                            <div class="form-group">
                                <select name="batch" class="form-control">
                                    <option value="Batch1">Batch I</option>
                                    <option value="Batch2">Batch II</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="4" placeholder="Address" name="message"></textarea>
                            </div>
                            <div class="g-recaptcha section-field clearfix" data-sitekey="6LeJz50UAAAAAJzddsXZWZwaktiwdoienImKxMtp" ></div>
                            <button type="submit" class="button" name="internship">Submit</button>
                        </form>
                    </div>

            </div>
        </div>
    </div>
</section>
<?php require_once('common/footer.php'); ?>
<?php require_once('common/bottom.php'); ?>