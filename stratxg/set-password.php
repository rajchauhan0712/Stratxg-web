<?php
ob_start();
include_once('config/connect.php');
require_once('common/top.php');
require_once('common/header.php');
if(isset($_SESSION['email']) && isset($_SESSION['type'])){
  header('location: index.php');
}

if(isset($_POST['resetPass'])) {
    $chekToken = strip_tags(stripslashes(mysqli_real_escape_string($con,$_POST['check'])));
    $newpass = strip_tags(stripslashes(mysqli_real_escape_string($con,$_POST['password'])));
    $confirmpass = strip_tags(stripslashes(mysqli_real_escape_string($con,$_POST['cfpassword'])));

    if(empty($chekToken)){
        header('location: index.php');
    }else{
        $qry = mysqli_query($con,"select token,email from password_reset_tbl where token='$chekToken'");
        if($qry){
            if($newpass != $confirmpass){
                $error_forget = "Password does not match";
                $_SESSION['error_forget'] = $error_forget;
            }else{
                $encPass = password_hash($newpass,PASSWORD_BCRYPT);
                $rows = mysqli_fetch_array($qry);
                $semail = $rows['email'];
                $query = "UPDATE students_tbl SET password = '$encPass' WHERE email = '$semail'";
                $result =mysqli_query($con,$query);
                if($result){
                    $deleteToken = mysqli_query($con,"delete from password_reset_tbl where token='$chekToken'");
                    $success_forget = "Your password has been changed successfully";
                    $_SESSION['success_forget'] = $success_forget;
                    unset($_SESSION['generatedToken']);
                    header("refresh:3; url=login.php");
                }
                else{
                    $error_forget = "Please try again.";
                    $_SESSION['error_forget'] = $error_forget;
                }
            }
        }else{
            $error_forget = "Password reset fail try again after sometime";
            $_SESSION['error_forget'] = $error_forget;
        }
    }
}
?>
<style>
    .error {
        margin: 10px 0;
        color: #ff0000 !important;
    }

    
</style>
<section class="page-section-pt bg-overlay-black-70 login-signup parallax" style="background: url(images/login/1.jpg);">
    <div class="container pt-60 pb-60">
        <div class="gray-bg-login">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title text-center">
                        <h2 class="title-effect text-white">Set New Password?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="clearfix">
                        <?php
                      if(isset($_SESSION['success_forget'])){
                        echo "<div class='alert alert-success' role='alert'>".$_SESSION['success_forget']."</div>";
                        unset($_SESSION['success_forget']);
                      }elseif(isset($_SESSION['error_forget'])){
                        echo "<div class='alert alert-danger' role='alert'>".$_SESSION['error_forget']."</div>";
                        unset($_SESSION['error_forget']);
                      }else{
                        
                      }
                  ?>
                        <form action="set-password.php" method="post" id="recovery">
                            <input type="hidden" name="check"
                                value="<?php if(!empty($_SESSION['generatedToken'])){echo $_SESSION['generatedToken'];} ?>">
                            <div class="section-field mb-20">
                                <input class="form-control" type="password" id="password" name="password"
                                    placeholder="Password" required>
                            </div>
                            <div class="section-field mb-20">
                                <input class="form-control" type="password" id="cfpassword" name="cfpassword"
                                    placeholder="Confirm Password" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="resetPass" class="button">
                                    <span> Reset Password</span>
                                </button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
            <div>
            </div>
</section>

<?php require_once('common/footer.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
<script>
    $(document).ready(function () {
        $("#recovery").validate({
            rules: {
                password: "required",
                cfpassword: {
                    equalTo: "#password"
                }
            }
        });
    });
</script>
<?php require_once('common/bottom.php'); ?>