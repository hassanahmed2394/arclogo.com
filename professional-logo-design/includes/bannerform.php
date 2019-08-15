
<section class="banform">
  <div class="container">
    <div class="row">
      <div class="">
        <div class="ban-form">
          <form class="cmxform" id="bannerformsFloating" >
            <div class="row">
              <div class="col-lg-12">
                <div class="fldset">
                  <input id="username" name="Name" minlength="2" type="text" placeholder="Enter your name" required />
                </div>
              </div>
              <div class="col-lg-12">
                <div class="fldset">
                  <input id="cemail" type="email" name="Email" placeholder="Enter email here" required>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="fldset">
                  <input id="phone-coun" name="Number" type="number" placeholder="Phone Number" required />
                </div>
              </div>

              <div class="col-lg-12">
                <div class="fldset">
                  <textarea name="Message" id="" rows="7" placeholder="Talk About Your Project"></textarea>
                </div>
              </div>
              
              <div class="col-lg-12">
                <div class="fldset">
                  <input name="submit"  type="submit" placeholder="Connect With Us" required />

                  <script type="text/javascript">
                document.getElementById('location').value = window.location.href;
              </script>
              <input class="" type="hidden" name="ctry" value="">
              <input type="hidden" name="cip" value="">
              <input type="hidden" name="pc" value="">
              <input type="hidden" name="hiddencapcha" value="">
              <input type="hidden" id="location" name="locationURL" value="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" />
                
                 
                <div id="offerForm" class="alert alert-success" style="font-size: 12px; width:40%; margin:9px auto; display:none">Congratulations! You've Signed up, For Further Assistance Start <a href="javascript:;" onclick="setButtonURL()"> Live Chat.</a></div>
                </div>
               
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>