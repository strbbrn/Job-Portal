<?php
header('Content-type: application/json');

include('../resources/fun.php');
//calling database connection function
$conn = connect();
	session_start();
    
	if($_POST['type']==1){
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$mname=$_POST['mname'];
		$email=$_POST['username'];
		$phone=$_POST['contact'];
		$password=$_POST['password'];
		$short_info = $_POST['shortinfo'];
		
		$duplicate=mysqli_query($conn,"select * from employees where email='$email'");
		if (mysqli_num_rows($duplicate)>0)
		{
			echo json_encode(array("statusCode"=>201,"err"=>"Email already exists"));
		}
		else{
			$sql = "INSERT INTO `employees`( `fname`, `mnane`, `lname`, `short_info`, `email`, `contact`, `password`) 
			VALUES ('$fname','$mname','$lname','$short_info','$email','$phone', '$password')";
			if (mysqli_query($conn, $sql)) {
				$_SESSION['username']=$email;
				http_response_code(200);
				echo json_encode(array("statusCode"=>200,"msg"=>'User Created Successfully'));
			} 
			else {
				echo json_encode(array("statusCode"=>201,"err"=>"database error"));
			}
		}
		mysqli_close($conn);
	}
	if($_POST['type']==2){
		$email=$_POST['username'];
		$password=$_POST['password'];
		$check=mysqli_query($conn,"select * from employees where email='$email' and password='$password'");
		if (mysqli_num_rows($check)>0)
		{
			$_SESSION['username']=$email;
			echo json_encode(array("statusCode"=>200));
		}
		else{
			echo json_encode(array("statusCode"=>201));
		}
		mysqli_close($conn);
	}
?>