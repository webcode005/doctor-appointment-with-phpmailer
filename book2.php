<?php
require('include/config.php');
$pagetitle='TITAN GLOBAL SERVICES LTD';
$keywords='';
$description='';
include_once 'include/header.php';

?> 

<div class="inner-top-section">
<div class="container">
    <div class="row" data-aos="fade-left">
    <div class="col-md-5 inner-content">
        <h3> Free consultation</h3>
        </div>
    </div>
    </div>
</div>
 
    <section id="contact" class="contact" data-aos="fade-up">
      <div class="container">
        <div class="row justify-content-center aos-init aos-animate" data-aos="fade-up">
          <div class="col-lg-12">
            <form action="book-details.php" method="post" role="form" class="php-email-form">
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
                  <input type="date" class="form-control" name="bdate" id="book_date"  placeholder="Date" required="">
                </div>
                  
                  <div class="col-md-12 form-group mt-3 mt-md-0">
                  <div class="table-main">
                      <p>Tell me your preferable contact time</p>
                      <table class="table border">
  <tbody>
    <!-- <tr class="text-center">
      <td><input class="top-10" type="radio" id="vehicle1" name="time" value="1">
          <label for="vehicle1"> 9:30 - 10:00 AM</label></td>
        
      <td class="disabled"><input class="top-10" type="radio" id="vehicle1" name="vehicle2" value="2" disabled>
          <label for="vehicle2"> 10:00 - 10:30 AM</label></td>
        
        <td><input class="top-10 disabled" type="radio" id="vehicle1" name="time" value="3">
            <label for="vehicle3"> 10:30 - 11:00 AM</label></td>
        
        <td class="disabled"><input class="top-10" type="radio" id="vehicle1" name="vehicle2" value="4" disabled>
            <label for="vehicle4"> 11:00 - 10:30 AM</label></td>
        
        <td><input class="top-10" type="radio" id="vehicle1" name="time" value="5">
            <label for="vehicle5"> 11:30 - 12:00 AM</label></td>
    </tr> -->



         <tr class="text-center">

         <td colspan="3">
              
              <select class="form-control"  onChange="check_slot_Availability(this.value)" name="time" required>
                <option value="">Select Time</option>
  <?php     
   $sql1 = "SELECT * FROM book_time ORDER BY bid DESC";
    $result1 = $conn->query($sql1);
    $k=1;
    if ($result1->num_rows > 0) {
        // output data of each row
        while($row = $result1->fetch_assoc()) {

        ?>

          
              <option value="<?php echo $row["bid"];?>"><?php echo $row["booking_time"];?></option>
         
   
                                        <?php 
                                                     } 
                                            }
                                               
                                                $conn->close(); 
                                        ?>

</select>

<span id="slot-availability-status" style="font-size:18px;"></span>
                                          </td>
         </tr>
     
  </tbody>
</table>
                      </div>
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="remarks" rows="5" placeholder="How can we help?" required=""></textarea>
              </div>
              <div class="text-center text-right"><button type="submit" name="bdetails">Send</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>


    <script>
  function check_slot_Availability(slot) {
		//$("#loaderIcon").show();
		var book_date = $("#book_date").val();

    // alert(book_date);

    // alert(slot);
	
		jQuery.ajax({
				url: "check_slot.php",
				data:
				{
				    book_date:book_date,
				    book_time:slot,
				    
				},
				
				type: "POST",
				success:function(result){
					
							const obj = JSON.parse(result);

                     if(obj.is_error=='Yes'){
                        document.getElementById("slot-availability-status").innerHTML=  obj.message; 

							}                   

							if(obj.is_error=="No"){
                        document.getElementById("slot-availability-status").innerHTML=  obj.message; 

                            $("#slot").val("");
						
							}

							$("#loaderIcon").hide();
				},
				error:function (){}
		});
      }
   </script>

<?php
include_once 'include/footer.php';
?>




