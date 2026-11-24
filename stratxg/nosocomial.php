<?php
require_once('common/top.php');
require_once('common/header.php');
?>
<style>
    .circle-bar ul {
        display: flex;
        align-content: space-around;
        align-items: flex-start;
        flex-wrap: wrap;
    }

    .circle-bar li {
        display: flex;
        flex-direction: row;
        justify-content: center;
        text-align: center;
        height: 170px;
        width: 170px;
        background: #6a27832e;
        font-size: 14px;
        border: 5px solid #6a2784;
        border-radius: 50%;
        padding-top: 42px;
        padding-left: 2px;
        margin: 0 10px 10px 0;
    }
</style>
<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}'
    style="background-image: url(images/bg/13.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-name">
                    <h1>Nosocomial</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="col-md-12 text-center">
                        <h2 class="title-effect ">Nosocomial</h2>
                        <img src="images/nosocomial.png" class="img-responsive" alt="" >
                        <p style="font-size: 24px;" class="text-center">When germs enter a person's body and multiply, causing illness, organ and tissue damage, ordisease, it is known as infection </p>
                        <p style="font-size: 20px;" class="text-center">Hospital care associated infection(HAI)	is	an	infection	that	the	patient	develops during hospital stay ; that was not existing or incubating at the time of admission or that becomes evident after the patient is discharged from the hospitals
                        </p>
                </div>
                    <h3 class="text-center">Healthcare Associated Infections </h3>
                <div class="col-md-6 circle-bar mt-30">
                    <ul>
                        <li>Develops after 48-72 Hours after admission</li>
                        <li>Develops within 48 Hours after discharge</li>
                        <li>Excluding infections that have incubation period less than 48-72 Hours </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="images/0.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-md-6 col-md-offset-3 mt-50">
                    <h3 class="text-center ">Hospital Acquired Infection Includes</h3>
                    <img src="images/Nursing.jpg" class="img-responsive" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once('common/footer.php'); ?>
<?php require_once('common/bottom.php'); ?>