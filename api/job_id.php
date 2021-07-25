<?php
//header json output
header('Content-type: application/json');

include('../resources/fun.php');
//fetch GET data with variable job_id
$job_id = $_POST['job_id'];
//check if job_id is empty
if(empty($job_id)){
    //if empty, return error
    echo json_encode(array('error'=>'Job ID is empty'));
}else{
    //if not empty, get job_id from database
    $conn = connect();
    $job_id = $conn->real_escape_string($job_id);

$sql = "SELECT employers.name,employer_type, job_listed.title,job_listed.id, job_desc.description, job_desc.experience,job_desc.type,
job_desc.education,job_desc.skills,salary.min_salary,salary.max_salary,salary.salary_type FROM job_listed JOIN job_desc ON job_listed.id = job_desc.job_id JOIN employers ON employers.id = job_listed.posted_by JOIN salary ON salary.job_id = job_listed.id Where job_listed.id = '$job_id'";

//execute query
$result = mysqli_query($conn, $sql);
//check if any result is present
if(!$result)
{
    die('Could not perform query: ' . mysqli_error($conn));
}

$row = mysqli_fetch_array($result);
$arr[] = $row; 

echo json_encode($arr);
//close the connection
close($conn);
}
    
?>