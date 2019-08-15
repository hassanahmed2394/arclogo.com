<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us- ArcLogo</title>
<meta name="keywords" content="">
<meta name="description" content="Logo Designing, Best Logo Designing, Web Designing, Best Logo Packages">


<?php
$srcurl = "includes/";
$basesurl = "assets/";
?>

<?php
$style = $_SERVER['HTTP_HOST']; 
$style = $srcurl."style.php"; 
include_once($style); 
?>

<?php
$urhere = "contact";
?>


</head>
<body class="inner-pages contactpg">
<?php
$header = $_SERVER['HTTP_HOST']; 
$header = $srcurl."header.php"; 
include_once($header); 
?>



<section class="oddinner-banner d-flex" style="background-image: url(<?php echo $basesurl;?>images/banners/contact-banner.png);">
  <div class="container align-self-center">
    <div class="row">
      <div class="col-lg-12">
        <div class="inner-banner-content">
          <h3>Get in touch</h3>
          <p>Want to get in touch? We'd love to hear from you. Here's how you can reach us...</p>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="twoboxes">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="contactboxeswrap">
          <div class="contactbox left">
            <figure>
              <span class="icon-phone2"></span>
              <figcaption>Get in Touch with Sales</figcaption>
            </figure>
            <p>We are more than willing to let you know of our services through our Sales team. Call at your convenience.</p>
            <a href="tel:<?php echo $number_val; ?>" class="btn-secondary">Call Us: <?php echo $number_text; ?> </a>
          </div>
          <div class="contactbox">
            <figure>
              <span class="icon-chat"></span>
              <figcaption>Customer Support Service</figcaption>
            </figure>
            <p>Get all the help you need, for as long as you want, our customer support executives will take care of it.</p>
            <a href="javascript:;" onclick="setButtonURL();" class="btn-secondary">Talk with us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="maparea">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
          
          <?php
    $bannerform = $_SERVER['HTTP_HOST']; 
    $bannerform = $srcurl."contactfrm.php"; 
    include($bannerform); 
    ?>
          </div>
          </div>
          </div>
          </section>
  
<section class="maparea color-f9">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2>Connect with one of our global offices</h2>
        <div class="mapwrap">

          <div class="mappart">
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1797.6259011155094!2d-74.16686875615407!3d40.73486853324419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c253838c35d403%3A0xc2f25b156affc966!2sOne+Gateway+Center%2C+Newark%2C+NJ+07102%2C+USA!5e0!3m2!1sen!2s!4v1560527322539!5m2!1sen!2s" frameborder="0" style="border:0" allowfullscreen></iframe>
            
          </div>
          <div class="infopart">
            <div class="chunk">
              <h3>Headquarters</h3>
              <p>39899 Balentine Drive, Suite 200, Newark, California, 94560, United States of America</p>
            </div>
            <div class="chunk">
              <h3>Phone</h3>
              <a href="tel:<?php echo $number_val; ?>"><?php echo $number_text; ?></a>
              
            </div>
            <div class="chunk">
              <h3>Email</h3>
              <a href="mailto:support@arclogo.com">support@arclogo.com</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = $srcurl."footer.php"; 
include_once($footer); 
?>
</body>
</html>