<!doctype html>
<html lang="en">
<head>
<title>Video Animation- ArcLogo</title>
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

$urhere = "videoanimation";
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
      <div class="home-banner d-flex" style="background-image:url(<?php echo $basesurl;?>images/banners/video-01.png)">
        <div class="container align-self-center">
          <div class="row">
            <div class=" col-lg-5">
              <div class="home-banner-content">
                <h1>Animation that keeps you real benefits</h1>
                <p class="subtitle">Video is undoubtedly the medium of the modern age. Let us help you create magnificent animated videos to educate and evoke your customers!</p>
                <ul class="myticks">
                  <li>Unique</li>
                  <li>Creative</li>
                  <li>Finesse</li>
                  <li>Relatable</li>
                </ul>
                 <!--<a href="<?php echo $path;?>order" class="btn-theme">Get a Design Now</a>-->
                <a class="btn-theme  get-design-btn">Let's Get Started</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="home-banner d-flex" style="background-image:url(<?php echo $basesurl;?>images/banners/video-02.png)">
        <div class="container align-self-center">
          <div class="row">
            <div class=" col-lg-5">
              <div class="home-banner-content">
                <h1>Animation that keeps you real benefits</h1>
                <p class="subtitle">Video is undoubtedly the medium of the modern age. Let us help you create magnificent animated videos to educate and evoke your customers!</p>
                <ul class="myticks">
                  <li>Unique</li>
                  <li>Creative</li>
                  <li>Finesse</li>
                  <li>Relatable</li>
                </ul>
                 <!--<a href="<?php echo $path;?>order" class="btn-theme">Get a Design Now</a>-->
                <a class="btn-theme  get-design-btn">Let's Get Started</a>
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
            <div class="tabs videoanimation myservices current" role="toolbar">
              <?php
              $videodetail = $_SERVER['HTTP_HOST']; 
              $videodetail = $srcurl."videodetail.php"; 
              include($videodetail); 
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
          <h2>Exceptional Animated Video Production</h2>
          <p>Animation works its way into the hearts of customers, have a look!</p>  
        </div>

        
        <ul class="portfoliolist grid">
          <?php
          $portfoliologo = $_SERVER['HTTP_HOST']; 
          $portfoliologo = $srcurl."portfolio-video.php"; 
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
        <h2>How much does it cost to design a video?</h2>
        <p>We guarantee that you’ll get a great video animation no matter what your budget is.</p>
      </div>  
      <div class="col-lg-12"> 
          
        <div class="tab-content pricingboxes">
          
          


          <div id="logodesign" class="tab-pane active">
            <?php
            $packages = $_SERVER['HTTP_HOST']; 
            $packages = $srcurl."packages-video.php"; 
            include($packages); 
            ?>
          </div>

          

          <div id="mobileapp" class="tab-pane">
            <div class="largebox">
              <div class="leftarea">
                <figure>
                  <img src="<?php echo $basesurl;?>images/mobile-01.svg">
                </figure>
                <a href="<?php echo $path;?>custom-quote" class="btn-packages">Get a Custom Quote</a>
              </div>
              <div class="rightarea">
                <h4>Uncovering the “Next-Big-Thing” Mobile App for You! We develops enterprise-grade software platforms for businesses.</h4>
                <p>Our team of experts have mastered the art of enabling a brand to have a solid long term, long lasting online presence by offering the best, up to date iOS, Android and wearable apps design and development services in the industry.</p>
                <h3>App For All Screens</h3>
                <ul class="ticklist">
                  <li>
                    <img src="<?php echo $basesurl;?>images/logoss.png">
                  </li>
                  <li class="ralign">
                    <a href="javascript:;" onclick="setButtonURL();">Speak with our App Strategist</a>
                    <a href="tel:<?php echo $number_val; ?>"><h6><?php echo $number_text; ?></h6></a>
                  </li>
                  
                </ul>
              </div>
            </div>
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
$testimonial = $srcurl."video-testimonials.php"; 
include($testimonial); 
?>

<?php
$helpingbrand = $_SERVER['HTTP_HOST']; 
$helpingbrand = $srcurl."helpingbrand.php"; 
include($helpingbrand); 
?>







 <?php
// $bottomcta = $_SERVER['HTTP_HOST']; 
// $bottomcta = $srcurl."bottomcta.php"; 
// include($bottomcta); 
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