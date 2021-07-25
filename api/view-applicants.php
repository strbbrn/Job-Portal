<?php
header('Content-type: application/json');

include('../resources/fun.php');
//calling database connection function
$conn = connect();
	session_start();
    
	if(isset($_POST['type'])){
        if($_POST['type']==1){
		$job_id = $_POST['job_id'];
		//echo json_encode(array("status"=>"success", "message"=>"Job Id $job_id"));
      // email from job_applied table where job id = $job_id

            
            $sql = "SELECT * FROM job_applied WHERE job_id = $job_id";
            $result = mysqli_query($conn, $sql);
            if(!$result){
                die('{"status":"failure", "message":"Error: '.mysqli_error($conn).'"}');
            }
            else{
                while($row = mysqli_fetch_array($result)){
                    $email = $row['email'];
                    $sql1 = "SELECT * FROM employees WHERE email = '$email'";
                    $result1 = mysqli_query($conn, $sql1);
                    if(!$result1){
                       
                        die('{"status":"failure", "message":"Error: '.mysqli_error($conn).'"}');
                        exit;
                    }
                    else{
                        $row1 = mysqli_fetch_array($result1);

                    $arr[] = $row1;
                    }
            }
            // check array for empty
            if(empty($arr)){
                echo '{"status":"failure", "message":"No such job"}';
                exit;
            }else
            echo json_encode($arr);
		
		mysqli_close($conn);
    }
	}
}
	
?>