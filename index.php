<?php
  require_once "class/encdec.php"; 
  error_reporting(0);
  
  ?>  

                    <form action="" method="post" enctype="multipart/form-data" id="commentform" class="comment-form">
                    
                      <p >
                        <input id="text" placeholder="Job Title" name="jobtitle" type="text" value="" >
                      </p>
                      <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide" id="mobile-block">
                        <label for="mobile">Mobile&nbsp;<span class="required">*</span></label>
                        <input class="form-control user-verify-mobile" placeholder="Enter your mobile no." value="" name="mobileno" type="text" minlength="10" maxlength="10" required />
                        <br/>
                        <span class="verify-mobile-alert"></span>
                      </p>
                      <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide"  id="otp-block">
                        <label for="username">OTP&nbsp;<span class="required">*</span></label>
                        <input type="text" class="form-control user-verify-otp" id="otp" minlength="10" maxlength="10" placeholder="Enter OTP" name="otp" required="" disabled />
                        <br/>
                        <span class="verify-otp-alert"></span>
                        <br/>
                        <span class="verify-otp-timeout"></span>
                      </p>
                      <div class="form-group text-right">
                        <span id="mobile-otp-message-block"></span>
                      </div>


                      
                      <p class="form-submit pt-20">
                        <input name="Submit" type="submit"  id="submit" class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-bgcolor-skincolor" value="Post Job">
                      </p>
                    </form>
                  
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/main.js"></script>      
<script src="js/sms.js"></script>
<script src="js/custom.js"></script>