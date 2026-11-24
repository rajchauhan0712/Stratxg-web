<?php 

define('BASE_NAME',basename($_SERVER['PHP_SELF']));
function check_url($page1 = "",$page2="",$page3="")
{
   $url_check = basename($_SERVER['PHP_SELF']);
   if( $url_check == $page1 || $url_check == $page2 || $url_check == $page3 ) echo "active";
}

?>