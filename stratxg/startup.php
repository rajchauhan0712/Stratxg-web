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
    style="background-image: url(images/bg/11.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-name">
                    <h1>Startup Empowerment Program</h1>
                </div>
                <ul class="page-breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><span> Startup </span> </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="section-title text-center">
                <h2 class="title-effect">Company Details</h2>
            </div>
            <div class="col-lg-12 col-md-12">
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