<?php 


  if ($_SERVER['HTTP_HOST'] == "localhost") {
      $folder_name = ""; $path = 'https://localhost/ArcLogo/'.$folder_name;
  } else {
    $folder_name = ""; $path = 'https://'.$_SERVER['HTTP_HOST'].''.$folder_name.'/';
  }

  $number_text="+1 925 268 9288";
  $number_val="19252689288";

  ?>



<noscript>
<div id="jqcheck"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAB60lEQVQ4T2NkwAHePzrxf3ebL1jWp/0oA5egGiM2pVgFQQq31uj/N/ANZvj+8T3D7aNHGDwbTxNvwKtbO/9f3dLHYJ+axfDn5w+GI/NnMRhFtTEISJtjGIIh8Pv39/87ak0ZzCLiGMRUNMCufnLxDMOlrZsY3JtOMrCwsKPowTDg3tGZ/59f2sVgFRvPkO+bAzZgwsZJDEcXzWNQtIlikDGIwG3Az+9v/+9qsGOwTc1h4JeQhhswcfMUhrcP7zEcXzyXwb3xMAMbuwDcEBTTzi7P/s/M8IFB3zccbDPMBSADQODs2sUMzFwyDIah/ZgGfHt/7/+BvmAGm+RsBl4RMawGfHr5jOHowlkMjiUbGDj55MCGwE060Of1X0RZi0Hb2Q4e3eguAElc2X2A4e2DmwwOhVsRBnx6cfH/yXm5DFZxyQxcAoJ4Dfj24T3DsUVzGcwSJjLwSxkygk3ZVmv4X805gkHZRBNXwkQRv3/+NsP1nUsYvFvOMzI+PLXo/73DSxgsouIYOHj5UBRi8wJIwY8vnxlOLV/CIGcewsC4vkDhv01yLoOIoiqG7bgMACn88Owxw8HpvQyMGwqV/vs19TMwQnxDEthYW8DAeGCC3/9XN46TpBGmWEzDkoHx06dP/z9//kyWAby8vAwAcza2SBMOSCMAAAAASUVORK5CYII=" alt="No Script" /> Javascript is disabled. Please enable it for better working experience.</div>
</noscript>
<div class="mobile-nav"> <a href="<?php echo $path;?>" class="logo-main"> <img src="<?php echo $basesurl;?>images/logo.svg" alt="*" /></a>
  <nav>

    <ul class="unstyled mainnav pbpx-15">
      <li><a href="<?php echo $path;?>">Home</a></li>
      <li><a href="javascript:;">Services <i class="xicon icon-angle-down"></i></a>
        <ul class="firstlevel unstyled">
          <!-- <li><a href="<?php echo $path;?>logo-design">Logo Design</a></li> -->
          <li><a href="<?php echo $path;?>web-design">Website Design</a></li>
          <li><a href="<?php echo $path;?>branding">Branding</a></li>
          
          <li><a href="<?php echo $path;?>mobile-application">Mobile App Development</a></li>
          <li><a href="<?php echo $path;?>video-animation">Video Animation</a></li>
        </ul>
      </li>
      
      <li><a href="<?php echo $path;?>portfolio">Portfolio</a></li>
      <li><a href="<?php echo $path;?>packages">Pricing</a></li>
    </ul>

    


  </nav>
</div>
<main class="app-container">
<!-- Mobile Navigation Button Start-->
<div class="mobile-nav-btn"> <span class="lines"></span> </div>
<!-- Mobile Navigation Button End-->

<header class="header-main">
  <div class="top-bar d-none d-lg-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="secondlogo">
            <a href="<?php echo $path;?>">
              <img class="img-fluid" src="<?php echo $basesurl;?>images/ldd.svg" alt="*" />
            </a>
          </div>
          <div class="emailsec">
            <a href="mailto:support@arclogo.com"><span class="icon-envelope2"></span>support@arclogo.com</a>
          </div>
         
          
          
        </div>
        <div class="col-lg-5">
          <ul class="top-info-list">
            <li><a href="tel:<?php echo $number_val; ?>" class="numm"><span class="icon-phone2"></span><?php echo $number_text; ?> </a></li>
            <li><a href="javascript:;" onclick="setButtonURL();" target="_self"  class="numm"><span class="icon-chat"></span> Live Chat</a> </li>
            <li><a href="<?php echo $path;?>order" class="btn-main">Let's Get Started</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="nav-area-full">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 mobile-res-logo">
          <div class="logo">
            <a href="https://arclogo.com/">
              <img class="img-fluid" src="assets/images/logo.svg" alt="*">
            </a>
          </div>
        </div>
        <div class="col-lg-12 d-flex ">
          <div class="main-menu align-self-center d-none d-lg-block">
            <ul class="forpgactive">
              <li class="<?php if ($urhere=="homepage") {echo "active"; }?>"><a href="<?php echo $path;?>">Home</a></li>
              <!-- <li class="<?php if ($urhere=="logodesign") {echo "active"; }?>"><a href="<?php echo $path;?>logo-design">Logo Design</a></li> -->
              <li class="<?php if ($urhere=="branding") {echo "active"; }?>"><a href="<?php echo $path;?>branding">Branding</a></li>
              <li class="<?php if ($urhere=="webdesign") {echo "active"; }?>"><a href="<?php echo $path;?>web-design">Web Design</a></li>
              <li class="<?php if ($urhere=="videoanimation") {echo "active"; }?>"><a href="<?php echo $path;?>video-animation">Video Animation</a></li>
              <li class="<?php if ($urhere=="mobileapplication") {echo "active"; }?>"><a href="<?php echo $path;?>mobile-application">Mobile Application</a></li>
              <li class="<?php if ($urhere=="portfolio") {echo "active"; }?>"><a href="<?php echo $path;?>portfolio">Portfolio</a></li>
              
              <li class="<?php if ($urhere=="pricing") {echo "active"; }?>"><a href="<?php echo $path;?>packages">Pricing & Packages</a></li>
              <!-- <li class="<?php if ($urhere=="combopackages") {echo "active"; }?>"><a href="<?php echo $path;?>combo-packages">Combo Packages</a></li> -->
              <li class="<?php if ($urhere=="contact") {echo "active"; }?>"><a href="<?php echo $path;?>reviews">Reviews</a></li>
              <li class="<?php if ($urhere=="contact") {echo "active"; }?>"><a href="<?php echo $path;?>contact">Contact</a></li>
              
              
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <a href="<?php echo $path;?>" class="logo-main"> <img class="mobile-res-logo" src="assets/images/logo.svg" alt="*"></a> -->
</header>


<div class="topformcontainer">
    <div class="topformwrap">
      <div class="formheading">
        <h2>Avail This Exclusive Offer <span>Book this discount offer for later use.</span></h2>
      </div>
      <div class="formbody">
        <?php
        $bannerform = $_SERVER['HTTP_HOST']; 
        $bannerform = $srcurl."bannerform.php"; 
        include($bannerform); 
        ?>
      </div>
    </div>
    <div class="topformswitch">
      <div class="switchicon">
        <span class="icon-angle-down"></span>
      </div>
      <h4>GET <span>75%</span> DISCOUNT</h4>
    </div>
  </div>
