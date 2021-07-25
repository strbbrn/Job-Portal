$(function(){

    $.ajax({
        type: "GET",
        url: "api/jobs.php",
        success: function (jobs) {
            $.each(jobs, function (i,job) {
                $("#job-list").append("<div class='item-info'>"+"<div class='item-image-box'>"+
               
                "</div>"+
                "<div class='ad-info'>"+
                "<span><a href='job-details.php?job_id="+job.id+"' class='title'>"+ job.title +"</a> @ <a href='#'>"+job.name+"</a></span>"+
                "<div class='ad-meta'>"+
                "<ul>"+
                "<li><a href='#'><i class='fa fa-diamond' aria-hidden='true'></i>"+job.experience+"</a></li>"+
                 "<li><a href='#'><i class='fa fa-clock-o' aria-hidden='true'></i>"+job.type+"</a></li>"+
                 "<li><a href='#'><i class='fa fa-money' aria-hidden='true'></i>"+job.min_salary+"-"+ job.max_salary+"/"+ job.salary_type+"</a></li>"+
               "<li><a href='#'><i class='fa fa-tags' aria-hidden='true'></i>"+job.skills.replace(/([^\,]*\,){3}/, '')+"</a></li>"+
              "  </ul></div></div>"+
                "<div class='button'>"+
               " <a href='job-details.php?job_id="+job.id+"' class='btn btn-primary'>View</a>"+
                "</div> </div>");
          
                
            });
        },
        error:function(err){
            $("#job-list").append("<h3>Still Loading Jobs</h3>");
            console.log("error",err);
        }
    });
});