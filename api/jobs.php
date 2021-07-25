<?php
//header json output
header('Content-type: application/json');

include('../resources/fun.php');
//calling database connection function
$conn = connect();

//write the query from two tables job_listed and job_desc
//$sql = "SELECT job_id, title,posted_by, summary,perks,education,skills FROM job_listed JOIN job_desc ON job_listed.id = job_desc.job_id";
//write the query from three tables job_listed,job_desc and employers
$sql = "SELECT employers.name, job_listed.title,job_listed.id, job_desc.experience,job_desc.type,
job_desc.skills,salary.min_salary,salary.max_salary,salary.salary_type FROM job_listed JOIN job_desc ON job_listed.id = job_desc.job_id JOIN employers ON employers.id = job_listed.posted_by JOIN salary ON salary.job_id = job_listed.id";
//execute query
$result = mysqli_query($conn, $sql);
//check if any result is present
if(!$result)
{
    die('Could not perform query: ' . mysqli_error($conn));
}
//display the result
while($row = mysqli_fetch_array($result))
{
    $arr[] = $row; 
}
echo json_encode($arr);
//close the connection
close($conn);

?>