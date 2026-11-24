<?php
include_once('config.php');
$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE) ;
if(!$con){die("Database Not Connected");}
session_start();
?>