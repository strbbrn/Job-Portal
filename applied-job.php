<?php
 include("./template/header.php");
//check session variable username is not empty

if (!isset($_SESSION['username']) && empty($_SESSION['username'])) {
	$_SESSION['follow_url'] = true;
	header("location: login.php");
} else {
	echo	"<script>alert($_SESSION[username]);</script>";
}
?>


	<section class=" job-bg page  ad-profile-page">
		<div class="container">
			<div class="breadcrumb-section">
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>Applied Job</li>
				</ol>
				<h2 class="title">Applied Job</h2>
			</div>
			<div class="job-profile section">
				<div class="user-profile">
					<div class="user-images">
						<img src="images/user.jpg" alt="User Images" class="img-fluid">
					</div>
					<div class="user">
						<h2>Hello, <a href="#" id="email"><?php echo $_SESSION['username']; ?></a></h2>

					</div>

				</div>
			</div>
			<div class="section trending-ads latest-jobs-ads">
				<h4>Applied Jobs</h4>
				<span id="job_details"></span>

			</div>
		</div>
	</section>

<?php 
 include("./template/footer.php");
?>

	<script src="js/bootstrap.min.js" type="aee10a4000161ce55bc07dc2-text/javascript"></script>
	<!-- cdn add jquery -->

	<script>
		$(document).ready(function() {
			var username = "<?php echo $_SESSION['username']; ?>";
			//alert(username);
			$.ajax({
				type: "POST",
				url: "api/view-applied-jobs.php",
				data: {
					'type': 1,
					'username': username,
				},

				success: function(jobs) {
					console.log(jobs);
					//set the job details
					//for each jobs
					//alert(jobs);	
					if(jobs.statusCode==201){
						$("#job_details").append("Not Applied For Any Job");
				}else
				{
					
					$.each(jobs, function(i, job) {
					$("#job_details").append("<div class='job-ad-item'><div class='item-info'><div class='item-image-box'>" +
						"</div>" +
						"<div class='ad-info'><span><a href='job-details.php?job_id="+job.id+"' class='title'>"+job.title+"</a> @ <a href='#'>"+job.name+"</a></span>" +
						"<div class='ad-meta'><ul><li><a href='#'><i class='fa fa-diamond' aria-hidden='true'></i>"+job.experience+ "</a></li>" +
						"<li><a href='#'><i class='fa fa-clock-o' aria-hidden='true'></i>"+job.type+"</a></li>" +
						"<li><a href='#'><i class='fa fa-money' aria-hidden='true'></i>"+job.min_salary+"-"+ job.max_salary+"/"+ job.salary_type+"</a></li>" +
						"<li><a href='#'><i class='fa fa-tags' aria-hidden='true'></i>"+job.skills.replace(/([^\,]*\,){3}/, '')+"</a></li></a></li>" +
						"</ul></div></div><div class='close-icon'><i class='fa fa-window-close' aria-hidden='true'></i></div></div></div>");
				});
				}
			}
			});
		});
	</script>

</html>