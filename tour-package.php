<!DOCTYPE html>
<html lang="en">

<?php $title='Trekee-Tours & Travel Agency PHP Template'?>
<?php include './parts/head.php'?> 

<!-- page wrapper -->
<body>
    <div class="boxed_wrapper">
        
    <!-- Preloader -->
   <?php include './parts/preloader.php'?>   
        
            <?php $header_class='main-header style-one common-header'; $nav_active='tours'; include './parts/header.php'?>

        
   <!-- Search Form -->
   <?php include './parts/search.php'?>  

    <!-- mobile-menu Area-->
   <?php include './parts/mobile-menu.php'?>  

    <!-- Breadcrumb Section -->
   <?php 
      $mainHeading='Real Egypt tours, planned by experts’s';
      $subHeading='Tour Packages';
   ?>
   <?php include './parts/breadcrumb.php'?>   

        <!-- activites -->
        <div class="tour-package">
            <div class="container">
                <div class="row">
<?php require_once './parts/site-data.php'; ?>
                    <?php foreach ($KE_TOURS as $t): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="tour-package-container">
                            <div class="activities-image">
                                <a href='tour-details.php'><img src="<?php echo $t['img']; ?>" alt="<?php echo htmlspecialchars($t['title']); ?>"></a>
                            </div>
                            <div class="activities-content">
                                <div class="tour-package-info">
                                    <div class="rating">
                                        <p><i class="fa-solid fa-star"></i> <?php echo $t['rating']; ?> </p>
                                    </div>
                                    <div class="doller">
                                        <?php echo $t['days']; ?> <span>On Request</span>
                                    </div>
                                </div>
                                <a href='tour-details.php'><?php echo $t['title']; ?></a>
                                <ul>
                                    <li><i class="flaticon-placeholder"></i> <?php echo $t['loc']; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                                        <div class="col-lg-12">
                        <div class="paigination">
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-arrow-left"></i> Prev</a></li>
                                <li><a href="#">01</a></li>
                                <li><a href="#">02</a></li>
                                <li><a href="#">03</a></li>
                                <li><a href="#">Next <i class="fa-solid fa-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- activites -->
        
            <?php include './parts/footer.php'?>   
        
    </div>


    <!-- All JavaScript Files-->
   <?php include './parts/script.php'?>  

</body><!-- End of .page_wrapper -->

</html>
