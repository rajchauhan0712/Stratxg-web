<?php
ob_start();
include_once('config/connect.php');
require_once('common/top.php');
require_once('common/header.php');
if(isset($_SESSION['email']) && isset($_SESSION['type'])){
  header('location: index.php');
}
?>
<style>
  .error{
    margin:10px 0;
    color: #ff0000 !important;
  }
</style>
<section class="page-section-pt bg-overlay-black-70 login-signup parallax" style="background: url(images/login/1.jpg);">
  <div class="container pt-60 pb-60">
    <div class="row">
      <div class="col-sm-offset-3 col-sm-6">
        <div class="tab tab-border icon nav-center">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#login" data-toggle="tab"> <i class="fa fa-user"></i> Login</a></li>
            <li><a href="#signup" data-toggle="tab"> <i class="fa fa-sign-in"></i>Signup</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade in active" id="login">
              <div class="login-box-02 white-bg">
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
                <form id="loginForm" action="user/login.php" method="POST">
                <div class="pb-50 clearfix">
                  <h4 class="mb-30"> Login </h4>
                    <div class="section-field mb-20">
                      <label class="mb-10" for="name">Email* </label>
                      <input id="email" class="web form-control" type="email" placeholder="Email" name="email" required>
                    </div>
                    <div class="section-field mb-20">
                      <label class="mb-10" for="Password">Password* </label>
                      <input id="Password" minlength="12" class="Password form-control" type="password" placeholder="Password"
                        name="password" required>
                    </div>
                    <div class="section-field">
                      <div class="remember-checkbox mb-30">
                        <a href="password-recovery.php" class="pull-right">Forgot Password?</a>
                      </div>
                    </div>
                    <button type="submit" name="login-student" class="button btn-block">
                      <span>Log in</span>
                    </button>
                </div>
                </form>
              </div>
            </div>
            <div class="tab-pane fade" id="signup">
              <div class="login-box-02 white-bg">
                <form id="signupForm" action="user/signup.php" method="POST">
                  <div class="pb-50 clearfix">
                    <div class="row">
                      <h4 class="mb-30">Signup</h4>
                      <div class="section-field mb-20 col-sm-6">
                        <label class="mb-10" for="name">First name* </label>
                        <input id="firstname" class="web form-control" type="text" placeholder="First name" name="firstName" required>
                      </div>
                      <div class="section-field mb-20 col-sm-6">
                        <label class="mb-10" for="name">Last name* </label>
                        <input id="lastname" class="web form-control" type="text" placeholder="Last name" name="lastName" required>
                      </div>
                    </div>
                    <div class="section-field mb-20">
                      <label class="mb-10" for="name">Email* </label>
                      <input type="email" placeholder="Email*" class="form-control" name="email" required>
                    </div>
                    <div class="section-field mb-20">
                      <label class="mb-10" for="Password">Password* </label>
                      <input id="password" name="password" minlength="12" class="Password form-control" type="password" placeholder="Password"
                     required>
                    </div>
                    <button type="submit" name="signUpStudent" class="button btn-block">
                      <span>Signup</span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require_once('common/footer.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
<script>
  $(document).ready(function(){
    $("#loginForm").validate();
    $("#signupForm").validate();
  })
</script>
<?php require_once('common/bottom.php'); ?>