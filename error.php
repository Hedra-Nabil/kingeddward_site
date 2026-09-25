<!DOCTYPE html>
<html lang="en">

<?php $title='Page Not Found — King Edward Travel'?>
<?php include './parts/head.php'?> 

<!-- page wrapper -->
<body>
    <div class="boxed_wrapper">
        
    <!-- Preloader -->
   <?php include './parts/preloader.php'?>   
        
            <?php $header_class='main-header style-one common-header'; $nav_active=''; include './parts/header.php'?>

        
   <!-- Search Form -->
   <?php include './parts/search.php'?>  

    <!-- mobile-menu Area-->
   <?php include './parts/mobile-menu.php'?>  
        
    <!-- Breadcrumb Section -->
   <?php 
      $mainHeading='Lost in the desert?';
      $subHeading='404';
   ?>
   <?php include './parts/breadcrumb.php'?>   

        <!-- error -->
        <div class="error">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="error-container">
                            <div class="error-image">
                                <img src="static.php?file=assets/images/egypt/pyramids-giza.jpg" alt="Giza pyramids" style="border-radius:12px;">
                            </div>
                            <p>The page you are looking for drifted off like desert sand. <br> Let's get you back to Egypt's wonders.</p>
                            <div class="btn-group">
                                <div class="header-link-btn"><a class='btn-1' href='index.php'> Back To Home<span></span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- error -->

            <?php include './parts/footer.php'?>   
        
    </div>


    <!-- All JavaScript Files-->
   <?php include './parts/script.php'?>  

</body><!-- End of .page_wrapper -->

</html>
