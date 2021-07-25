<?php 
 include("./template/header.php");
//fetch get variables job_id
$job_id = $_GET['job_id'];
//check if job_id is set
if(isset($job_id) && $job_id != ''){
}
else{
	//if job_id is not set redirect to home page
	header("Location: ../index.php");
}
?>


<section class="job-bg page job-details-page">
<div class="container">

<div class="job-details">

<div class="job-details-info">
<div class="row">
<div class="col-sm-8">
<div class="section job-description">
<div class="description-info">
		<h1>Job Title</h1>
<span id="title"></span>
	</div>
	<div class="description-info">
		<h1>Description</h1>
<span id="desc"></span>
	</div>
<div class="requirements">
	<h1>Education</h1>
<span id="education"></span>
</div>
<div class="requirements">
	<h1>Type</h1>
<span id="type"></span>
</div>
<div class="requirements">
	<h1>Salary</h1>
<span id="salary"></span>
</div>
<div class="requirements">
<a href="apply.php?job_id=<?php echo $job_id; ?>" id="applied" class="btn btn-primary">Apply For This Job</a>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="section job-short-info">
<h1>Short Info</h1>
<ul>

<li><span class="icon"><i class="fa fa-user-plus" aria-hidden="true" ></i></span> Company: <a href="#" id="posted_by"></a></li>
<li><span class="icon"><i class="fa fa-industry" aria-hidden="true" ></i></span>Industry: <a href="#" id="industry_type"></a></li>
<li><span class="icon"><i class="fa fa-line-chart" aria-hidden="true" ></i></span>Experience: <a href="#" id="experience"></a></li>
<li><span class="icon"><i class="fa fa-key" aria-hidden="true" ></i></span>Skills:<a href=# id="skills"> </a></li>
</ul>
</div>

</div>
</div>
</div>
</div>
</div>
</section>


<?php
 include("./template/footer.php");
?>




<script src="js/bootstrap.min.js" type="fd467064d71ba1b575c9c4b0-text/javascript"></script>
<!-- on page load  ajax post data  -->
<script type="text/javascript">
	var job_id = <?php echo $job_id ?>;
	$.ajax({
		type: "POST",
		url: "api/job_id.php",
		data: {
			'job_id': job_id
		},
		success: function(job) {			
			$("#posted_by").text(job[0].name);
			$("#industry_type").text(job[0].employer_type);
			$("#experience").text(job[0].experience);
			$("#skills").text(job[0].skills);
			//set span tag to job description
			$("#desc").text(job[0].description);
			$("#education").text(job[0].education);
			$("#salary").text(job[0].min_salary+"-"+job[0].max_salary+"/"+job[0].salary_type);
			$("#type").text(job[0].type);
			$("#title").text(job[0].title);
		
			
		},
		error: function() {
			console.log("error");
		}

	});

</script>

<!-- ajax post -->


<script>
    
	$(document).ready(function(){
		username = "<?php echo $_SESSION['username'] ?>";
		job_id = "<?php echo $job_id ?>";
       
    $.ajax({
        type: "POST",
        url: "api/validate-job.php",
        data: {
            'username': username,
            'job_id': job_id
        },
        success: function (data) {
            if (data.statusCode == 200) {
              
				$("#applied").text("Job Applied");
				  $("#applied").removeAttr('href')
            }else{
                  //disable applied button
				
            } 
            
        }
    });
});

</script>

</body>
</html>