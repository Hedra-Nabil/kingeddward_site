<!DOCTYPE html>
<html lang="en">

<?php $title='Contact King Edward Travel — All for Egypt'?>
<?php include './parts/head.php'?> 

<!-- page wrapper -->
<body>
    <div class="boxed_wrapper">
        
    <!-- Preloader -->
   <?php include './parts/preloader.php'?>   
        
            <?php $header_class='main-header style-one common-header'; $nav_active='contact'; include './parts/header.php'?>

        
   <!-- Search Form -->
   <?php include './parts/search.php'?>  

    <!-- mobile-menu Area-->
   <?php include './parts/mobile-menu.php'?>  


    <!-- Breadcrumb Section -->
    <?php 
       $mainHeading='Visit us in Cairo — we reply fast';
       $subHeading='Contact King Edward Travel';
    ?>
   <?php include './parts/breadcrumb.php'?>   

        <!-- contact -->
        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="destination-right-title">
                            <h4>Let's talk — All for Egypt!</h4>
                            <p>King Edward Travel (License 1311 since 2005) handles FIT, groups, incentives, conferences and corporate travel across Egypt — plus its own fleet of air-conditioned buses.</p>
                            <p>Airport pickups, private transfers and shuttles are powered by our own transport company <a href="<?php echo KE_LIMO_URL; ?>" target="_blank" rel="noopener"><strong><?php echo KE_LIMO_NAME; ?></strong></a>, running a fully integrated booking system.</p>
                            <p><strong><?php require_once './parts/site-config.php'; echo SITE_ADDRESS; ?></strong></p>
                            <div class="contact-page-info">
                                <div class="contact-number">
                                    <a href="tel:<?php echo SITE_PHONE_1; ?>" class="contact-number-icon"><i class="flaticon-phone-call"></i></a> 
                                    <ul>
                                        <li><h6>Call us</h6></li>
                                        <li><a href="tel:<?php echo SITE_PHONE_1; ?>"><?php echo SITE_PHONE_1; ?> </a></li>
                                        <li><a href="tel:<?php echo SITE_PHONE_2; ?>"><?php echo SITE_PHONE_2; ?> </a></li>
                                        <li><a href="tel:<?php echo SITE_PHONE_3; ?>"><?php echo SITE_PHONE_3; ?> </a></li>
                                        <li><a href="tel:<?php echo SITE_MOBILE_1; ?>"><?php echo SITE_MOBILE_1; ?> </a></li>
                                        <li><a href="tel:<?php echo SITE_MOBILE_2; ?>"><?php echo SITE_MOBILE_2; ?> </a></li>
                                        <li>Fax: <?php echo SITE_FAX; ?></li>
                                    </ul>
                                </div>
                                <div class="contact-number">
                                    <a href="mailto:<?php echo SITE_EMAIL_INFO; ?>" class="contact-number-icon"><i class="flaticon-email"></i></a>
                                    <ul>
                                        <li><h6>E-mail Address</h6></li>
                                        <li><a href="mailto:<?php echo SITE_EMAIL_INFO; ?>"><?php echo SITE_EMAIL_INFO; ?> </a></li>
                                        <li><a href="mailto:<?php echo SITE_EMAIL_SALES; ?>"><?php echo SITE_EMAIL_SALES; ?> </a></li>
                                        <li><a href="mailto:<?php echo SITE_EMAIL_RESERVATION; ?>"><?php echo SITE_EMAIL_RESERVATION; ?> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="destination-right-title">
                            <h4>Send us a message</h4>
                            <p>Tell us your dates, group size and dream itinerary (Nile cruise, Cairo + Red Sea, Holy Family Trail…) — our tour managers reply with the best offer.</p>
                        </div>
                        <div class="destination-form-container">                            
                            <form action="sendemail.php" method="post">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <input type="text" name="name" placeholder="Your name">
                                    </div>  
                                    <div class="col-lg-6 col-12">
                                        <input type="email" name="email" placeholder="Your Email" required>
                                    </div>  
                                    <div class="col-lg-6 col-12">
                                        <input type="text" name="phone" placeholder="Your Phone">
                                    </div>  
                                    <div class="col-lg-6 col-12">
                                        <input type="text" name="subject" placeholder="Your subject">
                                    </div>  
                                    <div class="col-12">
                                        <textarea name="message" placeholder="Write your message" required></textarea>
                                    </div>  
                                    <div class="col-12">
                                        <div class="check-box-inner">
                                        <input type="checkbox"  name="contact" value="contact">
                                        <label> Save my name, email, and website in this browser for the next time I comment.</label>
                                        </div>
                                    </div>  
                                    <div class="col-12">
                                        <button type="submit" class="submit">Send message</button>
                                    </div>  
                                </div>                                
                            </form>
                        </div>                        
                        <?php
                            if (isset($_GET['message'])) {
                                $messageType = $_GET['message'];
                                
                                if ($messageType === 'Successful') {
                                    echo '<div class="alert alert-success">Your message was sent successfully.</div>';
                                } elseif ($messageType === 'Failed') {
                                    echo '<div class="alert alert-danger">There was a problem sending your message. Please try again.</div>';
                                } elseif ($messageType === 'BotDetected') {
                                    echo '<div class="alert alert-warning">Bot submission detected and blocked.</div>';
                                }
                            }
                        ?>                        
                    </div>
                </div>
            </div>
        </section>
        <!-- contact -->

        <!-- contact map -->
        <div class="contact-map">
            <iframe src="<?php echo SITE_MAP_EMBED; ?>" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="King Edward Travel — Cairo map"></iframe>
        </div>
        <!-- contact map -->

            <?php include './parts/footer.php'?>   
        
    </div>


    <!-- All JavaScript Files-->
   <?php include './parts/script.php'?>  

</body><!-- End of .page_wrapper -->

</html>
