<!DOCTYPE html>
<html lang="en">

<?php $title='Egypt Travel FAQ — King Edward Travel'?>
<?php include './parts/head.php'?> 

<!-- page wrapper -->
<body>
    <div class="boxed_wrapper">
        
    <!-- Preloader -->
   <?php include './parts/preloader.php'?>   
        
            <?php $header_class='main-header style-one common-header'; $nav_active='faq'; include './parts/header.php'?>

        
   <!-- Search Form -->
   <?php include './parts/search.php'?>  

    <!-- mobile-menu Area-->
   <?php include './parts/mobile-menu.php'?>  

    <!-- Breadcrumb Section -->
   <?php 
      $mainHeading='Egypt questions? Answered';
      $subHeading='FAQ';
   ?>
   <?php include './parts/breadcrumb.php'?>   

        <!-- destination details -->
        <section class="destination-details faq-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="destination-details-left-container">
                            <div class="faq-accordion ">
<div class="accordion" id="accordionExample">
                                    <?php require_once './parts/site-data.php'; $fi = 0; ?>
                                    <?php foreach ($KE_FAQS as $f): $fi++; $hid = 'headingK' . $fi; $cid = 'collapseK' . $fi; ?>
                                    <div class="accordion-item">
                                        <h4 class="accordion-header" id="<?php echo $hid; ?>">
                                            <button class="accordion-button<?php echo $fi === 1 ? '' : ' collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $cid; ?>" aria-expanded="<?php echo $fi === 1 ? 'true' : 'false'; ?>" aria-controls="<?php echo $cid; ?>">
                                                <?php echo $f['q']; ?>
                                            </button>
                                        </h4>
                                        <div id="<?php echo $cid; ?>" class="accordion-collapse collapse<?php echo $fi === 1 ? ' show' : ''; ?>" aria-labelledby="<?php echo $hid; ?>" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <?php echo $f['a']; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                </div>
                            </div>

                            <div class="destination-common-title">
                                <h4>Still curious? Ask us:</h4>
                            </div>
                            <div class="destination-form-container">
                                <form>
                                    <input type="text" placeholder="Your name">
                                    <input type="text" placeholder="Your phone">
                                </form>
                                <form>
                                    <input type="text" placeholder="Your subject" class="subject">
                                </form>
                                <form>
                                    <textarea placeholder="Write your Question"></textarea>
                                </form>
                                <form>
                                    <button type="submit" class="submit">Send now</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="destination-details-right-container">
                            <div class="destination-right-search">
                                <form>
                                  <input type="text" placeholder="Search..." name="search">
                                  <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <div class="destination-right-title">
                                <h4>King Edward Tour List</h4>
                                <div class="destination-right-title-image">
                                    <img src="static.php?file=assets/images/shape/title-shape.png" alt="shape">
                                </div>
                            </div>
                            <div class="destination-right-list">
                                <?php foreach (array_slice($KE_TOURS, 0, 3) as $t): ?>
                                <div class="destination-right-list-content">
                                    <div class="destination-right-list-image">
                                        <img src="<?php echo $t['img']; ?>" alt="<?php echo htmlspecialchars($t['title']); ?>">
                                    </div>
                                    <div class="destination-right-list-info">
                                        <a href='tour-details.php'><?php echo $t['title']; ?></a>
                                        <ul>
                                            <li><i class="fa-solid fa-star"></i><?php echo $t['rating']; ?> </li>
                                            <li><span><?php echo $t['days']; ?></span><h5> On Request</h5> </li>
                                        </ul>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="destination-right-title">
                                <h4>Travel Categories</h4>
                                <div class="destination-right-title-image">
                                    <img src="static.php?file=assets/images/shape/title-shape.png" alt="shape">
                                </div>
                            </div>
                            <div class="destination-category">
                                <ul>
                                    <li><div class="check-mark">
                                            <img src="static.php?file=assets/images/icons/check.png" alt="check">
                                        </div>
                                        <a href='gallery.php'>Nile Cruises (06)</a>
                                    </li>
                                    <li><div class="check-mark">
                                        <img src="static.php?file=assets/images/icons/check.png" alt="check">
                                        </div>
                                        <a href='gallery.php'>Cairo & Pyramids (05)</a>
                                    </li>
                                    <li><div class="check-mark">
                                        <img src="static.php?file=assets/images/icons/check.png" alt="check">
                                        </div>
                                        <a href='gallery.php'>Red Sea & Sinai (05)</a>
                                    </li>
                                    <li><div class="check-mark">
                                        <img src="static.php?file=assets/images/icons/check.png" alt="check">
                                        </div>
                                        <a href='gallery.php'>Luxor & Aswan (06)</a>
                                    </li>
                                    <li><div class="check-mark">
                                        <img src="static.php?file=assets/images/icons/check.png" alt="check">
                                        </div>
                                        <a href='gallery.php'>Holy Family Trail (02)</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="destination-right-title">
                                <h4>Follow us </h4>
                                <div class="destination-right-title-image">
                                    <img src="static.php?file=assets/images/shape/title-shape.png" alt="shape">
                                </div>
                            </div>
                            <div class="home-two-banner-media destination-right-media">
                                <ul>
                                    <li><a href="0.php#">FB</a></li>
                                    <li><a href="0.php#">TW</a></li>
                                    <li><a href="0.php#">LI</a></li>
                                    <li><a href="0.php#">IN</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- destination details -->

            <?php include './parts/footer.php'?>   
        
    </div>


    <!-- All JavaScript Files-->
   <?php include './parts/script.php'?>  

</body><!-- End of .page_wrapper -->

</html>
