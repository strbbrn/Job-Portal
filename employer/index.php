<?php
include("./template/header.php");
?>
<section class=" job-bg ad-details-page">
    <div class="container">
        <div class="breadcrumb-section">

            <ol class="breadcrumb">
                <li><a href="index-2.html">Home</a></li>
                <li>Job Post </li>
            </ol>
            <h2 class="title">Post Your Job</h2>
            <h2 class="title">Welcome, ABC Software and technology</h2>
        </div>
        <div class="job-postdetails">
            <div class="row">
                <div class="col-lg-8">
                    <form action="#">
                        <fieldset>
                            <div class="section postdetails">
                                <h4>Post Your Job<span class="pull-right">* Mandatory Fields</span></h4>
                                <div class="row form-group add-title">
                                    <label class="col-sm-3 label-title">Job Category</label>
                                    <div class="col-sm-9">
                                        <div class="dropdown category-dropdown">
                                            <select name="job_cat" id="job_cat">
                                                <!-- //add option  -->
                                                <option value="">Select Category</option>
                                                <option value="Software Engineer">Software Engineer</option>
                                                <option value="hardware Enginner">Hardware Engineer</option>
                                                <option value="Cloud Engineer">Cloud Engineer</option>
                                                <option value="Salesforce Admin">Salesforce Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3">Job Type<span class="required">*</span></label>
                                  <select id="job_type" name="job_type">
                                        <option value="">Select Type</option>
                                        <option value="Full Time">Full-time</option>
                                        <option value="Part Time">Part-time</option>
                                        <option value="Contract">Contract</option>

                                  </select>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Title for your job<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="ex, Human Resource Manager" id="job_title">
                                    </div>
                                </div>
                                <div class="row form-group item-description">
                                    <label class="col-sm-3 label-title">Description<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control"  placeholder="Write few lines about your jobs" rows="8" id="desc"></textarea>
                                    </div>
                                </div>
                                <div class="row characters">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <p>2500 characters max</p>
                                    </div>
                                </div>
                                <div class="row form-group item-description">
                                    <label class="col-sm-3 label-title">Education<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" placeholder="UG :BCA in Computers
PG :MCA in Computers" rows="8" id="education"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group select-price">
                                    <label class="col-sm-3 label-title">Salary<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <label>$USD</label>
                                        <input type="text" class="form-control" placeholder="Min" id="salary_min">
                                        <span>-</span>
                                        <input type="text" class="form-control" placeholder="Max" id="salary_max">

                                    </div>
                                </div>
                                <div class="row form-group add-title">
                                    <label class="col-sm-3 label-title">Salary Type<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <div class="dropdown category-dropdown">
                                            <select name="salary_type" id="salary_type">
                                                <!-- //add option  -->
                                                <option value="">Select Type</option>
                                                <option value="Hourly">Hourly</option>
                                                <option value="Monthly">Monthly</option>
                                                <option value="Per Annum">Per Annum</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group add-title">
                                    <label class="col-sm-3 label-title">Exprience<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <div class="dropdown category-dropdown">
                                            <select name="experience" id="experience">
                                                <!-- //add option  -->
                                                <option value="">Select Experience</option>
                                                <option value="Entry Level">Entry Level</option>
                                                <option value="Mid Level">Mid Level</option>
                                                <option value="High Level">High Level</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group brand-name">
                                    <label class="col-sm-3 label-title">Skills<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="developer,cloud,java,c,php,json" id="skills">
                                    </div>
                                </div>
                            </div>


                            <div class="checkbox section agreement">

                                <button type="button" class="btn btn-primary" id="post">Post Your Job</button>

                        </fieldset>
                    </form>
                </div>

                <div class="col-lg-4">
                    <div class="section quick-rules">
                        <h4>Quick rules</h4>
                        <p class="lead">Posting an ad on <a href="#">Job Portal</a> is free! However, all ads must follow our rules:</p>
                        <ul>
                            <li>Make sure you post in the correct category.</li>
                            <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                            <li>Do not upload pictures with watermarks.</li>
                            <li>Do not post ads containing multiple items unless it's a package deal.</li>
                            <li>Do not put your email or phone numbers in the title or description.</li>
                            <li>Make sure you post in the correct category.</li>
                            <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                            <li>Do not upload pictures with watermarks.</li>
                            <li>Do not post ads containing multiple items unless it's a package deal.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include("./template/footer.php");
?>
<script src="js/bootstrap.min.js" type="58807d98e23a6c19fb0915c5-text/javascript"></script>
<!-- ajax post call to post-job.php with form data -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#post').click(function() {
            var job_cat = $('#job_cat option:selected').val();
            var jobType = $('#job_type option:selected').val();
            var title = $('#job_title').val();
            var desc = $('textarea#desc').val();
            var education = $('textarea#education').val();
            var salary_min = $('#salary_min').val();
            var salary_max = $('#salary_max').val();
            var salary_type = $('#salary_type option:selected').val();
            var experience = $('#experience option:selected').val();
            var skills = $('#skills').val();
            // check if all fields are filled
            if (job_cat == '' || jobType == '' || title == '' || desc == '' || education == '' || salary_min == '' || salary_max == '' || salary_type == '' || experience == '' || skills == '') {
                alert('Please fill all fields');
            }
            else {
            var formData = {
                'job_cat': job_cat,
                'jobType': jobType,
                'title': title,
                'desc': desc,
                'education': education,
                'salary_min': salary_min,
                'salary_max': salary_max,
                'salary_type': salary_type,
                'experience': experience,
                'skills': skills
                       };
            $.ajax({
                type: "POST",
                url: "../api/post-job.php",
                data: formData,
                success: function(data) {
                    console.log(data);
                    location.href = '../job-details.php?job_id='+data.job_id;
                   
                }
            });
        //alert fileds
        //alert(job_cat+jobType+" "+title+" "+desc+" "+education+" "+salary_min+" "+salary_max+" "+salary_type+" "+experience+" "+skills);
        }
        });
    });
</script>

</html>