<?php
include_once('../config/connect.php');

if(isset($_POST['biomedical'])) {
    $ct_name = mysqli_real_escape_string($con, $_POST['name']);
    $ct_email = mysqli_real_escape_string($con, $_POST['email']);
    $ct_message = mysqli_real_escape_string($con, $_POST['message']);
    $ct_sub = "Bio Medical Waste Management";
    if (empty($ct_name) && empty($ct_email) && empty($ct_sub)) {
      $error_ct = "All * fields are compulsory";
    } else {
      $to = "Stratxg <info@stratxg.com>" . "\r\n";
      $subject = $ct_sub;
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers .= "from: " . $ct_name . " <" . $ct_email . ">" . "\r\n";
      $message = $ct_message;

      $to1 = $ct_name . " <" . $ct_email . ">" . "\r\n";
      $subject1 = "Bio Medical Waste Management Registration";
      $headers1 = "MIME-Version: 1.0" . "\r\n";
      $headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers1 .= "from: StratXG " ."support@stratxg.com" . "\r\n";
      $message1 = nl2br("Thank you for registering with Stratxg for Bio Medical Waste Management Workshop. \n
      Your Registration number is BMW/2020/TISS/".rand(1,999)."  \n
      Your registration will be confirmed subject to payment realization. \n\n\n
      This is auto generated mail, please do not reply \n\n\n
      Regards
      Team StratXG
      ");
      $message1 .= '<img src="http://stratxg.com/images/logo.png" alt="" style="width: 260px;"/>';

      $sent = mail($to, $subject, $message, $headers);
     
      if($sent) {
        mail($to1,$subject1,$message1,$headers1);
        $success_ct = "Your message has submitted successfully";
        $_SESSION['msg'] = $success_ct;
        header('location: ../index.php');
      } else {
        $success_ct = "Fail to submit form";
        $_SESSION['msg'] = $success_ct;
        header('location: ../index.php');
      }
    }
}


if(isset($_POST['internship']))
{ 
    $ct_name = mysqli_real_escape_string($con, $_POST['name']);
    $ct_email = mysqli_real_escape_string($con, $_POST['email']);
    $ct_phone = mysqli_real_escape_string($con, $_POST['phone']);
    $ct_message = mysqli_real_escape_string($con, $_POST['message']);
    $ct_batch = mysqli_real_escape_string($con, $_POST['batch']);
    $ct_edu = mysqli_real_escape_string($con, $_POST['edu_qual']);
    $ct_sub = mysqli_real_escape_string($con, $_POST['sub']);
    $ct_inst = mysqli_real_escape_string($con, $_POST['inst']);

if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
		$success_ct = "Please check the the captcha form";
        	$_SESSION['msg'] = $success_ct;
        	return header('location: ../index.php');
          
        }
        $secretKey = getenv('RECAPTCHA_SECRET_KEY') ?: '';
        $ip = $_SERVER['REMOTE_ADDR'];
        // post request to server
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);
        // should return JSON with success as true
        if(!$responseKeys["success"]) {
 		$success_ct = "Fail to submit form";
        	$_SESSION['msg'] = $success_ct;
        	return header('location: ../index.php');

        } 
	
	  if (empty($ct_name) && empty($ct_email) && empty($ct_sub)) {
      $error_ct = "All * fields are compulsory";
    } else {

      if($ct_sub ==1){
        $sub = "Application for Lean SIX Sigma training";
        $ct_inst= '';
      }elseif($ct_sub ==2){
        $sub = "Application for Advance Excel training";
        $ct_inst= '';
      }elseif($ct_sub ==3){
        $sub = "Application for Project Management training";
        $ct_inst= '';
      }elseif($ct_sub ==4){
        $sub = "Application for Emotional Intelligence";
      }elseif($ct_sub ==5){
        $sub = "Webnair on Relationship Management - 29th May 4PM- 6PM";
      }elseif($ct_sub ==6){
        $sub = "Digital HR Training & Certification";
      }elseif($ct_sub ==7){
        $sub = "Application for Lean SIX Sigma Green Belt training";
      }elseif($ct_sub ==8){
	$sub = "Application for Lean SIX Sigma Yellow Belt training (Bangladesh)";
      }

	if($ct_sub ==8){
      $to = "Stratxg <careers@stratxg.com>, <training@getcoitservices.com>" . "\r\n";
}else{
	$to = "Stratxg <careers@stratxg.com>" . "\r\n";
}
      $subject = $sub;
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers .= "from: " . $ct_name . " <" . $ct_email . ">" . "\r\n";

      $message = nl2br("Name: $ct_name \r\n Phone: $ct_phone \r\n Email: $ct_email \r\n  Education : $ct_edu \r\n Address: $ct_message \r\n \n  \r\n Batch Selected: $ct_batch \n Insitute: $ct_inst \n"  );

 $to1 = $ct_name . " <" . $ct_email . ">" . "\r\n";
      $subject1 = $sub;
      $headers1 = "MIME-Version: 1.0" . "\r\n";
      $headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      
      
	      $headers1 .= "from: StratXG " ."support@stratxg.com" . "\r\n";
     

      if($ct_sub == 1){
        $message1 = nl2br("Thank you for registering with Stratxg Lean Six Sigma (Yellow Belt) \n\n Your Batch No : LEAN-XG-2020 \n
        Kindly make a paytm or UPI payments of Rs.1499 to this Number:- 9930715001 and share your Screenshots to below email \n\n
        For any query call above number or email us at careers@stratxg.com \n\n\n
        Regards
        Team StratXG
        ");
      }elseif($ct_sub == 2){
        $message1 = nl2br("Thank you for registering with Stratxg Advance Excel Training Program \n\n Batch Selected: $ct_batch \n
        Kindly make a paytm or UPI payments of Rs.1199 to this Number:- 9930715001 and share your Screenshots to below email \n\n
        For any query call above number or email us at careers@stratxg.com \n\n\n
        Regards
        Team StratXG
        ");
      }elseif($ct_sub == 3){
        $message1 = nl2br("Thank you for registering with Stratxg Project Management Program \n\n Batch Selected: $ct_batch \n
        Kindly make a paytm or UPI payments of Rs.1499 to this Number:- 9930715001 and share your Screenshots to below email \n\n
        For any query call above number or email us at careers@stratxg.com \n\n\n
        Regards
        Team StratXG
        ");
      }
      elseif($ct_sub == 4){
        $message1 = nl2br("Greeting ! \n Thank you for registering at  StratXG for Emotional Intelligence Session \n Batch Selected: $ct_batch \n
        Registeration Fee: \n Kindly make a payment of Rs 299 using below modes \n Payment Models :  \nPaytm, Google Pay or UPI at Mobile No 9930715001 and share your Screenshots to below email careers@stratXG.com
        Or You can pay through NEFT/Internet Banking Transfer at \n
        Account Holder: STRATXG CONSULTING PRIVATE LIMITED \n Account Number: 50200040522822 \n IFSC: HDFC0001106 \n Branch: BORIVILI EAST - STATION EAST \n
        For any query call Mobile :  9930715001, 9910076235 or email us at careers@stratxg.com \n
        Happy Learning ! \n
        Team StratXG \n
        ");
      }elseif($ct_sub == 5){
        $message1 = nl2br("Greeting ! \n Thank you for registering at  StratXG for Webnair on Relationship Management - 29th May 4PM- 6PM \n Batch Selected: $ct_batch \n
        Registeration Fee: \n Kindly make a payment of Rs 299 using below modes \n Payment Models :  \nPaytm, Google Pay or UPI at Mobile No 9930715001 and share your Screenshots to below email careers@stratXG.com
        Or You can pay through NEFT/Internet Banking Transfer at \n
        Account Holder: STRATXG CONSULTING PRIVATE LIMITED \n Account Number: 50200040522822 \n IFSC: HDFC0001106 \n Branch: BORIVILI EAST - STATION EAST \n
        For any query call Mobile :  9930715001, 9910076235 or email us at careers@stratxg.com \n
        Happy Learning ! \n
        Team StratXG \n
        ");
      }elseif($ct_sub == 6){
       $message1 = nl2br("Greeting ! \n Thank you for registering at  StratXG for Digital HR Training & Certification \n Batch Selected: $ct_batch \n 
        Registeration Fee: \n Kindly make a payment of Rs 1500 using below modes \n Payment Models :  \nPaytm, Google Pay or UPI at Mobile No 9930715001 and share your Screenshots to below email careers@stratXG.com
        Or You can pay through NEFT/Internet Banking Transfer at \n
        Account Holder: STRATXG CONSULTING PRIVATE LIMITED \n Account Number: 50200040522822 \n IFSC: HDFC0001106 \n Branch: BORIVILI EAST - STATION EAST \n
        For any query call Mobile :  9930715001, 9910076235 or email us at careers@stratxg.com \n
        Happy Learning ! \n
        Team StratXG \n
        ");
      }
elseif($ct_sub == 7){
        $message1 = nl2br("Greeting ! \n Thank you for registering at  StratXG for Lean Six Sigma Green Belt \n Batch Selected: $ct_batch \n
        For any query call Mobile :  9930715001, 9910076235 or email us at careers@stratxg.com \n
        Happy Learning ! \n
        Team StratXG \n
        ");
      }elseif($ct_sub == 8){
        $message1 = nl2br("Greetings ! \n
		Thank you for registering at StratXG Getco Center Of Excellence for Lean Six Sigma Yellow Belt Training \n
		You can go ahead and make payment using below \n
		Cash at Center or bKash : 01711542766 \n\n
		Course Fee : 2,999 BDT \n
		For any query contact \n
		Phone : 017 99985444 \n
		Email : training@getcoitservices.com \n
		Email : careers@stratxg.com \n
        ");
      }
      $message1 .= '<img src="http://stratxg.com/images/logo.png" alt="" style="width: 260px;"/>';

      $sent = mail($to, $subject, $message, $headers);
     
      if($sent) {
        mail($to1,$subject1,$message1,$headers1);
        $success_ct = "Your message has submitted successfully";
        $_SESSION['msg'] = $success_ct;
        header('location: http://stratxg.com/index.php#success_modal');
      } else {
        $success_ct = "Fail to submit form";
        $_SESSION['msg'] = $success_ct;
        header('location: ../index.php');
      }
    }
	
} 

if(isset($_POST['DA'])) {
  $ct_name = mysqli_real_escape_string($con, $_POST['name']);
    $ct_email = mysqli_real_escape_string($con, $_POST['email']);
    $ct_message = mysqli_real_escape_string($con, $_POST['phone']);
    $ct_sub = "Data Science & Analytics Expert  Training and Certification";
    if (empty($ct_name) && empty($ct_email) && empty($ct_sub)) {
      $error_ct = "All * fields are compulsory";
    } else {
      $to = "Stratxg <info@stratxg.com>" . "\r\n";
      $subject = $ct_sub;
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers .= "from: " . $ct_name . " <" . $ct_email . ">" . "\r\n";
      $message = $ct_message;

      $to1 = $ct_name . " <" . $ct_email . ">" . "\r\n";
      $subject1 = "Data Science & Analytics Expert  Training and Certification";
      $headers1 = "MIME-Version: 1.0" . "\r\n";
      $headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers1 .= "from: StratXG " ."support@stratxg.com" . "\r\n";
      $message1 = nl2br("Thank you for registering with Stratxg for Data Science & Analytics Expert  Training and Certification. \n
      
      This is auto generated mail, please do not reply \n\n\n
      Regards
      Team StratXG
      ");
      $message1 .= '<img src="http://stratxg.com/images/logo.png" alt="" style="width: 260px;"/>';

      $sent = mail($to, $subject, $message, $headers);
     
      if($sent) {
        mail($to1,$subject1,$message1,$headers1);
        $success_ct = "Your registration has been submitted successfully";
        $_SESSION['msg'] = $success_ct;
        header('location: ../index.php');
      } else {
        $success_ct = "Fail to submit form";
        $_SESSION['msg'] = $success_ct;
        header('location: ../index.php');
      }
    }  
}