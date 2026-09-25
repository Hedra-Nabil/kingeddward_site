<?php
require_once __DIR__ . '/site-config.php';
$header_class = $header_class ?? 'main-header style-one';
$nav_active = $nav_active ?? 'home';
function nav_cls(string $key, string $nav_active): string {
    return $nav_active === $key ? "class='active'" : "";
}
?>
<!-- main header -->
<header class="<?php echo $header_class; ?>">
    
    <div class="header-lower">
        <div class="header_bottom p_relative">
            <div class="auto_container">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo"><a href='index.php'><img src="static.php?file=assets/images/logo.png" alt="King Edward Travel — All for Egypt"></a></figure>
                    </div>
                    <div class="menu-area">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a <?php echo nav_cls('home', $nav_active); ?> href='index.php'>Home</a></li>
                                    <li><a <?php echo nav_cls('about', $nav_active); ?> href='about.php'>About </a></li>
                                    <li class="dropdown"><a <?php echo nav_cls('tours', $nav_active); ?> href='tour-package.php'>Tours </a>
                                        <ul>
                                            <li><a href='tour-package.php'>Tour Packages</a></li>
                                            <li><a href='tour-details.php'>Tour Package Details</a></li>
                                            <li><a href='destination.php'>Destinations</a></li>
                                            <li><a href='destination-details.php'>Destination Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a <?php echo nav_cls('gallery', $nav_active); ?> href='gallery.php'>Gallery</a></li>
                                    <li><a <?php echo nav_cls('faq', $nav_active); ?> href='faq.php'>FAQ</a></li>
                                    <li><a <?php echo nav_cls('contact', $nav_active); ?> href='contact.php'>Contact </a></li>   
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="header__right">
                        <div class="header-right-search">
                            <div class="header-scarce">
                                <button class="btn primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                    <i class="flaticon-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="header-right-option">
                            <select aria-label="Currency">
                                <option value="EGP">EGP</option>
                                <option value="USD">USD</option>
                                <option value="EUR">EUR</option>
                            </select>
                        </div>
                        <div class="header-right-option">
                            <select aria-label="Language">
                                <option value="en">EN</option>
                                <option value="ar">AR</option>
                                <option value="fr">FR</option>
                            </select>
                        </div>
                        <div class="header__right__button">
                            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="flaticon-menu-1"></i></button>
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasRightLabel">
                                        <img src="static.php?file=assets/images/logo.png" alt="King Edward Travel logo">
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div class="offcanvas-container">
                                        <div class="blog-icon">
                                            <img src="static.php?file=assets/images/icons/blog-icon.png" alt="icon">
                                        </div>
                                        <p>“ <?php echo SITE_ABOUT_SHORT; ?> ”</p>
                                        <p><strong><?php echo SITE_LICENSE; ?>.</strong><br><?php echo SITE_ADDRESS; ?><br><a href="mailto:<?php echo SITE_EMAIL_INFO; ?>"><?php echo SITE_EMAIL_INFO; ?></a></p>
                                        <div class="banner-media">
                                            <ul>
                                                <li><a href="<?php echo SITE_INSTAGRAM; ?>" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a></li>
                                                <li><a href="<?php echo SITE_TWITTER; ?>" aria-label="X (Twitter)"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="<?php echo SITE_LINKEDIN; ?>" aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a></li>
                                                <li><a href="<?php echo SITE_FACEBOOK; ?>" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto_container">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo"><a href='index.php'><img src="static.php?file=assets/images/logo.png" alt=""></a></figure>
                </div>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->