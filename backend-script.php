<?php

require_once("include/config.php");

//book_time

$book_date=!empty($_POST['book_date'])?$_POST['book_date']:'';
if(!empty($book_date))
  {
  
     $query="SELECT * FROM `booked_slot` WHERE book_date='$book_date'";

    $result=$conn->query($query);
            
    if($result->num_rows>0)
        {
            //  echo "<option value=''>Select State</option>";
            while($row= $result->fetch_assoc())
            {
        
            
             $btime = $row['book_time'];
                ?>

                <?php
                   // echo "SELECT * FROM `book_time` WHERE bid='$btime'";

                            //$tquery = mysqli_query($conn,"SELECT * FROM `book_time` WHERE bid='$btime'");

                            //echo $trow["book_time"];
                            $tquery="SELECT * FROM `book_time`";

                            $result1=$conn->query($tquery);
                            if($result1->num_rows>0)
                            {
                                

                                while($trow= $result1->fetch_assoc())
                                {
                                    
                                       // echo $trow["booking_time"];



                                    if( $trow["bid"] === $row["book_time"])
                                    {
                                        $disable = "disabled";
                                        
                                    }
                                    else
                                    {
                                        $disable = "";
                                    }
                                    ?>

                                        <td class="<?php echo $disable;?> "><input class="top-10" <?php echo $disable;?> type="radio" id="time<?php echo $trow["bid"];?>" name="time" value="<?php echo $trow["bid"];?>">
                                            <label for="time<?php echo $trow["bid"];?>"> <?php echo $trow["booking_time"];?></label>
                                        </td>

                                <?php

                                }


                            } 
                    
                            else 
                            {
                               // echo "0 results";


                               $tquery="SELECT * FROM `book_time` ";

                               $result1=$conn->query($tquery);
                               if($result1->num_rows>0)
                               {
                                   
   
                                   while($trow= $result1->fetch_assoc())
                                   {
                                       
                                           echo $trow["booking_time"];
   
   
   
                                       if( $trow["bid"] === $row["book_time"])
                                       {
                                       ?>
   
                                           <td class="disabled"><input class="top-10" disabled type="radio" id="time<?php echo $trow["bid"];?>" name="time" value="<?php echo $trow["bid"];?>">
                                               <label for="time<?php echo $trow["bid"];?>"> <?php echo $trow["booking_time"];?></label>
                                           </td>
   
   
                                       <?php
                                       }
                                       else
                                       {
                                       ?>
   
                                           <td><input class="top-10" type="radio" id="time<?php echo $trow["bid"];?>" name="time" value="<?php echo $trow["bid"];?>">
                                               <label for="time<?php echo $trow["bid"];?>"> <?php echo $trow["booking_time"];?></label>
                                           </td>
                                       <?php
   
                                       }
                                       ?>
   
                                   <?php
   
                                   }


                                }

                            }
                        ?>
                        <?php 
        } 
        
        }
              
                                  else 
                                  {
                                      
                               $tquery2="SELECT * FROM `book_time` ";

                               $result2=$conn->query($tquery2);
                               if($result2->num_rows>0)
                               {
                                   
   
                                   while($trow= $result2->fetch_assoc())
                                   {
                                       
                                           //echo $trow["booking_time"];
   
   
   
                                       ?>
   
                                           <td><input class="top-10" type="radio" id="time<?php echo $trow["bid"];?>" name="time" value="<?php echo $trow["bid"];?>">
                                               <label for="time<?php echo $trow["bid"];?>"> <?php echo $trow["booking_time"];?></label>
                                           </td>
                                       <?php
   
                                      
   
                                   }


                                }

                                  }
                                  
                          ?>


<?php

  }
    else
    {
            echo "no";
    }  

 


   // Fetching city data
$state_id=!empty($_POST['state_id'])?$_POST['state_id']:'';
if(!empty($state_id))
  {
  $query="SELECT id, name from cities WHERE state_id=?";
  $countryData = $conn->prepare($query);
  $countryData->bind_param('i',$state_id); 
  $countryData->execute();
  $result=$query->get_result();

  if($result->num_rows>0)
  {
     echo "<option value=''>Select City</option>";
     while($arr= $result->fetch_assoc())
     {
            echo "<option value='".$arr['id']."'>".$arr['name']."</option><br>";
        
     }
  }  
}
?>
