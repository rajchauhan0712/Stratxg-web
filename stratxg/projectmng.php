<?php
require_once('common/top.php');
require_once('common/header.php');
?>
 <script src="https://www.google.com/recaptcha/api.js"></script>	
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
        height: 150px;
        width: 150px;
        background: #6a27832e;
        font-size: 14px;
        border: 5px solid #6a2784;
        border-radius: 50%;
        padding-top: 47px;
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
                    <h1>Project Management Expert</h1>
                    <p>Become a Project Management Expert with Certification in Fundamentals of Industrial Projects &
                        Tools</p>
                    <span class="text-white">By Industrial Heads & Experts with PMI USA PMP, PgMP Certified
                        Professionals</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title text-center">
                    <h2 class="title-effect">Project Management Expert</h2>
                </div>
                <div class="col-md-8 col-md-offset-2 circle-bar">
                    <ul>
                        <li>4 Days Learning <br> 3hr Each Day</li>
                        <li>30 Days Project Work</li>
                        <li>For Campus to Corporate</li>
                        <li>Students & <br>Freshers</li>

                    </ul>
                </div>
                <div class="col-md-12">
                    <div class="table-responsive mt-30">
                        <table class="table  table-condensed table-hover">
                            <thead>
                                <tr>
                                    <th>Batch </th>
                                    <th>Session 1 </th>
                                    <th>Session 2</th>
                                    <th>Session 3</th>
                                    <th>Session 4</th>
                                    <th>Project Work</th>
                                    <!--<th>Final Assessment</th>-->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Batch 1</td>
                                    <td>Day 1 <br> 3pm - pm</td>
                                    <td>Day 2 <br> 3pm - 5pm</td>
                                    <td>Day 3 <br> 3pm - 5pm</td>
                                    <td>Day 4 <br> 3pm - 5pm</td>
                                    <td>One Month </td>
                                    <!--<td>20th June</td>-->
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-12 mt-50">
                    <div class="col-md-8  circle-bar">
                        <h2>Project Management Consulting</h2>
                        <ul>
                            <li>Setting up PMO</li>
                            <li>Pre-Bid to Execution</li>
                            <li>Critical Path Management</li>
                            <li>Performance</li>
                            <li>Contract Governance </li>
                            <li>Risk and Compliance Management</li>
                            <li>Stakeholder Management & Escalation</li>                            
                            <li>Procure to Pay</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <img src="images/pgm.jpeg" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-8 col-md-offset-2 mt-50">
                    <p>Kindly make a payment of Rs 1499 using Paytm, Google Pay or UPI at Mobile No 9930715001 Or You can pay through <br> NEFT/Internet Banking Transfer at <br>
                    Account Holder: STRATXG CONSULTING PRIVATE LIMITED <br> Account Number: 50200040522822 <br> IFSC: HDFC0001106 <br>Branch: BORIVILI EAST - STATION EAST</p>
                        <form class="gray-form" method="POST" action="php/bio.php">
                            <div class="form-group">
                                <input type="name" class="form-control" placeholder="Name" name="name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="phone" placeholder="Mobile No">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="edu_qual"
                                    placeholder="Education Qualification">
                            </div>
                            <input type="hidden" name="sub" value="3">
                            <div class="form-group">
                                <select name="batch" class="form-control">
                                    <option value="Batch1">Batch I</option>
                                    <option value="Batch2">Batch II</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="4" placeholder="Address" name="message"></textarea>
                            </div>
                            <div class="g-recaptcha section-field clearfix" data-sitekey="6LeJz50UAAAAAJzddsXZWZwaktiwdoienImKxMtp" ></div>
                            <button type="submit" class="button" name="internship">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
</section>
<?php require_once('common/footer.php'); ?>
<?php require_once('common/bottom.php'); ?>