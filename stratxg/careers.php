<?php
require_once('config/connect.php');
require_once('common/top.php');
require_once('common/header.php');
if (isset($_POST['submit']) && isset($_FILES[''])) {
    $ct_name = mysqli_real_escape_string($con, $_POST['name']);
    $ct_email = mysqli_real_escape_string($con, $_POST['email']);
    $ct_message = mysqli_real_escape_string($con, $_POST['message']);
    $ct_sub = "CV from " . $ct_name;
    $tmp_name    = $_FILES['my_file']['tmp_name'];
    $name        = $_FILES['my_file']['name'];
    $size        = $_FILES['my_file']['size'];
    $type        = $_FILES['my_file']['type'];
    if (empty($ct_name) && empty($ct_email) && empty($ct_sub)) {
        $error_ct = "All * fields are compulsory";
    } else {
        $handle = fopen($tmp_name, "r");  // set the file handle only for reading the file 
        $content = fread($handle, $size); // reading the file 
        fclose($handle);
        $encoded_content = chunk_split(base64_encode($content));
        $boundary = md5("random");
        $to = "Stratxg <careers@stratxg.com>" . "\r\n";
        $subject = $ct_sub;
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "from: " . $ct_name . " <" . $ct_email . ">" . "\r\n";
        $headers .= "Content-Type: multipart/mixed;\r\n";
        $headers .= "boundary = $boundary\r\n";
        $message = $ct_message;
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $body .= chunk_split(base64_encode($message));
        $body .= "--$boundary\r\n";
        $body .= "Content-Type: $file_type; name=" . $file_name . "\r\n";
        $body .= "Content-Disposition: attachment; filename=" . $file_name . "\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n";
        $body .= "X-Attachment-Id: " . rand(1000, 99999) . "\r\n\r\n";
        $body .= $encoded_content; // Attaching the encoded file with email 
        $sent = mail($to, $subject, $body, $headers);
        if ($sent) {
            $success_ct = "Your CV has submitted successfully";
            unlink($name);
        } else {
            $success_ct = "Fail to submit form";
        }
    }
}
?>
<style>
    .offers1 p {
        font-size: 18px;
        font-weight: 600;
    }

    .offer1 {
        background: url(images/img/business-icon.png) -46px 392px;
        width: 150px;
        height: 150px;
        margin: auto;
    }

    .offer2 {
        background: url(images/img/business-icon.png) -46px 174px;
        width: 150px;
        height: 150px;
        margin: auto;
    }

    .offer3 {
        background: url(images/img/business-icon.png) 182px -14px;
        width: 150px;
        height: 150px;
        margin: auto;
    }

    .offer4 {
        background: url(images/img/business-icon.png) -46px -12px;
        width: 150px;
        height: 150px;
        margin: auto;
    }

    .offer5 {
        background: url(images/img/business-icon.png) -248px -204px;
        width: 150px;
        height: 150px;
        margin: auto;
    }

    .offer6 {
        background: url(images/img/business-icon.png) -432px -210px;
        width: 150px;
        height: 150px;
        margin: auto;
    }

    .offer7 {
        background: url(images/img/business-icon.png) -242px 176px;
        width: 150px;
        height: 150px;
        margin: auto;
    }

    .offer8 {
        background: url(images/img/business-icon.png) -428px -12px;
        width: 150px;
        height: 150px;
        margin: auto;
    }

    .offer9 {
        background: url(images/img/business-icon.png) -46px -212px;
        width: 150px;
        height: 150px;
        margin: auto;
    }

    .offer10 {
        background: url(images/img/business-icon.png)-244px -400px;
        width: 150px;
        height: 150px;
        margin: auto;
    }

    .offer11 {
        background: url(images/img/business-icon.png) -248px -12px;
        width: 150px;
        height: 150px;
        margin: auto;
    }

    .offer12 {
        background: url(images/img/business-icon.png) 182px 390px;
        width: 150px;
        height: 150px;
        margin: auto;
    }
