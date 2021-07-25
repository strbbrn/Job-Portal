<?php
header('Content-type: application/json');

include('../resources/fun.php');
//calling database connection function
$conn = connect();
	session_start();
    
	if($_POST['type']==1){
		
		$email=$_POST['username'];
		//fetch job_id from table applied_jobs
        $sql = "SELECT job_id FROM job_applied WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        $arr=array();
        while($row = mysqli_fetch_array($result)){
            $job_id = $row['job_id'];
            //echo $job_id;
            $sql1 = "SELECT employers.name,employer_type, job_listed.title,job_listed.id, job_desc.description, job_desc.experience,job_desc.type,
            job_desc.education,job_desc.skills,salary.min_salary,salary.max_salary,salary.salary_type FROM job_listed JOIN job_desc ON job_listed.id = job_desc.job_id JOIN employers ON employers.id = job_listed.posted_by JOIN salary ON salary.job_id = job_listed.id Where job_listed.id = '$job_id'";
                    $result1 = mysqli_query($conn,$sql1);
                    if (mysqli_num_rows($result1)>0)
                    {
                       $row1=mysqli_fetch_array($result1);
                        
                            $arr[]= $row1;
                           
                        
                        
                    }
                    else{
                        
                            echo json_encode(array("statusCode"=>201));
                        }
                       
        }
        if(!empty($arr)){
        echo json_encode($arr);
        }
        else{
            echo json_encode(array("statusCode"=>201));
        }

      
		
		mysqli_close($conn);
	}
	
?>
