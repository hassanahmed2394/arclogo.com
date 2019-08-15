<footer class="footer-main">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <h3>Services</h3>
          <ul class="linkinglist">
          <li><a href="<?php echo $path;?>logo-design">Logo Design</a></li>
          <li><a href="<?php echo $path;?>branding">Branding</a></li>
          <li><a href="<?php echo $path;?>web-design">Web Design</a></li>
          <li><a href="<?php echo $path;?>video-animation">Video Animation</a></li>
          <li><a href="<?php echo $path;?>mobile-application">Mobile App Development</a></li>
          
            
          </ul>
        </div>
        <div class="col-lg-3">
          <h3 class="xsmtpx-30">Quick Links</h3>
          <ul class="linkinglist">
            <li><a href="<?php echo $path;?>packages">Packages</a></li>
            <li><a href="<?php echo $path;?>combo-packages">Combo Packages</a></li>
            <li><a href="<?php echo $path;?>portfolio">Portfolio</a></li>
            
            
          </ul>
        </div>
        <div class="col-lg-3">
          <h3 class="xshide">Company</h3>
          <ul class="linkinglist">
            <!--<li><a href="javascript:;">Our Culture</a></li>-->
            <li><a href="<?php echo $path;?>contact">Contact us</a></li>
          </ul>
        </div>
        <div class="col-lg-3">
          <h3 class="xsmtpx-30">About</h3>
          <ul class="linkinglist">
            
            <li><a href="tel:<?php echo $number_val; ?>"><?php echo $number_text; ?></a></li>
            <li><a href="mailto:support@arclogo.com">support@arclogo.com</a></li>
            <li><a class="address">One gateway center, Newark, New Jersey, USA </a></li>
            
            
            
          </ul>
        </div>  
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="iconswrap">
            <div class="mycenter">
              <ul class="topajencies">
                <li style="    margin-right: 25px;">
                  <figure>
                    <img  src="<?php echo $basesurl;?>images/trust-verified.png" style="height: auto;">
                  </figure>
                </li>
                <li>
                  <figure>
                    <img  src="<?php echo $basesurl;?>images/copyscape.png" style="height: auto;">
                  </figure>
                </li>
                <li>
                  <figure>
                    <img  src="<?php echo $basesurl;?>images/partner1.png">
                  </figure>
                </li>
                <li>
                  <figure>
                    <img  src="<?php echo $basesurl;?>images/partner5.png">
                  </figure>
                </li>
                <li>
                  <figure>
                    <img  src="<?php echo $basesurl;?>images/partner2.png">
                  </figure>
                </li>
              </ul>
            </div>
            <div class="footer-img">
              <figure>
                <img  src="<?php echo $basesurl;?>images/footer.png">
              </figure>
            </div>

          </div>
        </div>
      </div>
      
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="fologo">
            <img  src="<?php echo $basesurl;?>images/ldd-white.svg">
          </div>
          <p class="copyright">&copy; ArcLogo <span id="year"></span>. All rights reserved.</p>
        </div>
        
        <div class="col-sm-6">
          <ul class="footer-nav2">
            <li><a href="<?php echo $path;?>terms-conditions" title=""> Terms of Services</a></li>
            <li><a href="<?php echo $path;?>privacy-policy" title="">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

</footer>


<div class="mobile-cta hidden-sm-up">
    <a href="tel:<?php echo $number_val; ?>" class="xicon phone">
        <i class="icon-phone"></i>
    </a>
</div>

<div class="floating_wrap">
  <div class="btns_wrap">
    <a href="javascript:;" class="chat_wrap" onclick="setButtonURL();" >
      <span class="icoo"><i class="icon-chat"></i></span>
      <span>Chat With Us</span>
    </a>
    <a href="tel:<?php echo $number_val; ?>" class="call_wrap" >
     <span class="icoo"><i class="icon-phone2"></i></span>
      <span><?php echo $number_text; ?></span>
    </a>
  </div>
</div>


<div class="floatbutton">
  <div class="clickbutton"><div class="crossplus"></div></div>
  <div class="banner-form">

    <h3>Chat With Us to <br>Avail 75% Discount</h3>
    <?php
    $bannerform = $_SERVER['HTTP_HOST']; 
    $bannerform = $srcurl."bannerform.php"; 
    include($bannerform); 
    ?>
  </div>
</div>


</main>
<style type="text/css">
  #popupformLead .flag-container {
    display: none;
}
</style>
<section id="popupformLead" class="popup-form visibleit" style="display: none;">
         <div class="formcontainer">
            <div class="tophead">
               <h2 style="margin-bottom: 2rem;">START YOUR PROJECT</h2>
            </div>
            <div id="popupform" class="inform">
               <form id="PopopForm" class="jform clearfix" action="webpages/bannerFormController.php" method="post">
                  
                  <div class="field">
                     <input type="text" name="Name" maxlength="60" value="" placeholder="Name" class="required alphanumeric iecn" required="">
                  </div>
                  <div class="field">
                     <input type="text" name="Email" maxlength="60" value="" placeholder="Email" class="required email " required="">
                  </div>
                  <div class="field phone">
                     <input type="text" maxlength="25" minlength="7" name="Number" value="" placeholder="Phone Number" class="required number phone-number" required="">
                  </div>
                  <div class="field">
                     <textarea name="Message" class="required iemsg" rows="4" placeholder="Name on the Logo and Design Preferences"></textarea>
                  </div>
                  <div class="clearfix fieldwrap text-center pop-btn">
                     <div class="clearfix"></div>
                     <div id="PopopFormResult"></div>
                     <input type="hidden" name="hiddencapcha" value="">
                     <input class="" type="hidden" name="ctry" value="">
                     <input type="hidden" name="pc" value="">
                     <input type="hidden" name="cip">
                     <input type="Submit" class="" value="Submit">
                     
                         <script type="text/javascript">
                document.getElementById('location').value = window.location.href;
              </script>
              <input type="hidden" id="location" name="locationURL" value="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" />
                </div>
                  </div>
               </form>
            </div>
         </div>
      </section>
      <div class="cus-overlay">
        
      </div>

