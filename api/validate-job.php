<?php

header('Content-type: application/json');

include('../resources/fun.php');
//calling database connection function
$conn = connect();
	session_start();

		$email=$_POST['username'];
		$job_id=$_POST['job_id'];
	
		
		$check=mysqli_query($conn,"select * from job_applied where email='$email' AND job_id ='$job_id'");
		if (mysqli_num_rows($check)>0)
		{
			echo json_encode(array("statusCode"=>200));
		}
        mysqli_close($conn);
?>