</style>
<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(images/bg/careers.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-name">
                    <h1>careers</h1>
                    <p>Harness Your Priceless Passion</p>
                </div>
                <ul class="page-breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><span>careers</span> </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="careers white-bg page-section-ptb">
    <div class="container">
        <div class="row mt-50 mb-50">
            <div class="col-md-12 offers1">
                <div class="section-title">
                    <h2>What we offer | Our Fuel for success | </h2>
                </div>
                <div class="row text-center">
                    <div class="col-md-3">
                        <div class="offer1"></div>
                        <p class="text-bold">Venturous Entrepreneur</p>
                    </div>
                    <div class="col-md-3">
                        <div class="offer2"></div>
                        <p>Trustworthy Devotee</p>
                    </div>
                    <div class="col-md-3">
                        <div class="offer3"></div>
                        <p>Experienced Motivator</p>
                    </div>
                    <div class="col-md-3">
                        <div class="offer4"></div>
                        <p>Dependable Optimizer</p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-3">
                        <div class="offer5"></div>
                        <p>Dynamic Realist</p>
                    </div>
                    <div class="col-md-3">
                        <div class="offer6"></div>
                        <p>Change Ambassador</p>
                    </div>
                    <div class="col-md-3">
                        <div class="offer7"></div>
                        <p>Purposeful Trailblazer</p>
                    </div>
                    <div class="col-md-3">
                        <div class="offer8"></div>
                        <p>Whimsical Loyalist</p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-3">
                        <div class="offer9"></div>
                        <p>Fearless Opportunist</p>
                    </div>
                    <div class="col-md-3">
                        <div class="offer10"></div>
                        <p>Ambitious Visionary</p>
                    </div>
                    <div class="col-md-3">
                        <div class="offer11"></div>
                        <p>Persistent Ideator</p>
                    </div>
                    <div class="col-md-3">
                        <div class="offer12"></div>
                        <p>Inquisitive Facilitator</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-50 mb-50">
            <div class="col-md-8">
                <div class="section-title">
                    <h2>What we do? | Transforming every challenge into a business opportunity</h2>
                </div>
                <p>A Young & Digital Consulting Company Reinvigorating Growth through Strategic Repositioning in Education, Healthcare & Infrastructure and utilities Sectors. <br><br>
                    We Transform Organization from Non-Compliant Business Unit to Profitable Venture, using our Core Competencies - Knowledge Services, Multiple Sectors Best Practices Expertise, Ground Zero Execution Experience, Thought Leadership in Industries Re-engineering, Compliance Management and Business Model Consulting.<br><br>
                    Our sharp delivery focus on enabling New Ways of doing business, Staying at the forefront of Global Business Innovations, Embracing Digital Business Transformation, Leading the Disruptions to keep our clients profitable and relevant.
                </p>
            </div>
            <div class="col-md-4">
                <img src="images/img/Landing_hero_careers.png" class="img-responsive ">
                <img src="images/gallery/89.jpg" class="img-responsive img-rounded">

            </div>
        </div>
        <div class="row mt-50 mb-50">
            <div class="col-md-4">
                <div class="section-title">
                    <h2>Who are we | Where business thinking stops, ours starts</h2>
                </div>
                <ul>
                    <li>Strategy & Business Modeling </li>
                    <li>Project Management Consulting </li>
                    <li>Business Transformation </li>
                    <li>Technology Integration </li>
                    <li>Process Excellence </li>
                    <li>Digital Transformation </li>
                    <li>Robotic Process Automation</li>
                    <li>IOT Enabled Solutions </li>
                    <li>Design Thinking </li>
                </ul>
            </div>
            <div class="col-md-8">
                <img src="images/gallery/91.jpg" class="img-responsive img-rounded">
            </div>
        </div>
        <div class="row mt-50 mb-50">
            <div class="col-md-6">
                <img src="images/gallery/92.png" class="img-responsive img-rounded">
            </div>
            <div class="col-md-6">
                <div class="section-title">
                    <h2>What will you learn? | Distruption | Innovation | Stategy | Technology | Consulting | Risk | Compliance | Organization Building | Process | Project | Data Science
                    </h2>
                </div>
                <ul>
                    <li>Partnering in Profitable and Sustainable Growth </li>
                    <li>Understanding Business Critical Challenges </li>
                    <li>Business and Digital Solutions </li>
                    <li>Leading to Higher Revenues </li>
                    <li>Eliminating Revenue Leakages </li>
                    <li>Cost Optimization & Productivity enhancement </li>
                    <li>Sustainable Business Model –Existing and New
                    </li>
                </ul>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title text-center">
                    <h6 class="">Do you want to join a team of passionate professionals for learning and growth? </h6>
                    <h2 class="title-effect">You are one step away from your career growth story</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- <div class="col-lg-12 col-md-12">
                <div class="accordion shadow">
                    <div class="acd-group">
                        <a class="acd-heading" href="#">Frontend Developer</a>
                        <div class="acd-des">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <span class="mb-10"><b>Location: </b>London </span>
                                    <span><b>Department: </b>Development </span>
                                    <p class="mt-20">Aenean sollicitudin lorem ipsum dolor sit amet of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <h4 class="mb-20 theme-color">What we offer</h4>
                                    <ul class="list list-unstyled mb-30">
                                        <li><i class="fa fa-angle-right"></i> Sit amet of Lorem Ipsum lorem ipsum dolor. </li>
                                        <li><i class="fa fa-angle-right"></i> Proin gravida nibh vel velit auctor aliquet. </li>
                                        <li><i class="fa fa-angle-right"></i> Aenean sollicitudin, lorem quis bibendum auctor</li>
                                        <li><i class="fa fa-angle-right"></i> nisi elit consequat ipsum nec sagittis</li>
                                        <li><i class="fa fa-angle-right"></i> sem nibh id elit. Duis sed odio sit amet nibh</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <h4 class="mb-20 theme-color">What we offer</h4>
                                    <ul class="list list-unstyled mb-30">
                                        <li><i class="fa fa-angle-right"></i> Of Lorem Ipsum lorem ipsum dolor sit amet. </li>
                                        <li><i class="fa fa-angle-right"></i> Proin gravida nibh vel velit auctor aliquet. </li>
                                        <li><i class="fa fa-angle-right"></i> Aenean sollicitudin, lorem quis bibendum auctor</li>
                                        <li><i class="fa fa-angle-right"></i> nisi elit consequat ipsum nec sagittis</li>
                                        <li><i class="fa fa-angle-right"></i> sem nibh id elit. Duis sed odio sit amet nibh</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="acd-group">
                        <a class="acd-heading" href="#">Technical Support Representative</a>

                        <div class="acd-des">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <span class="mb-10"><b>Location: </b>London </span>
                                    <span><b>Department: </b>Development </span>
                                    <p class="mt-20">Aenean sollicitudin lorem ipsum dolor sit amet of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <h4 class="mb-20 theme-color">What we offer</h4>
                                    <ul class="list list-unstyled mb-30">
                                        <li><i class="fa fa-angle-right"></i> Sit amet of Lorem Ipsum lorem ipsum dolor. </li>
                                        <li><i class="fa fa-angle-right"></i> Proin gravida nibh vel velit auctor aliquet. </li>
                                        <li><i class="fa fa-angle-right"></i> Aenean sollicitudin, lorem quis bibendum auctor</li>
                                        <li><i class="fa fa-angle-right"></i> nisi elit consequat ipsum nec sagittis</li>
                                        <li><i class="fa fa-angle-right"></i> sem nibh id elit. Duis sed odio sit amet nibh</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <h4 class="mb-20 theme-color">What we offer</h4>
                                    <ul class="list list-unstyled mb-30">
                                        <li><i class="fa fa-angle-right"></i> Of Lorem Ipsum lorem ipsum dolor sit amet. </li>
                                        <li><i class="fa fa-angle-right"></i> Proin gravida nibh vel velit auctor aliquet. </li>
                                        <li><i class="fa fa-angle-right"></i> Aenean sollicitudin, lorem quis bibendum auctor</li>
                                        <li><i class="fa fa-angle-right"></i> nisi elit consequat ipsum nec sagittis</li>
                                        <li><i class="fa fa-angle-right"></i> sem nibh id elit. Duis sed odio sit amet nibh</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-sm-12">
                    <?php if (isset($success_ct)) {
                        echo '<div class="alert alert-success">' . $success_ct . '</div>';
                    } ?>
                    <h3 class="text-center">Email at <a href="mailto:careers@stratxg.com">careers@stratxg.com</a></h3>
                    <h3 class="text-center">Apply for Position</h3>
                    <form class="form-horizontal" id="contactform" role="form" method="post" action="php/contact-form.php">
                        <div class="contact-form clearfix">
                            <div class="section-field">
                                <label for="name">Your Name*</label>
                                <input type="text" class="form-control" id="name" placeholder="Your Name" name="name">
                            </div>
                            <div class="section-field">
                                <label>Your Email*</label>
                                <input type="text" class="form-control" placeholder="Your Email" name="email">
                            </div>
                            <div class="section-field">
                                <label>Your Mobile Number*</label>
                                <input type="text" placeholder="Your Mobile*" class="form-control" name="phone">
                            </div>
                            <div class="section-field">
                                <label>Position Applying*</label>
                                <input type="text" class="form-control" placeholder="Apply for your passion" name="pos">
                            </div>
                            <div class="section-field">
                                <label for="Message">Industry *</label>
                                <input type="text" class="form-control" placeholder="Industry" name="pos">
                            </div>
                            <div class="section-field textarea">
                                <label for="exampleInputFile">Submit your CV docx | pdf</label>
                                <input type="file" class="form-control-file  form-control" name="attachment">
                            </div>
                            <div class="section-field submit-button">
                                <button id="submit" name="submit" type="submit" value="Send" class="button"> Send your message </button>
                            </div>
                        </div>
                    </form>
                    <div id="ajaxloader" style="display:none"><img class="center-block mt-30 mb-30" src="images/pre-loader/loader-02.svg" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="theme-bg page-section-ptb">
    <div class="container-fluid col-md-offset-1">
        <div class="section-title text-center ">
            <h3 class="text-white ">Our Passion</h3>
        </div>
        <div class="row text-center">
            <div class="col-lg-12 col-md-12">
                <div class="owl-carousel" data-nav-dots="true" data-items="2" data-md-items="2" data-sm-items="2" data-xs-items="2" data-xx-items="1" data-space="20">
                    <div class="item">
                        <img class="img-responsive full-width" src="images/blog/wall1.jpg" alt="">
                        <div class="testimonial bottom_pos">
                            <div class="testimonial-info"> Passion drives perfection, life is what you make its time for success</div>
                            <div class="author-info"> Sarvesh Chauhan<strong> - <span>Sr. Software Developer </span></strong> </div>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive full-width" src="images/blog/wall3.jpg" alt="">
                        <div class="testimonial bottom_pos">
                            <div class="testimonial-info"> Passion drives perfection, life is what you make its time for success</div>
                            <div class="author-info"> Mohenish Gupta<strong> - <span>Chief Digital Officer </span></strong> </div>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive full-width" src="images/blog/wall2.jpg" alt="">
                        <div class="testimonial bottom_pos">
                            <div class="testimonial-info"> One person with passion is better than forty people merely interested, Keep the fear out and take a powerful stand</div>
                            <div class="author-info"> <strong>Jagroop Singh - <span> Chief Strategy & Transformation Officer</span></strong> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once('common/footer.php'); ?>

<script type="text/javascript" src="revolution/js/revolution-custom.js"></script>

<?php require_once('common/bottom.php'); ?>