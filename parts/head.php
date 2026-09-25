<?php require_once __DIR__ . '/site-config.php'; ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="King Edward Travel — All for Egypt. Egyptian travel agency since 2005 (License 1311): Nile cruises, Cairo & Red Sea tours, transportation fleet, FIT/groups/incentives.">
    <meta name="keywords" content="King Edward Travel, Egypt tours, Nile cruise, Cairo tours, Sharm El Sheikh, Hurghada, Luxor, Aswan, Egypt travel agency">
    <meta name="author" content="King Edward Travel">

    <title><?php echo $title; ?></title>

    <?php $s = 'static.php?file='; ?>
    <!-- Fav Icon -->
    <link rel="icon" href="<?php echo $s; ?>assets/images/fav-icon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&amp;family=Source+Serif+Pro:wght@400;600&amp;display=swap" rel="stylesheet">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="<?php echo $s; ?>assets/css/flaticon_save_us.css" rel="stylesheet">  
    <link href="<?php echo $s; ?>assets/fonts/flaticon.css" rel="stylesheet">
    <link href="<?php echo $s; ?>assets/css/owl.css" rel="stylesheet">
    <link href="<?php echo $s; ?>assets/css/slick-theme.css" rel="stylesheet">
    <link href="<?php echo $s; ?>assets/css/slick.css" rel="stylesheet">
    <link href="<?php echo $s; ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $s; ?>assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="<?php echo $s; ?>assets/css/magnific-popup.css" rel="stylesheet">
    <link href="<?php echo $s; ?>assets/css/progresscircle.css" rel="stylesheet">
    <link href="<?php echo $s; ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo $s; ?>assets/css/color.css" rel="stylesheet">
    <link href="<?php echo $s; ?>assets/css/nice-select.css" rel="stylesheet">
    <link href="<?php echo $s; ?>assets/css/global.css" rel="stylesheet">
    <link href="<?php echo $s; ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo $s; ?>assets/css/swiper.min.css" rel="stylesheet">
    <link href="<?php echo $s; ?>assets/css/responsive.css" rel="stylesheet">
    <style>
        /* King Edward crown mark is square — override wide-logo slots (layout only, logo untouched) */
        .main-header .logo-box .logo a{width:auto !important;height:auto !important;}
        .main-header .logo-box .logo img{height:62px !important;width:auto !important;max-width:none;}
        .sticky-header .logo-box .logo img{height:52px !important;width:auto !important;}
        .footer__logo img{max-width:190px !important;width:100%;height:auto;}
        .nav-logo img{height:55px !important;width:auto !important;}
        .offcanvas-title img{height:60px !important;width:auto !important;}
        .testimonial-initial{display:flex !important;align-items:center;justify-content:center;background:#0f2a5c;color:#E9C379;font-size:32px;font-weight:700;font-family:Georgia,serif;}
        .tour-guid-image{display:flex !important;align-items:center;justify-content:center;background:linear-gradient(135deg,#eef4fa,#dfe9f4) !important;min-height:150px;}
        .team-initial{width:92px !important;height:92px !important;border-radius:50% !important;font-size:38px !important;}
        .trust-badge{display:flex !important;align-items:center;gap:8px;height:auto !important;font-weight:600;color:#0f2a5c;white-space:nowrap;}
        .trust-badge i{color:#FE7524;}
    </style>
   <?php echo (isset($css) ? $css   : '')?>
</head>