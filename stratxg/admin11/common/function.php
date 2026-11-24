<?php

function log_out(){
session_set_cookie_params(0);
session_start();
session_destroy();
$loc = 'index.php';
echo ("<script>location.href='$loc'</script>");
}

function escapeString($con,$postData){
    $data = mysqli_real_escape_string($con,$_POST["$postData"]);
    return $data;
}


?>