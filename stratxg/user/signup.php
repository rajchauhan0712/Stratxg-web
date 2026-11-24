<?php
include_once('../config/connect.php');
if(!isset($_SESSION['email']) && !isset($_SESSION['type'])){
	header('location: ../index.php');
}
if(isset($_POST['signUpStudent'])){
    $fname = mysqli_real_escape_string($con,$_POST['firstName']);
    $lname = mysqli_real_escape_string($con,$_POST['lastName']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    if(empty($email) && empty($password) && empty($fname) && empty($lname)){
      $errors = "All fields are required";
      $_SESSION['errors'] = $errors;
    }
    else{
      $encPass = password_hash($password, PASSWORD_BCRYPT);
      $qry = mysqli_query($con, "insert into students_tbl (firstName, secondName, email, password) values ('$fname', '$lname', '$email','$encPass')");
      if($qry){
        $success = "Account successfully created";
        $_SESSION['success'] = $success;
				header('location: ../login.php');
      }else{
        $errors = "Something went wrong try again";
        $_SESSION['errors'] = $errors;
				header('location: ../login.php');
      }    
    }
}