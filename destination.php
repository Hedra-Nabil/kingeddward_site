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
      $mainHeading='Where in Egypt will you go?';
      $subHeading='Destination';
   ?>
   <?php include './parts/breadcrumb.php'?>   

        <!-- popular ture  -->
        <section class="popular-ture destnation-tour">
            <div class="service-icon1">
                <img src="static.php?file=assets/images/icons/s-1.png" alt="icon">
            </div>
            <div class="add-spring">
                <img src="static.php?file=assets/images/shape/spring.png" alt="shape">
            </div>
            <div class="container">
                <div class="row">
<?php require_once './parts/site-data.php'; ?>
                    <?php foreach ($KE_DESTINATIONS as $d): ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="popular-ture-content destnation-tour-content">
                            <div class="popular-ture-image">
                                <img src="<?php echo $d['img']; ?>" alt="<?php echo htmlspecialchars($d['name']); ?>">
                            </div>
                            <div class="popular-ture-overlay">
                              <div class="popular-ture-text">
                                <a href='destination-details.php'><?php echo $d['name']; ?></a>
                                <h6><i class="flaticon-placeholder"></i> <?php echo $d['loc']; ?> · <?php echo $d['tours']; ?></h6>
                              </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                                </div>
            </div>
        </section>
        <!-- popular ture  -->

        <!-- testimonial -->
        <section class="testimonial">
            <div class="testimonial-container">
                <div class="testimonials-carousel owl-carousel owl-theme">
                    <div class="testimonial-content">
                        <div class="test-bus">
                            <img src="static.php?file=assets/images/shape/bus.png" alt="bus">
                        </div>
                        <h5>#Happy Customer</h5>
                        <h4>What Our Customer's Say</h4>
                        <p>“ From the pyramids to our Nile cruise, everything ran like clockwork — brilliant guides, private van always on time. ”</p>
                        <div class="testimonial-info">
                            <div class="testimonial-image testimonial-initial">S</div>
                            <div class="testimonial-rating">
                                <p>Sarah M. — United Kingdom</p>
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-content">
                        <div class="test-bus">
                            <img src="static.php?file=assets/images/shape/bus.png" alt="bus">
                        </div>
                        <h5>#Happy Customer</h5>
                        <h4>What Our Customer's Say</h4>
                        <p>“ Honeymoon in Hurghada plus two cruise nights: flawless transfers and a sunset felucca we will never forget. ”</p>
                        <div class="testimonial-info">
                            <div class="testimonial-image testimonial-initial">H</div>
                            <div class="testimonial-rating">
                                <p>Hans & Petra K. — Germany</p>
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-content">
                        <h5>#Happy Customer</h5>
                        <h4>What Our Customer's Say</h4>
                        <p>“ Professional from the first email to the last goodbye at Cairo airport. Abu Simbel at sunrise was worth it. ”</p>
                        <div class="testimonial-info">
                            <div class="testimonial-image testimonial-initial">F</div>
                            <div class="testimonial-rating">
                                <p>Famille Dubois — France</p>
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial -->

        <!-- desire place -->
        <section class="place">
            <div class="place-slider owl-carousel owl-theme">
<?php require_once './parts/site-data.php'; ?>
                <?php foreach ($KE_GALLERY as $g): ?>
                <div class="popular-ture-content place-content">
                    <div class="popular-ture-image">
                        <img src="<?php echo $g['img']; ?>" alt="<?php echo htmlspecialchars($g['cap']); ?>">
                    </div>
                    <div class="popular-ture-overlay place-overlay">
                      <div class="popular-ture-text place-text">
                        <ul>
                            <li><i class="fa-solid fa-star"></i>4.8 (200+ Reviews) </li>
                            <li><span>Tours</span><span> On Request</span></li>
                        </ul>
                        <a href='destination-details.php'><?php echo $g['cap']; ?></a>
                        <h6><i class="flaticon-placeholder"></i> Egypt</h6>
                      </div>
                    </div>
                </div>
                <?php endforeach; ?>
                                </div>
            </div>
        </section>
        <!-- desire place -->

            <?php include './parts/footer.php'?>   
        
    </div>


    <!-- All JavaScript Files-->
   <?php include './parts/script.php'?>  

</body><!-- End of .page_wrapper -->

</html>
