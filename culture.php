<!doctype html>
<html lang="en">
<head>
<title>Our Culture | ArcLogo</title>

<meta name="keywords" content="ArcLogo">
<meta name="description" content="At ArcLogo our working culture revolves around providing win-win situation for you and us. Become a reseller now and start selling white label digital services.">


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
$urhere = "culture";
?>


</head>
<body class="inner-pages servicepg">

<?php
$header = $_SERVER['HTTP_HOST']; 
$header = $srcurl."header.php"; 
include_once($header); 
?>


<section class="inner-banner aboutbg justbg">
 <!--  <div class="round1"></div>
  <div class="round2"></div>
  <div class="round3"></div>
  <div class="round4"></div>
  <div class="round5"></div>
  <div class="round6"></div>
  <div class="round7"></div> -->
  <div class="container ">
    <div class="row">
      <div class="col-lg-12">
        <div class="inner-banner-content">
          <h5>Assisting Business Relationships With Effective Marketing Solutions</h5>
          <h2>Helping Businesses With Strategic Digital Marketing Services</h2>
          <p>We’re a creative digital marketing agency reseller that focuses on distributing innovative marketing solutions.</p>
          <a href="javascript:;" onclick="setButtonURL();" class="btn-secondary">Talk to one of our Strategist </a>
          <!-- <figure class="mbpx-0">
            <img class="servicefigure" src="<?php echo $basesurl;?>images/banners/aboutimagebanner.png"  height="">
          </figure> -->

          
        </div>
      </div>
      
    </div>
  </div>
</section>



<?php
$partner = $_SERVER['HTTP_HOST']; 
$partner = $srcurl."cta-partner.php"; 
include($partner); 
?>






<section class="sec-padding who-we-sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2 class="ptpx-90">ArcLogo Idealogy</h2>
        <p>At ArcLogo, our main ideology revolves around customer success based on decades of research on digital marketing solutions, customer communication and satisfaction to help create a unique white label agency partner model which is one of a kind and tailor-made for success.</p>
        <a href="javascript:;" onclick="setButtonURL();" class="btn-secondary mbpx-30">Get In Touch With An Expert</a>

        <p>We see goals as a consistent form of commitment that we need to reach to help you achieve the milestones that you’ve set for your business. With the unique model that we follow, each of your milestones, reflects our milestones providing mutual business success.</p>
        
        <p><strong> And further promoting our methodology.</strong></p>
      </div>
      <div class="col-lg-6">
        <figure>
          <img src="<?php echo $basesurl;?>images/about-a.png">
        </figure>
      </div>
    </div>
  </div>
</section>


<section class="sec-padding who-we-sec left">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-6">
        <figure>
          <img src="<?php echo $basesurl;?>images/about-b.png">
        </figure>
      </div>

      <div class="col-lg-6">
        <h2 class="ptpx-40">Our charismatic team of experts</h2>
        <p>We, at ArcLogo, are a full-service digital marketing reseller and white label agency partner service assisting businesses around the world with digital marketing solutions. We are a team of technical experts enabling custom turn key solutions for your business.</p>
        
        <a href="<?php echo $path;?>services" class="btn-secondary mbpx-30">Talk to a professional</a>
        <h2>What We Do</h2>
        <p>Love to understand your B2B business goals to help you reach and achieve success that you’ve aimed for with our strategic assistance. </p>


        <p><strong>Reach us and discuss your strategic partnership ideas with us</strong></p>
      </div>
    </div>
  </div>
</section>
<?php
$cta = $_SERVER['HTTP_HOST']; 
$cta = $srcurl."cta.php"; 
include_once($cta); 
?>



<section class="weDifferent-sec sec-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="wrap">
          <h2>What Makes Us One Of A Kind?</h2>
          <h5>Our number one priority is customer satisfaction</h5>
          <p>What sets ArcLogo apart is our commitment to not only the quality of work delivered but our commitment to deliver an outstanding customer support. We believe our journeys together begin only after we have delivered the product to the customer.
</p>
          <a href="<?php echo $path;?>get-a-quote" class="btn-secondary">Get Started</a>
        </div>
      </div>
      <div class="col-lg-6">
        <ul class="diff-wrap">
          <li>
            <figure>
              <img src="<?php echo $basesurl;?>images/award-01.png">
            </figure>
            <!-- <h6>recognition</h6> -->
          </li>
          <li>
            <figure>
              <img src="<?php echo $basesurl;?>images/award-02.png">
            </figure>
            <!-- <h6>recognition</h6> -->
          </li>
          <li>
            <figure>
              <img src="<?php echo $basesurl;?>images/award-03.png">
            </figure>
            <!-- <h6>recognition</h6> -->
          </li>
          <li>
            <figure>
              <img src="<?php echo $basesurl;?>images/award-04.png">
            </figure>
            <!-- <h6>recognition</h6> -->
          </li>
          <li>
            <figure>
              <img src="<?php echo $basesurl;?>images/award-05.png">
            </figure>
            <!-- <h6>recognition</h6> -->
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>








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
$accordianMain = $_SERVER['HTTP_HOST']; 
$accordianMain = $srcurl."accordianMain.php"; 
include_once($accordianMain); 
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