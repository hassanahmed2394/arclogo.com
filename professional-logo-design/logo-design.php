<!doctype html>
<html lang="en">
<head>
<title>Logo Design- ArcLogo</title>
<meta name="keywords" content="ArcLogo">
<meta name="description" content="Logo Designing, Best Logo Designing, Web Designing, Best Logo Packages">


<?php
$srcurl = "includes/";
$basesurl = "assets/";
?>



<?php
$style = $_SERVER['HTTP_HOST']; 
$style = $srcurl."style.php"; 
include($style); 

$urhere = "logodesign";
?>






</head>
<body class="innerpages">

<?php
$header = $_SERVER['HTTP_HOST']; 
$header = $srcurl."header.php"; 
include($header); 
?>




<div class="slider-wrapper">
  <section class="banslidee">
    <div class="item">
      <div class="home-banner d-flex" style="background-image:url(<?php echo $basesurl;?>images/banners/logo-01.png)">
        <div class="container align-self-center">
          <div class="row">
            <div class=" col-lg-5">
              <div class="home-banner-content">
                <h1>Logo’s that push your brand forward.</h1>
                <p class="subtitle">Skilled Professionals are waiting to create exceptional logos for your brand.</p>
                <ul class="myticks">
                  <li>Unique</li>
                  <li>Creative</li>
                  <li>Appropriate</li>
                  <li>Aesthetically Pleasing</li>
                </ul>
                <a href="<?php echo $path;?>order" class="btn-theme">Get Your Logo Now </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="home-banner d-flex" style="background-image:url(<?php echo $basesurl;?>images/banners/logo-02.png)">
        <div class="container align-self-center">
          <div class="row">
            <div class=" col-lg-5">
              <div class="home-banner-content">
                <h1>Logo’s that push your forward.</h1>
                <p class="subtitle">Skilled Professionals are waiting to create exceptional logos for your brand.</p>
                <ul class="myticks">
                  <li>Unique</li>
                  <li>Creative</li>
                  <li>Appropriate</li>
                  <li>Aesthetically Pleasing</li>
                </ul>
                <a href="<?php echo $path;?>order" class="btn-theme">Get Your Logo Now </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="home-banner d-flex" style="background-image:url(<?php echo $basesurl;?>images/banners/logo-03.png)">
        <div class="container align-self-center">
          <div class="row">
            <div class=" col-lg-5">
              <div class="home-banner-content">
                <h1>Logo’s that push your forward.</h1>
                <p class="subtitle">Skilled Professionals are waiting to create exceptional logos for your brand.</p>
                <ul class="myticks">
                  <li>Unique</li>
                  <li>Creative</li>
                  <li>Appropriate</li>
                  <li>Aesthetically Pleasing</li>
                </ul>
                <a href="<?php echo $path;?>order" class="btn-theme">Get Your Logo Now </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </section>
</div>



<?php
$satisfied = $_SERVER['HTTP_HOST']; 
$satisfied = $srcurl."satisfied.php"; 
include($satisfied); 
?>



<section class="servicesec">
  <div class="container">
    
    <div class="row">
      <div class="col-lg-12">
        <div class="centerwrap">
          <div class="tab-content">
            <div class="tabs logodesign current myservices" role="toolbar">
              <?php
              $logodetail = $_SERVER['HTTP_HOST']; 
              $logodetail = $srcurl."logodetail.php"; 
              include($logodetail); 
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="filterportfolio">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        
        <div class="text text-center">
          <h2>Take a look at our diverse portfolio, we have done for our clients.</h2>
          <p>We help them break creative boundaries to make their unique ideas stand out.</p>  
        </div>

        
        <ul class="portfoliolist grid">
          <?php
          $portfoliologo = $_SERVER['HTTP_HOST']; 
          $portfoliologo = $srcurl."portfolio-logo.php"; 
          include($portfoliologo); 
          ?>
        </ul>

        

      </div>
    </div>
  </div>
</section>






<section class="sec-padding pricing-sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1"> 
        <h2>What’s the cost of a Logo?</h2>
        <p>Keeping your budget in mind, we give you optimum results!</p>
      </div>  
      <div class="col-lg-12"> 
          
        <div class="tab-content pricingboxes">
          
          


          <div class="tab-pane active">
            <?php
            $packages = $_SERVER['HTTP_HOST']; 
            $packages = $srcurl."packages-logo.php"; 
            include($packages); 
            ?>
          </div>

          

          

          
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$cta2 = $_SERVER['HTTP_HOST']; 
$cta2 = $srcurl."cta2.php"; 
include_once($cta2); 
?>

<?php
$clientslogos = $_SERVER['HTTP_HOST']; 
$clientslogos = $srcurl."clientslogos.php"; 
include($clientslogos); 
?>

<?php
$testimonial = $_SERVER['HTTP_HOST']; 
$testimonial = $srcurl."logo-testimonials.php"; 
include($testimonial); 
?>

<?php
$helpingbrand = $_SERVER['HTTP_HOST']; 
$helpingbrand = $srcurl."helpingbrand.php"; 
include($helpingbrand); 
?>







<?php
$bottomcta = $_SERVER['HTTP_HOST']; 
$bottomcta = $srcurl."bottomcta.php"; 
include($bottomcta); 
?>

<?php
$faq = $_SERVER['HTTP_HOST']; 
$faq = $srcurl."faqs.php"; 
include_once($faq); 
?>



<div class="belowform">
  <div class="container ">
    <div class="row">
      <div class=" col-lg-12 col-xl-12 text-center">
        <div class="home-banner-content">
          <div class="col-lg-8 offset-lg-2 inner-content text-left">
              <?php
              $contactfrm = $_SERVER['HTTP_HOST']; 
              $contactfrm = $srcurl."contactfrm.php"; 
              include_once($contactfrm); 
              ?> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    





<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = $srcurl."footer.php"; 
include($footer); 
?>



</body>
</html>