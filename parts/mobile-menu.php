<?php require_once __DIR__ . '/site-config.php'; ?>
<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    <nav class="menu-box">
        <div class="nav-logo"><a href='index.php'><img src="static.php?file=assets/images/logo.png" alt="King Edward Travel logo"></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li><?php echo SITE_ADDRESS; ?></li>
                <li><a href="tel:<?php echo SITE_PHONE_1; ?>"><?php echo SITE_PHONE_1; ?></a></li>
                <li><a href="mailto:<?php echo SITE_EMAIL_INFO; ?>"><?php echo SITE_EMAIL_INFO; ?></a></li>
            </ul>
        </div>
        <div class="social-links">
            <div class="banner-media">
                <ul>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- End Mobile Menu -->