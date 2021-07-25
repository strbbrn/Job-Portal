<?php
header('Content-type: application/json');

include('../resources/fun.php');
//calling database connection function
$conn = connect();
	session_start();
    
	if(isset($_POST['type'])){
        if($_POST['type']==1){
		
		//fetch jobs from job_listed table
        $sql = "SELECT * FROM job_listed WHERE posted_by = '1'";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
            $arr[]= $row;
        }
        echo json_encode($arr);

      
		
		mysqli_close($conn);
    }
	}
	
?>