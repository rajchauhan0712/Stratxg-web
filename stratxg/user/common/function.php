<?php

function log_out(){
session_set_cookie_params(0);
session_start();
session_destroy();
$loc = 'index.php';
echo ("<script>location.href='$loc'</script>");
}

?>