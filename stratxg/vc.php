<?php 
  require_once('config/connect.php');
  require_once('common/top.php');
  require_once('common/header.php');
  if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $industry = mysqli_real_escape_string($con,$_POST['industry']);
    $ct_name = mysqli_real_escape_string($con,$_POST['ctname']);
    $address = mysqli_real_escape_string($con,$_POST['address']);
    $ct_sub = "Startup Query Details";
    if(empty($name) && empty($email) && empty($phone)){
        $error_ct = "All * fields are compulsory";
    }else{
        $qry = mysqli_query($con,"INSERT INTO startup_db(comp_name, email, phone, industry, ctname, address) VALUES ('$name', '$email', '$phone', '$industry', '$ct_name', '$address')");
        $to = "Stratxg <info@stratxg.com>"."\r\n";
        $subject = $ct_sub;
        $headers = "MIME-Version: 1.0"."\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8"."\r\n";
        $headers .= "from: ".$ct_name." <".$email.">"."\r\n";
        $message = "Company Name: ". $name. " email: ".$email." Phone: ".$phone;
        $sent = mail($to,$subject,$message,$headers);
        if($sent){
            $success_ct = "Your message has submitted successfully";
        }else{
            $success_ct = "Fail to submit form";
        }
    }
}
?>
<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}'
    style="background-image: url(images/bg/young-plant-growing-hand-watering-garden_34152-1274.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-name">
                    <h1>StratXG Venture Capitalist</h1>
                    <p>Achieveing growth through emergent stategy and frugal innovation  </p>
                </div>
                <ul class="page-breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><span> VC </span> </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row mt-10 mb-30">
                <div class="col-md-4">
                    <img src="images/524543994-170667a.jpg" alt=""class="img-responsive">
                </div>
                <div class="col-md-6"> <p>  Since 90% of startups fail in the 1st years because of the Financial constraints, Change in focus, Multi focus stategy, Unrelated diversification, Management pillar shifting, Political environment and Legal and Regulatory compliance </p></div>
                </div>
                <div class="row mt-10 mb-30">
                <div class="col-md-5"> <p>We at stratXG Venture Capitalist help these startup, non compliant organization to reinvograte through business modelling, fund requirments,legal support, Knowledge services, scalability, sustainable growth, profitable, relevant and remain ahead of the curve </p></div>
                <div class="col-md-5"><img src="images/twitter-2.png" alt="" class="img-responsive"></div>
                </div>
                <div class="row mt-10 mb-30">
                <div class="col-md-4"><img src="images/growth.jpg" alt="" class="img-responsive"></div>
                <div class="col-md-6"> <p>Contact our Thought leaders , Industry expert, Finance expert, Fund manager, Legal expert, Execution expert, Quality expert, Digital expert under one roof for integrated Knowledge services to transform your business from non compliant to profitable venture</p></div>
                
                </div>
                <h3 class=text-center>We are here to see you amongs the successful leading organization</h3>
                <h3 class=text-center>You are one step away from your journey of success, reach us at </h3>
                    <?php if(isset($success_ct)){ echo '<div class="alert alert-success">'.$success_ct.'</div>';}elseif(isset($error_ct)){echo '<div class="alert alert-danger">'.$error_ct.'</div>';}?>
                    <form class="form-horizontal" role="form" method="post" action="startup.php">
                        <div class="contact-form clearfix">
                            <div class="section-field">
                                <input type="text" placeholder="Company Name*" class="form-control" name="name">
                            </div>
                            <div class="section-field">
                                <input type="email" placeholder="Email*" class="form-control" name="email">
                            </div>
                            <div class="section-field">
                                <input type="text" placeholder="Phone*" class="form-control" name="phone">
                            </div>
                            <div class="section-field">
                                <input type="text" placeholder="Industry Type" class="form-control" name="industry">
                            </div>
                            <div class="section-field">
                                <input type="text" placeholder="Contact person Name" class="form-control" name="ctname">
                            </div>
                            <div class="section-field textarea">
                                <textarea class="form-control input-message" placeholder="Address" rows="5"
                                    name="address"></textarea>
                            </div>
                            <div class="section-field submit-button">
                                <input type="submit" name="submit" class="button" value="Submit" />
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</section>
<?php require_once('common/footer.php');?>
<?php require_once('common/bottom.php');?>