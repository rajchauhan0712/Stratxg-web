<?php
include_once('../config/connect.php');
include_once('../config/functions.php');
if(!isset($_SESSION['email']) && !isset($_SESSION['type'])){
    header('location: ../index.php');
}

if(isset($_POST['login-student'])){
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    if(empty($email) && empty($password)){
      $errors = "Both fields are required";
      $_SESSION['errors'] = $errors;
    }
    else{
      $qry ="select email, password, type FROM students_tbl WHERE email='$email'";
      $run = mysqli_query($con,$qry);
      if(mysqli_num_rows($run) > 0){
          while ($row = mysqli_fetch_array($run)) {
            if(password_verify($password,$row['password'])){
                $_SESSION['email'] = $row['email'];
                $_SESSION['type'] = $row['type'];
                session_regenerate_id();
                header('location: dashboard.php');
          }else{
            $errors = "Check your login credentials";
            $_SESSION['errors'] = $errors;
            header('location: ../login.php');
          }
        }
      }else{
        $errors = "Please Check email & password";
        $_SESSION['errors'] = $errors;
        header('location: ../login.php');
      }
    }
}