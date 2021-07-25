<?php
header('Content-type: application/json');

include('../resources/fun.php');
//calling database connection function
$conn = connect();
	session_start();
    
	
		$email=$_POST['username'];
		$job_id=$_POST['job_id'];
	
		
		//check already applied or not
		$sql = "SELECT * FROM job_applied WHERE email='$email' AND job_id='$job_id'";
		$result = mysqli_query($conn, $sql);
		
		
		if (mysqli_num_rows($result)>0)
		{
			$row = mysqli_fetch_array($duplicate);
			echo json_encode(array("statusCode"=>201,"msg"=>"You have already applied for this job","data"=>$job_id));
		}
		else{
			$sql = "INSERT INTO `job_applied`( `email`, `job_id`) VALUES ('$email','$job_id')"; 
			
			if (mysqli_query($conn, $sql)) {
                mysqli_error($conn);
				echo json_encode(array("statusCode"=>200));
			} 
			else {

				echo json_encode(array("statusCode"=>201, "statusMessage"=>mysqli_error($conn)));
			}
		}
		mysqli_close($conn);
	
?>