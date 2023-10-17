<?php 

require_once("include/config.php");

//book_time
if(!empty($_POST["book_time"])) 
{
	$book_time=$_POST["book_time"];
	$book_date=$_POST["book_date"];
	
	
	 $sql ="SELECT book_time,status,book_date FROM booked_slot WHERE book_time='$book_time' AND book_date='$book_date' AND status='1'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) 
	{
		// output data of each row
		$row = $result->fetch_assoc();

		$count = $row["status"];
		
	    $book_date = date("d-m-Y", strtotime($row["book_date"]));


        $book_slot_query = mysqli_fetch_assoc(mysqli_query($conn,"SELECT booking_time FROM `book_time` WHERE bid='$book_time' LIMIT 1;"));

		 $sno = $book_slot_query["booking_time"];
		
		$age = array("is_error"=>"No","message"=> "<span style='color:red;font-size:16px;font-weight:500'>Time. $sno. and Booking Date $book_date is already full. Please select another Time or Book Date</span>");

			echo json_encode($age);
		

        // 		if($count == 1)
        // 		{
        // 			$age = array("is_error"=>"No","message"=> "<span style='color:red'>Seat No. $sno. and book_date $book_date is already full. Please select another seat</span>");
        
        // 			echo json_encode($age);
        // 		}
        // 		else
        // 		{
        // 			$age = array("is_error"=>"Yes","message"=> "<span style='color:green'>book_date is Available</span>");
        
        // 			echo json_encode($age);
        // 		}


	}
	else
	{
	    $age = array("is_error"=>"Yes","message"=> "<span style='color:green;font-size:16px;font-weight:500'>Time Slot is Available</span>");

			echo json_encode($age);
	}

}











if(!empty($_POST["roomno"])) 
{
$roomno=$_POST["roomno"];
$result ="SELECT count(*) FROM registration WHERE roomno=?";
$stmt = $mysqli->prepare($result);
$stmt->bind_param('i',$roomno);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
if($count>0)
echo "<span style='color:red'>$count. Seats already full.</span>";
else
	echo "<span style='color:red'>All Seats are Available</span>";
}

if(!empty($_POST["oldpassword"])) 
{
$pass=$_POST["oldpassword"];
$result ="SELECT password FROM admin WHERE password=?";
$stmt = $mysqli->prepare($result);
$stmt->bind_param('s',$pass);
$stmt->execute();
$stmt -> bind_result($result);
$stmt -> fetch();
$opass=$result;
if($opass==$pass) 
echo "<span style='color:green'> Password  matched .</span>";
else echo "<span style='color:red'> Password Not matched</span>";
}

//For Email
if(!empty($_POST["emailid"])) {
	$email= $_POST["emailid"];
	if (filter_var($email, FILTER_VALIDATE_EMAIL)===false) {

		echo "error : You did not enter a valid email.";
	}
	else {
		$result ="SELECT count(*) FROM admin WHERE email=?";
		$stmt = $mysqli->prepare($result);
		$stmt->bind_param('s',$email);
		$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
if($count>0)
{
echo "<span style='color:red'> Email already exist. Please try again.</span>";
}
}
}
// For Registration Number
if(!empty($_POST["regno"])) {
	$regno= $_POST["regno"];

		$result ="SELECT count(*) FROM userRegistration WHERE regNo=?";
		$stmt = $mysqli->prepare($result);
		$stmt->bind_param('s',$regno);
		$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
if($count>0)
{
echo "<span style='color:red'> Registration number already exist. Please try again .</span>";
}

}


?>
