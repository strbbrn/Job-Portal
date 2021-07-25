<?php 
//including header.php from template dir
include("./template/header.php");

?>
<div class="banner-job">
  <div class="banner-overlay"></div>
  <div class="container text-center">
    <h1 class="title">The Easiest Way to Get Your New Job</h1>
    <h3>We offer 12000 jobs vacation right now</h3>


  </div>
</div>
<div class="page">
  <div class="container">

    <div class="section latest-jobs-ads">
      <div class="section-title tab-manu">
        <h4>Latest Jobs</h4>
      </div>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active show" id="popular-jobs">
          <div class="job-ad-item">
            <span id="job-list">

            </span>
          </div>

        </div>
      </div>
    </div>


  </div>
</div>






<script src="js/main.js" ></script>

<?php include("./template/footer.php"); ?>)
</body>

</html>