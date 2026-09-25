<?php require_once __DIR__ . '/site-config.php'; ?>
<!--footer -->
<footer class="main__footer p_relative">
    <div class="footer-location1 footer-location">
        <i class="fa-solid fa-location-dot"></i>
    </div>
    <div class="footer-location2 footer-location">
        <i class="fa-solid fa-location-dot"></i>
    </div>
    <div class="footer-location3 footer-location">
        <i class="fa-solid fa-location-dot"></i>
    </div>
    <div class="footer-location4 footer-location">
        <i class="fa-solid fa-location-dot"></i>
    </div>
    <div class="footer-location5 footer-location">
        <i class="fa-solid fa-location-dot"></i>
    </div>
    <div class="footer__middle  p_relative d_block">
        <div class="container">
            <div class="footer__middle__content">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 footer_column">
                        <div class="footer_widget left">
                            <div class="footer__logo">
                                <figure>
                                    <img src="static.php?file=assets/images/footer-logo.png" alt="King Edward Travel — All for Egypt">
                                </figure>
                            </div>
                            <div class="widget_content">
                                <p><?php echo SITE_ABOUT_SHORT; ?></p>
                                <p><strong><?php echo SITE_LICENSE; ?>.</strong></p>
                            </div>  
                            <div class="banner-media footer-media">
                                <p>Social Network:</p>
                                <ul>
                                    <li><a href="<?php echo SITE_FACEBOOK; ?>" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="<?php echo SITE_INSTAGRAM; ?>" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="<?php echo SITE_TWITTER; ?>" aria-label="X (Twitter)"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="<?php echo SITE_LINKEDIN; ?>" aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a></li>
                                </ul>
                            </div>   
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 footer_column">
                        <div class="footer_widget links_widget ml_100">
                            <div class="widget_title">
                                <h4>King Edward</h4>
                            </div>
                            <div class="widget_content">
                                <ul class="links_list clearfix">
                                    <li><a href='destination.php'>Destinations </a></li>
                                    <li><a href='about.php'>About</a></li>
                                    <li><a href='tour-package.php'>Tours</a></li>
                                    <li><a href='gallery.php'>Gallery</a></li>
                                    <li><a href='contact.php'>Contact</a></li>
                                </ul>
                            </div>
                            <div class="widget_title" style="margin-top:18px;">
                                <h4>Our Group</h4>
                            </div>
                            <div class="widget_content">
                                <ul class="links_list clearfix">
                                    <li><a href='<?php echo KE_LIMO_URL; ?>' target="_blank" rel="noopener"><?php echo KE_LIMO_NAME; ?> <span style="opacity:.7;">(our transport co.)</span></a></li>
                                    <li><a href='<?php echo KE_DMC_URL; ?>' target="_blank" rel="noopener"><?php echo KE_DMC_NAME; ?> <span style="opacity:.7;">(tour partner)</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer_column">
                        <div class="footer_widget links_widget ml_100">
                            <div class="widget_title">
                                <h4>Contact Info</h4>
                            </div>
                            <div class="widget_content">
                                <ul class="links_list clearfix">
                                    <li><?php echo SITE_ADDRESS; ?></li>
                                    <li><a href="tel:<?php echo SITE_PHONE_1; ?>"><?php echo SITE_PHONE_1; ?></a></li>
                                    <li><a href="tel:<?php echo SITE_PHONE_2; ?>"><?php echo SITE_PHONE_2; ?></a></li>
                                    <li><a href="mailto:<?php echo SITE_EMAIL_INFO; ?>"><?php echo SITE_EMAIL_INFO; ?></a></li>
                                    <li><a href="mailto:<?php echo SITE_EMAIL_RESERVATION; ?>"><?php echo SITE_EMAIL_RESERVATION; ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-12 footer_column">
                        <div class="footer-align">
                            <div class="footer_widget links_widget">
                                <div class="widget_title">
                                    <h4>Popular Tours</h4>
                                </div>
                                <div class="widget_content">
                                    <ul class="links_list clearfix">
                                        <li><a href='tour-details.php'>Classical Egypt &amp; 3 Nights Nile Cruise</a></li>
                                        <li><a href='tour-details.php'>Classical Egypt &amp; 4 Nights Nile Cruise</a></li>
                                        <li><a href='tour-details.php'>Cairo, Hurghada &amp; Nile Cruise</a></li>
                                        <li><a href='tour-details.php'>Pyramids and Petra</a></li>
                                        <li><a href='tour-details.php'>Holy Family Trip</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom p_relative">
        <div class="auto_container">
            <div class="bottom_inner  p_relative">
                <div class="copyright"><p> © <?php echo date('Y'); ?> <?php echo SITE_NAME; ?> — <?php echo SITE_SLOGAN; ?>. <?php echo SITE_LICENSE; ?>. All Rights Reserved.</p></div>
            </div>
        </div>
    </div>
</footer>
<!-- main-footer end -->  