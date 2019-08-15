<!doctype html>
<html lang="en">
<head>
<title>Portfolio- ArcLogo</title>
<meta name="keywords" content="ArcLogo">
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
$urhere = "portfolio";
?>


</head>
<body class="inner-pages cltestpg">

<?php
$header = $_SERVER['HTTP_HOST']; 
$header = $srcurl."header.php"; 
include_once($header); 
?>


<section class="sec-padding pricing-sec mtpx-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1"> 
        <h2>Our Portfolio is Vast yet Unique and Diverse yet Minimalistic.</h2>
        <p>Client needs define the kind of work we do and here are some examples of that.</p>
      </div>  
      <div class="col-lg-12"> 
          <ul class="nav nav-pills">
            <li><a data-toggle="pill" href="#logodesign" class="active show">Logo Design </a></li>
            <li><a data-toggle="pill" href="#branding" class="">Branding</a></li>
            <li><a data-toggle="pill" href="#videoanimation" class="">Video Animation</a></li>
            <li><a data-toggle="pill" href="#webdd" class="">Web Design</a></li>
            <li><a data-toggle="pill" href="#mobileapp" class="">Mobile Application</a></li>
          </ul>
        <div class="tab-content pricingboxes">
          
          <div id="logodesign" class="tab-pane active">
            <ul class="portfoliolist grid">
              <?php
              $portfoliologo = $_SERVER['HTTP_HOST']; 
              $portfoliologo = $srcurl."portfolio-logo.php"; 
              include($portfoliologo); 
              ?>
            </ul>
          </div>

          <div id="branding" class="tab-pane">
            <ul class="portfoliolist grid">
              <?php
              $portfoliologo = $_SERVER['HTTP_HOST']; 
              $portfoliologo = $srcurl."portfolio-branding.php"; 
              include($portfoliologo); 
              ?>
            </ul>
          </div>

          <div id="webdd" class="tab-pane">
            <ul class="portfoliolist grid">
              <?php
              $portfoliologo = $_SERVER['HTTP_HOST']; 
              $portfoliologo = $srcurl."portfolio-web.php"; 
              include($portfoliologo); 
              ?>
            </ul>
          </div>

          <div id="videoanimation" class="tab-pane">
            <ul class="portfoliolist grid">
              <?php
              $portfoliologo = $_SERVER['HTTP_HOST']; 
              $portfoliologo = $srcurl."portfolio-video.php"; 
              include($portfoliologo); 
              ?>
            </ul>
          </div>

          <div id="mobileapp" class="tab-pane">
            <ul class="portfoliolist grid">
              <?php
              $portfoliologo = $_SERVER['HTTP_HOST']; 
              $portfoliologo = $srcurl."portfolio-app.php"; 
              include($portfoliologo); 
              ?>
            </ul>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>


<?php
$cta = $_SERVER['HTTP_HOST']; 
$cta = $srcurl."cta.php"; 
include($cta); 
?>


<?php
$testimonial = $_SERVER['HTTP_HOST']; 
$testimonial = $srcurl."testimonial.php"; 
include($testimonial); 
?>


<?php
$bottomform = $_SERVER['HTTP_HOST']; 
$bottomform = $srcurl."bottomform.php"; 
include_once($bottomform); 
?>









<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = $srcurl."footer.php"; 
include_once($footer); 
?>




<!-- scroll top car
<div class="car-top"><span>
<img src="<?php echo $basesurl;?>images/car.png" alt="Top" title="Back to top" />
</span></div>
-->
</body>
</html>