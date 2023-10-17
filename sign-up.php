<?php
$pagetitle='TITAN GLOBAL SERVICES LTD';
$keywords='';
$description='';
include_once 'include/header.php';
?> 

<div class="inner-top-section">
<div class="container">
    <div class="row" data-aos="fade-left">
    <div class="col-md-5 inner-content">
        <h3> SIGNUP</h3>
        </div>
    </div>
    </div>
</div>
 
    <section id="contact" class="contact" data-aos="fade-up">
      <div class="container">
        <div class="row justify-content-center aos-init aos-animate" data-aos="fade-up">
          <div class="col-lg-12">
            <form action="signup.php" method="post" role="form" class="php-email-form">
              <div class="row">

                <div class="col-md-4 form-group">
                    <input type="text" name="cust_name" class="form-control" id="name" placeholder="Contact Name" required="">
                  </div>
                    <div class="col-md-4 form-group">
                    <input type="text" name="comp_name" class="form-control" id="comp_name" placeholder="Company Name" required="">
                  </div>
                    <div class="col-md-4 form-group">
                    <input type="text" name="website" class="form-control" id="website" placeholder="Website" required="">
                  </div>
                    <div class="col-md-4 form-group">
                    <input type="number" name="cust_mobile" class="form-control" id="cust_mobile" placeholder="Phone Number" required="">
                  </div>
                  <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="cust_email" id="email" placeholder="Email Address" required="">
                  </div>
                  
                  <div class="col-md-4 form-group mt-3 mt-md-0">
                    <select class="form-select" name="service" required aria-label="Default select example">
                      <option selected>Select Our Service Offers</option>
                      <option value="Test,5">Test (£5)</option>
                      <option value="Bronze,395">Bronze (£395)</option>
                      <option value="Silver,695">Silver (£695)</option>
                      <option value="Gold,895">Gold (£895)</option>
                      <option value="Platinum,1295">Platinum (£1295)</option>
                    </select>
                    <p><small>Inclusive of 20% VAT</small></p>
                 </div>
                <style>
                    .form-select
                    {
                        padding:15px!important;
                    }
                </style>
            
              </div>
             
              <div class="text-center text-right"><button type="submit"  name="bdetails">Submit Now</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>


<?php
include_once 'include/footer.php';
?>