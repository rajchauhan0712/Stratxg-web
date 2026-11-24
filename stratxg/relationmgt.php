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
                    <h1>Relationship Management </h1>
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
                    <h2 class="title-effect">Relationship Management</h2>
                    <p>Relationships are the basis for all of life's rewards and struggles</p>
                </div>
                <div class="col-md-4"><img src="images/24.jpeg" alt="" class="img-responsive img-thumbnail"></div>
                <div class="col-md-4"><img src="images/25.jpeg" alt="" class="img-responsive img-thumbnail"></div>
                <div class="col-md-4"><img src="images/27.jpeg" alt="" class="img-responsive img-thumbnail"></div>
                <div class="mt-50 col-md-8">
                    <blockquote class="theme-bg quote">
                    Personal relationships are the fertile soil from which all advancement, all success, all achievement in real life grows.
                    <cite>- Ben Stein</cite>
                    </blockquote>
                </div>
                <div class="col-md-4 mt-50"><img src="images/26.jpeg" alt="" class="img-responsive img-thumbnail"></div>
                <div class="col-md-8 mt-50">
                    <img src="images/28.jpeg" class="img-responsive" alt="">
                </div>
                <div class="col-md-4 mt-50">
                    <p>Kindly make a payment of Rs 299 using Paytm, Google Pay or UPI at Mobile No 9930715001 Or You can pay through <br> NEFT/Internet Banking Transfer at <br>
                    Account Holder: STRATXG CONSULTING PRIVATE LIMITED <br> Account Number: 50200040522822 <br> IFSC: HDFC0001106 <br>Branch: BORIVILI EAST - STATION EAST</p>
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
                            <input type="hidden" name="sub" value="5">
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