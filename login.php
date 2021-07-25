<?php 
  //check get job id
  include("./template/header.php");
  if(isset($_SESSION['job_id'])&&!empty($_SESSION['job_id'])){
    $id = $_SESSION['job_id'];
   // echo "<script> alert($id)</script>";
  }else
  $id =0;
  if(isset($_SESSION['follow_url'])&&!empty($_SESSION['follow_url'])){
    $follow_url = $_SESSION['follow_url'];
  }else
  $follow_url=false;

  if(isset($_SESSION['username'])&&!empty($_SESSION['username'])){
    header("Location: ./index.php");
  }
  ?>


  <section class="clearfix job-bg user-page">
    <div class="container text-center">
      <div class="user-account-content">
        <div class="user-account">
          <h2>User Login</h2>
          <a href="login.txt"> Click here to Get Login details</a>
          <form id="login_form" name="form1" method="post" >
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Username" id="username">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password" id="password">
            </div>
            <input type="button" name="save" class="btn btn-primary" value="Login" id="login">
          </form>

          <div class="user-option">
            <div class="checkbox pull-left">
              <label for="logged"><input type="checkbox" name="logged" id="logged"> Keep me logged in </label>
            </div>
            <div class="pull-right forgot-password">
              <a href="#">Forgot password</a>
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </section>
<?php include("./template/footer.php"); ?>
  
  <script src="js/bootstrap.min.js" type="d9c3033c9bf05f6daa088d22-text/javascript"></script>
  <!-- on login button clicked call ajax post with data username and password -->
 
  <script type="text/javascript">
    $(document).ready(function() {
      $('#login').on('click',(function() {
       // alert('Login');
        var username = $('#username').val();
        var password = $('#password').val();
        
        // alert(password);
        var job_id = '<?php echo $id; ?>';
        //alert(job_id);
        var follow_url = '<?php echo $follow_url; ?>';
        $.ajax({
          type: "POST",
          url: "api/validate.php",
          data: {
            'type':2,
            'username': username,
            'password': password
          },
          success: function(data) {
           
            if (data.statusCode == 200) {
              if(job_id != 0){
                 location.href = "job-details.php?job_id="+job_id;
            }else if(follow_url){
                  location.href="applied-job.php";
            } 
            else{
              location.href = "index.php";
            }
            
          }
          else {
              alert('Invalid username or password');
            }
        },
      error: function(data) {
        alert('Invalid username or password');
        }
      });
    }));
  });
  </script>

</html>