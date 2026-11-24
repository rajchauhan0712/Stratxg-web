<?php   
require_once('common/top.php');
require_once('common/header.php'); 
require_once('common/sidebar.php'); 

$getEmail = $_SESSION['email'];
$qry = mysqli_query($con,"select * from students_tbl where email='$getEmail'");
if(mysqli_num_rows($qry) > 0){
  $row = mysqli_fetch_array($qry);
  $studId = $row['id'];
  $fname = $row['firstName'];
  $lname = $row['secondName'];
  $email = $row['email'];
}
if(isset($_POST['updateStudent'])){
  $fname = mysqli_real_escape_string($con,$_POST['fname']);
  $lname = mysqli_real_escape_string($con,$_POST['lname']);

  if(empty($fname) || empty($lname)){
    $errors = "All fields are required";
    $_SESSION['errors'] = $errors;
  }else{
    $qry = mysqli_query($con, "update students_tbl SET firstName = '$fname', secondName='$lname' where id='$studId' ");
    if($qry){
      $success = "Details updated";
      $_SESSION['success'] = $success;
    }else{
      $errors = "Something went wrong try again";
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
          <h4 class="card-title">Edit Profile</h4>
          <form class="form-sample" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST"
            id="studentDetail" >
            <div class="row">
              <div class="col-md-6">
                <label for="">First Name</label>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="First Name" name="fname" id="fname"
                    value="<?= $fname; ?>" required>
                </div>
              </div>
              <div class="col-md-6">
                <label for="">Last Name</label>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Last Name" name="lname" id="lname"
                    value="<?= $lname; ?>" required>
                </div>
              </div>
              <div class="col-md-6">
                <label for="">Email</label>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email" name="email" id="email" disabled
                    value="<?= $email; ?>" required>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-success mr-2" name="updateStudent">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php require_once('common/fotter.php');  ?>
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script>
  <script>
    $("#studentDetail").validate();
  </script>
  <?php require_once('common/bottom.php');  ?>