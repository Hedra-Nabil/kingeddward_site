<!DOCTYPE html>
<html lang="en">

<?php $title='Trekee-Tours & Travel Agency PHP Template'?>
<?php include './parts/head.php'?> 

<!-- page wrapper -->
<body>
    <div class="boxed_wrapper">
        
    <!-- Preloader -->
   <?php include './parts/preloader.php'?>   
        
            <?php $header_class='main-header style-one common-header'; $nav_active='gallery'; include './parts/header.php'?>

        
   <!-- Search Form -->
   <?php include './parts/search.php'?>  

    <!-- mobile-menu Area-->
   <?php include './parts/mobile-menu.php'?>  
        
    <!-- Breadcrumb Section -->
   <?php 
      $mainHeading='Egypt in pictures';
      $subHeading='Gallery';
   ?>
   <?php include './parts/breadcrumb.php'?>   

        <!-- desire place -->
        <div class="destination-three gallery-page">
<?php require_once './parts/site-data.php'; ?>
            <div class="destination-three-slide">
                <?php foreach (array_slice($KE_GALLERY, 0, 7) as $g): ?>
                <div class="popular-ture-content place-content gallery-content">
                    <div class="popular-ture-image">
                        <img src="<?php echo $g['img']; ?>" alt="<?php echo htmlspecialchars($g['cap']); ?>">
                    </div>
                    <div class="popular-ture-overlay place-overlay">
                      <div class="popular-ture-text place-text gallery-text">
                        <a href="<?php echo $g['img']; ?>" class="lightbox-image" data-fancybox="gallery"><i class="fa-regular fa-image"></i></a>
                      </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="destination-three-slide">
                <?php foreach (array_slice($KE_GALLERY, 7) as $g): ?>
                <div class="popular-ture-content place-content gallery-content">
                    <div class="popular-ture-image">
                        <img src="<?php echo $g['img']; ?>" alt="<?php echo htmlspecialchars($g['cap']); ?>">
                    </div>
                    <div class="popular-ture-overlay place-overlay">
                      <div class="popular-ture-text place-text gallery-text">
                        <a href="<?php echo $g['img']; ?>" class="lightbox-image" data-fancybox="gallery"><i class="fa-regular fa-image"></i></a>
                      </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
                </div>
        <!-- desire place -->

        <!-- gallery video -->
        <div class="container" style="margin-top:40px;margin-bottom:40px;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="align-title">
                        <h5>Video</h5>
                        <h3>Giza Pyramid Complex — 3D Flyover</h3>
                    </div>
                    <video controls preload="metadata" poster="assets/images/egypt/pyramids-giza.jpg" style="width:100%;border-radius:12px;">
                        <source src="static.php?file=assets/videos/giza-flyover.webm" type="video/webm">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <!-- gallery video -->

            <?php include './parts/footer.php'?>   
        
    </div>


    <!-- All JavaScript Files-->
   <?php include './parts/script.php'?>  

</body><!-- End of .page_wrapper -->

</html>
