<?php
include_once('../config/connect.php');
  if(!isset($_SESSION['type']) || !isset($_SESSION['email'])){
    header('location: index.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>StratXG - User Dashboard </title>
  <link rel="stylesheet" href="../template/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../template/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../template/vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="../template/css/style.css">
  <link rel="shortcut icon" href="images/favicon.png" />
