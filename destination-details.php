<!DOCTYPE html>
<html lang="en">

<?php $title='Luxor — Open-Air Museum of Egypt | King Edward Travel'?>
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
      $mainHeading='Luxor — World’s Greatest Open-Air Museum';
      $subHeading='Destination Details';
   ?>
   <?php include './parts/breadcrumb.php'?>   

        <!-- destination details -->
        <section class="destination-details">
            <div class="service-icon1">
                <img src="static.php?file=assets/images/icons/s-1.png" alt="icon">
            </div>
            <div class="add-spring">
                <img src="static.php?file=assets/images/shape/spring.png" alt="shape">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="destination-details-left-container">
                            <div class="destination-common-title">
                                <h4>Visiting Luxor & Karnak</h4>
                            </div>
                            <p>No site on earth concentrates 4,000 years of temples and tombs like Luxor. On the East Bank rise Karnak — the largest temple complex ever built — and Luxor Temple glowing at night; across the Nile lie the Valley of the Kings, Hatshepsut’s mortuary temple and the Colossi of Memnon.</p>
                            <p>Add a sunrise hot-air balloon over the Theban hills, a felucca at sunset and our Egyptologist guides, and Luxor becomes the highlight of every King Edward itinerary — whether on a Nile cruise or an overland tour.</p>
                            <div class="destination-details-image">
                                <a href='destination.php'><img src="static.php?file=assets/images/egypt/karnak.jpg" alt="image"></a>
                            </div>

                            <div class="destination-common-title">
                                <h4>Luxor With King Edward</h4>
                            </div>
                            <p>We run Luxor as day tours from Hurghada, as the heart of every Nile cruise (3, 4 or 7 nights), and as multi-day overland stays. Hotels from boutique to 5* (Old Winter Palace, Steigenberger, Hilton), private A/C transport and licensed guides throughout.</p>
                            <p>Don’t miss: Karnak’s Hypostyle Hall at opening time, the Valley of the Kings (including Tutankhamun), Hatshepsut Temple at Deir el-Bahari, Luxor Temple by night, and sunrise balloons over the west bank.</p>
                            <p>Combine Luxor with Cairo’s pyramids, Aswan and Abu Simbel, or the Red Sea — tell us your dates and our tour managers reply with the best offer within 24 hours.</p>
                            <div class="dd-image-container">
                                <div class="dd-image-flex">
                                    <a href='destination.php'><img src="static.php?file=assets/images/egypt/luxor-temple.jpg" alt="image"></a>
                                </div>
                                <div class="dd-image-flex">
                                    <a href='destination.php'><img src="static.php?file=assets/images/egypt/luxor-balloon.jpg" alt="image"></a>
                                </div>
                            </div>

                            <div class="destination-common-title">
                                <h4>Good to Know :</h4>
                            </div>
                            <span>Good to know: Luxor is 650 km south of Cairo (1 hr flight, 4 hrs by our A/C coaches from Hurghada). Plan 2–3 days minimum.</span>
                            <p>October–April brings perfect sightseeing weather (25°C days). Summer visits start at dawn to beat the heat — our guides adjust every itinerary.</p>

                            <div class="destination-common-title">
                                <h4>View On Map :</h4>
                            </div>
                            <div class="destination-map">
                                <iframe src="https://www.google.com/maps?q=Luxor,Egypt&output=embed" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Luxor map"></iframe>
                            

                            <div class="faq-accordion">
<div class="accordion" id="accordionExample">
                                    <?php require_once './parts/site-data.php'; $fi = 0; ?>
                                    <?php foreach (array_slice($KE_FAQS, 0, 3) as $f): $fi++; $hid = 'headingK' . $fi; $cid = 'collapseK' . $fi; ?>
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

                            <div class="destination-common-title">
                                <h4>Ask About Luxor:</h4>
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
                                  <button type="submit"><i class="flaticon-search"></i></button>
                                </form>
                            </div>
                            <div class="destination-right-title">
                                <h4>King Edward Tour List</h4>
                                <div class="destination-right-title-image">
                                    <img src="static.php?file=assets/images/shape/title-shape.png" alt="shape">
                                </div>
                            </div>
                            <div class="destination-right-list">
                                <?php require_once './parts/site-data.php'; ?>
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
                                        <a href='gallery.php'>Adventure (03)</a>
                                    </li>
                                    <li><div class="check-mark">
                                        <img src="static.php?file=assets/images/icons/check.png" alt="check">
                                        </div>
                                        <a href='gallery.php'>Family Adventure (03)</a>
                                    </li>
                                    <li><div class="check-mark">
                                        <img src="static.php?file=assets/images/icons/check.png" alt="check">
                                        </div>
                                        <a href='gallery.php'>Couple Tour (05)</a>
                                    </li>
                                    <li><div class="check-mark">
                                        <img src="static.php?file=assets/images/icons/check.png" alt="check">
                                        </div>
                                        <a href='gallery.php'>Popular Tour’s (03)</a>
                                    </li>
                                    <li><div class="check-mark">
                                        <img src="static.php?file=assets/images/icons/check.png" alt="check">
                                        </div>
                                        <a href='gallery.php'>Travel Vaction  (03)</a>
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
