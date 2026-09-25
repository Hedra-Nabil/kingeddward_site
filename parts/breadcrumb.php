<!-- common banner -->
<section class="common-banner">
    <div class="common-banner-image" style="background: url(static.php?file=assets/images/banner/common-banner-05.jpg);"></div>

    <div class="common-banner-title">
        <a href='index.php'>Home </a>
        <?php if (!empty($subHeading)) : ?>  
        <span>/ <?php echo $subHeading;?></span>
        <?php endif; ?>
        <?php if (!empty($mainHeading)) : ?>  
        <h3><?php echo $mainHeading;?></h3>
        <?php endif; ?>
    </div>
</section>
<!-- common banner -->