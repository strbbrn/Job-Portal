<?php
include('./template/header.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Applicants</div>
                <div class="panel-body">
                    <select class="form-control" id="job_list" >
                        <option value="">Select Posted Job</option>
                    </select>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Applicants</div>
                                <div class="panel-body">
                                    <h2><span id="no_app"></span></h2>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Applicant Name</th>
                                                <th>Applicant Email</th>
                                                <th>Applicant Phone</th>
                                                <th >Short Info</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody id="tbodyid">
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                        
<?php
include('./template/footer.php');
?>
<script type="text/javascript">
 $.ajax({
            type: "POST",
            url: "../api/posted-jobs.php",
            data: {
                'type':1
            },
            success: function (response) {
                //console.log(response);
                //for each set option to select box
            //for each set option to select box
            $.each(response, function(i, data) {
                $('#job_list').append($("<option></option>")
                    .attr("value", data.id)
                    .text(data.title +" Job Id "+ data.id));
               
                
            });
            }
        });

</script>
<script type="text/javascript">
$(document).ready(function(){
  // on select change event get the value of the selected option
  $('#job_list').on('change', function() {
  //alert( this.value );
  var job_id = this.value;
  $.ajax({
            type: "POST",
            url: "../api/view-applicants.php",
            data: {
                'type':1,
                'job_id':job_id
            },
            success: function (response) {
                // console.log(response);
                // console.log(response.status);
                
              
            if(response.status=="failure"){
                $('table').hide();
                $('#no_app').show();
                console.log("failure");
                $('#no_app').html("NO APPLICANTS APPLIED FOR THIS JOB");
               
            }
            else{
                $('#no_app').hide();
                $('table').show();
                $("#tbodyid").empty();
                $.each(response, function(i, data) {
                //console.log(data);
                   // console.log(data.fname);
                markup = "<tr><td>" +data.fname+" "+data.lname+ "</td><td>"+data.email+"</td>"+
                "<td>"+data.contact+"</td><td style='width: 40%;'>"+data.short_info +"</td></tr>";
                tableBody = $("table tbody");
                tableBody.append(markup);
                
            });
            }
          
            }
        });
});  
  
});
</script>
</html>