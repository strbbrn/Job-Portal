<?php
header('Content-type: application/json');

include('../resources/fun.php');
//calling database connection function
$conn = connect();
	session_start();
    
	//inserting data into the database tables job_listed and job_desc and checking if the job is already listed
   
    //check Post values
    if(!empty($_POST['job_cat']) && !empty($_POST['jobType']) && !empty($_POST['title']) && !empty($_POST['desc']) && !empty($_POST['education']) && !empty($_POST['salary_min']) && !empty($_POST['salary_max']) && !empty($_POST['salary_type']) && !empty($_POST['experience']) && !empty($_POST['skills'])){
        
            $job_category = $_POST['job_cat'];
            $job_type = $_POST['jobType'];
            $job_title = $_POST['title'];
            $job_desc = $_POST['desc'];
            $education = $_POST['education'];
            $salary_min = $_POST['salary_min'];
            $salary_max = $_POST['salary_max'];
            $salary_type = $_POST['salary_type'];
            $experience = $_POST['experience'];
            $skills = $_POST['skills'];

          
            $sql = "INSERT INTO `job_listed`( `title`, `posted_by`) VALUES('$job_title','1')";
            $result = mysqli_query($conn, $sql);
            if(!$result){
                die('{"error":"Could not insert data into job_listed table"}');
            }
            else{
            $job_id = mysqli_insert_id($conn);
            // echo json_encode(array("job_id"=>$job_id));
            $sql1 ="INSERT INTO `job_desc`( `job_id`, `description`, `experience`, `education`, `skills`, `type`) VALUES ('$job_id','$job_desc','$experience','$education','$skills','$job_type'); INSERT INTO `salary`(`job_id`, `min_salary`, `max_salary`, `salary_type`) VALUES ('$job_id','$salary_min','$salary_max','$salary_type')";
                $result1=mysqli_multi_query($conn, $sql1);
                if(!$result1){
                    die('{"error":"Could not insert data into job_desc table"}');
                }
                else{
                   echo json_encode(array("job_id"=>$job_id));
                }

        }
            //
    }
    else{
        echo json_encode(array('status'=>'error'));
    }

?>
