<?php   
require_once('common/top.php');
require_once('common/header.php'); 
require_once('common/sidebar.php'); 

$getEmail = $_SESSION['email'];
$qry = mysqli_query($con,"select * from students_tbl where email='$getEmail'");
if(mysqli_num_rows($qry) > 0){
  $row = mysqli_fetch_array($qry);
  $studId = $row['id'];
  $spassword = $row['password'];
  $email = $row['email'];
}

if(isset($_POST['updatePass'])) {
    $opass = strip_tags(stripslashes(mysqli_real_escape_string($con,$_POST['opassword'])));
    $newpass = strip_tags(stripslashes(mysqli_real_escape_string($con,$_POST['password'])));
    $confirmpass = strip_tags(stripslashes(mysqli_real_escape_string($con,$_POST['cpassword'])));
    
    if(!password_verify($opass,$spassword)){
        $errors = "Current password is incorrect";
        $_SESSION['errors'] = $errors;
    }elseif(empty($newpass) || empty($confirmpass) || empty($opass)){
        $errors = "All fields are required";
        $_SESSION['errors'] = $errors;
    }
    else{
        if($qry){
            if($newpass != $confirmpass){
                $errors = "Password does not match";
                $_SESSION['errors'] = $errors;
            }else{
                $encPass = password_hash($newpass,PASSWORD_BCRYPT);
                $query = "UPDATE students_tbl SET password = '$encPass' WHERE id = '$studId'";
                $result =mysqli_query($con,$query);
                if($result){
                    $success = "Your password has been changed successfully";
                    $_SESSION['success'] = $success;
                }
                else{
                    $errors = "Please try again.";
                    $_SESSION['errors'] = $errors;
                }
            }
        }else{
            $errors = "Password reset fail try again after sometime";
            $_SESSION['errors'] = $errors;
        }
    }
}
?>
<div class="main-panel">
    <div class="content-wrapper">
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
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Change Password</h4>
                    <form class="form-sample" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"
                        method="POST" id="studentSet">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Current Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="opassword" id="opassword"
                                            placeholder="current password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">New Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" minlength="12" name="password"
                                            id="password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Confirm Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" minlength="12" name="cpassword"
                                            id="cpassword" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success mr-2" name="updatePass">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php require_once('common/fotter.php');  ?>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script>
    <script>
        $(document).ready(function () {
            $("#studentSet").validate({
                rules: {
                    opassword: "required",
                    password: "required",
                    cpassword: {
                        equalTo: "#password"
                    }
                }
            });
        });
    </script>
    <?php require_once('common/bottom.php');  ?>