<script src="<?php echo $basesurl;?>js/mlib.js"></script> 



<script src="<?php echo $basesurl;?>js/functions.js"></script> 



<!--Start of Tawk.to Script-->
// <script type="text/javascript">
// var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
// (function(){
// var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
// s1.async=true;
// s1.src='https://embed.tawk.to/5d252dd57a48df6da243c59e/default';
// s1.charset='UTF-8';
// s1.setAttribute('crossorigin','*');
// s0.parentNode.insertBefore(s1,s0);
// })();
// </script>
<!--End of Tawk.to Script-->


<!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=55f6e65c-9a6d-4fe6-b262-e32976eb64eb"> </script>
<!-- End of  Zendesk Widget script -->


<script type="text/javascript">


  
$(document).ready(function() {



    $('.s-bar').hover(function(){
        $(this).stop(true,true).animate({right:'184px'}, 500, 'easeOutExpo');
        $('.side-bars').css('z-index','1004');
    }, function(){
        $(this).animate({right:'0px'}, 500, 'easeOutBounce');
        $('.side-bars').css('z-index','999');
    });

    $('.popup_open').click(function() {
        $('.popup-form').show(300).addClass('visibleit');
        $('.cus-overlay').fadeIn(300);
    })

    $('a.close').click(function() {
        $('.cus-overlay').trigger('click');
    });

    $('a.close').click(function() {
        $('.cus-overlay').trigger('click');
    });


    $('.cus-overlay').click(function() {
        $(this).fadeOut(300);
        $('.popup-form').removeClass('visibleit');
        $('.popup-form').fadeOut();
        $('#popupformLead2').fadeOut();
        $('#ouibounce-modal').fadeOut(200);
        $('.floating-form-wrap').animate({'margin-right': '-584px'})
    })

    $('.floating-form-wrap .form-handle, #slideform').click(function() {
        if ($('.floating-form-wrap').css('margin-right') == '-584px') {
            $('.floating-form-wrap').animate({
                'margin-right': '0px'
            })
            $('.cus-overlay').fadeIn(300);
        } else {
            $('.floating-form-wrap').animate({
                'margin-right': '-584px'
            })
            $('.cus-overlay').fadeOut(300);
        }
    });

    $('.floating-banner').hover(function() {
        $('.floating-banner').stop(1, 1).animate({
            'margin-left': '0px'
        }, 200);
        $('.cus-overlay').stop(1, 1).fadeIn(200);
    }, function() {
        $('.floating-banner').animate({
            'margin-left': '-610px'
        }, 200);
        $('.cus-overlay').fadeOut(200);
    });



});


// function setButtonURL(){
// Tawk_API.toggle();
//   }



</script>

<script type="text/javascript">
  window._mfq = window._mfq || [];
  (function() {
  var mf = document.createElement("script");
  mf.type = "text/javascript"; mf.async = true;
  mf.src = "//cdn.mouseflow.com/projects/ee1c7901-bbfb-4996-aed9-a6e9f12307c8.js";
  document.getElementsByTagName("head")[0].appendChild(mf);
  })();
  </script>
<script>

    $('.ban-form #bannerformsFloating').submit(function() {

    // var namevalue=$(".banner-inp-name").val();
    // var emailvalue=$(".banner-inp-email").val();
    // var phonevalue=$(".banner-inp-phone").val();

    $.ajax({
        type: 'POST',
        url: 'webpages/bannerFormController.php',
        data: $(this).serialize(),
        error: function() {
            alert("Request Failed");
        },
        success: function(response) {
                console.log(response);
        
                $(".fldset #offerForm").fadeIn();

                $("#bannerformsFloating input[type='text']").val("");
                $("#bannerformsFloating input[type='email']").val("");
                $("#bannerformsFloating input[type='Number']").val("");
                $("#bannerformsFloating input[type='hidden']").val("");

                $("textarea").val("");
                // console.log(namevalue);
                // console.log(emailvalue);
                // console.log(phonevalue);

                // $('html, body').animate({
                //     scrollTop: $("#cta-section").offset().top
                // }, 1000);

                // $(".footer-inp-name").val(namevalue);
                // $(".footer-inp-email").val(emailvalue);
                // $(".footer-inp-phone").val(phonevalue);
                //   $("#contactForm").find("#projdescrip").focus();

                //EXECUTE ANIMATION HERE
                // var a=  $("#offerForm input[type='hidden']").val();


            } // this was missing


    });
    return false;
});


</script>