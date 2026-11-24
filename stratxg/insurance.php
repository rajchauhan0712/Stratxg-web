<?php
require_once('common/top.php');
require_once('common/header.php');
?>
<style>
  .circle-bar ul {
    display: flex;
    justify-content: space-evenly;
  }

  .circle-bar li {
    display: flex;
    flex-direction: row;
    justify-content: center;
    text-align: center;
    height: 150px;
    width: 150px;
    font-size: 14px;
    background: #6a27832e;
    border: 5px solid #6a2784;
    border-radius: 50%;
    padding-top: 47px;
    padding-left: 2px;
    margin: 0 10px 10px 0;
  }
</style>
<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(images/bg/10.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-title-name">
          <h1></h1>
          <p> </p>
        </div>
        <ul class="page-breadcrumb">
          <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
          <li><a href="#"> Domain</a> <i class="fa fa-angle-double-right"></i></li>
          <li><span>EPC </span> </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="page-section-ptb">
  <div class="container ">
    <div class="row  circle-bar">
      <div class="section-title text-center">
        <h2 class="title-effect"> Shared Services </h2>
      </div>
      <ul>
        <li>HUMAN RESOURCE</li>
        <li>FINANCE</li>
        <li>SUPPLY CHAIN</li>
        <li>INFORMATION TECHNOLOGY</li>
      </ul>
    </div>
    <div class="row circle-bar">
      <div class="section-title text-center">
        <h2 class="title-effect">Core Business Operations </h2>
      </div>
      <ul>
        <li>POINT OF SALE</li>
        <li>CUSTOMER SUPPORT</li>
        <li>CLAIM PROCESSING</li>
        <li>RENEWAL & SETTLEMENTS</li>
      </ul>
    </div>
    <div class="row circle-bar">
      <div class="section-title text-center">
        <h2 class="title-effect">Compliances / Regulatory </h2>
      </div>
      <ul>
        <li>REVENUE ASSURANCE</li>
        <li>INTERNAL AUDIT</li>
        <li>BRAND MANAGEMENT</li>
        <li>RISK & COMPLIANCE</li>
      </ul>
    </div>
  </div>
</section>
<?php require_once('common/footer.php'); ?>
<?php require_once('common/bottom.php'); ?>