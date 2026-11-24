<?php
ob_start();
include_once('config/connect.php');
require_once('common/top.php');
require_once('common/header.php');
if(isset($_SESSION['email']) && isset($_SESSION['type'])){
  header('location: index.php');
}
if(isset($_SESSION['generatedToken'])){
    $disabled = 'disabled';
    $_SESSION['errors'] = 'Email already sent check your mail or try after 5 mins';
}else{
    $disabled = '';
}
if(isset($_POST['recovery-pass']) && !isset($_SESSION['generatedToken'])){
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $checkEmail = mysqli_query($con,"select firstName, secondName, email from students_tbl where email='$email' LIMIT 1");
    if($checkEmail !== null){
        $row = mysqli_fetch_array($checkEmail);
        $token = rand(999,99999).time();
        $_SESSION['generatedToken'] =  $token ;
        $linkG = "https://stratxg.com/set-password.php?token=".$_SESSION['generatedToken'];
        $emailD = $row['email'];
        $fname = $row['firstName'];
        $sname = $row['secondName'];
        $to = "$emailD" . "\r\n";
        $subject = 'Reset Password';
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "from: Startxg  <support@stratxg.com>" . "\r\n";
        $message = 'Click On This Link to Reset Password '.$linkG .'';
        $sent = mail($to, $subject, $message, $headers);
        if($sent){
            $qry = mysqli_query($con,"insert into password_reset_tbl (email, token) values ('$emailD','$token')");
            $_SESSION['success'] = 'Check your email to reset your password';
            header("refresh:5; url=index.php");
        }
    }else{
        $_SESSION['errors'] = 'Email does not exists try valid email id';
    }
}
?>
<style>
    .error {
        margin: 10px 0;
        color: #ff0000 !important;
    }
</style>
<section class="page-section-pt bg-overlay-black-70 login-signup parallax" style="background: url(images/login/1.jpg);"">
  <div class=" container pt-60 pb-60">
    <div class="gray-bg-login">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="section-title text-center">
                <h2 class="title-effect text-white">Forgot Password?</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="clearfix">
            <?php
                      if(isset($_SESSION['success'])){
                        echo "<div class='alert alert-success' role='alert'>".$_SESSION['success']."</div>";
                        unset($_SESSION['success']);
                      }elseif(isset($_SESSION['errors'])){
                        echo "<div class='alert alert-danger' role='alert'>".$_SESSION['errors']."</div>";
                        unset($_SESSION['errors']);
                      }else{
                        
                      }
                  ?>
                <form action="password-recovery.php" method="post" id="recovery">
                    <div class="section-field mb-20">
                        <input class="form-control" type="email" name="email" placeholder="Email address" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="recovery-pass" class="button" <?php echo $disabled; ?>>
                            <span> Recover your Password</span>
                        </button>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
</section>

<?php require_once('common/footer.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
<script>
    $(document).ready(function () {
        $("#recovery").validate();
    });
</script>
<?php require_once('common/bottom.php'); ?>