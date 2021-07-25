<?php

//start session
session_start();
//check to see if user is logged in

if(!isset($_SESSION['username']) || !$_SESSION['username']) {
    //check get job_id
    if(isset($_GET['job_id'])) {
        $job_id = $_GET['job_id'];
    }
    $_SESSION['job_id']= $job_id;
    header("Location: login.php");
   // echo $_SESSION['job_id'];
    exit;
}
else {
    $user_id = $_SESSION['username'];
    if(isset($_GET['job_id'])) {
        $job_id = $_GET['job_id'];
    }
    $_SESSION['job_id']= $job_id;
    //echo $user_id;
    $status = true;
}


?>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<!-- ajax post -->
<script>
    var status = <?php echo $status; ?>;
    var username = '<?php echo $_SESSION['username']; ?>';
    var job_id = '<?php echo $_SESSION['job_id']; ?>';
    //alert(username+" "+job_id);
    if(status == true) {
        
    $.ajax({
        type: "POST",
        url: "api/job-applied.php",
        data: {
            'username': username,
            'job_id': job_id
        },
        success: function (data) {
            if (data.statusCode == 200) {
                //console.log("sucess");
              
                location.href = "job-details.php?job_id="+job_id;
            }else if(data.statusCode == 201){
              //console.log("error");
               location.href="index.php";
            } 
        
        },
        error: function (data) {
        ;
            location.href="index.php";
        }
    });
}
</script>