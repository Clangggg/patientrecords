


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
      
            <div class="card-header py-3">
           
            <!-- Page Heading -->
          <h5 class="mb-2 text-gray-800">Student Health Examination
                  </h5>  

            </div>
            <div class="card-body">

      
            
               <hr>
              <div class="container">
            
             </div>

              <div class="table">
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">

                  <thead>
                    <tr>
                      
                      <th class="text-center">Student's Name</th>
                      <th class="text-center">Findings</th>
                      <th class="text-center">Gender</th>
                      <th class="text-center">Age</th>
                      <th class="text-center">Date of Examination</th>
                      <th class='text-center' >Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    
                      <?php foreach($oldrecords as $patient): ?>
                   <tr>

                <?php echo "<td class='text-center'>". $patient->of_lname. ",    " .$patient->of_fname. "    " .$patient->of_mname. "    ".$patient->of_suffix ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->of_historypresentillness ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->of_gender ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->of_age ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->of_date ."</td>" ?>
                
                
                 <!-- <?php echo "<td class='text-center'><a style='margin-left:5px;' class='btn btn-primary bg-blue' href='". base_url() ."standardusercontrol/oldfindingsview/". $patient->of_id ."'>View
                  </a></td>" ?>
                 <?php echo "<td class='text-center'><a style='margin-left:5px;' class='btn btn-primary bg-blue' href='". base_url() ."standardusercontrol/delete_oldfindings/". $patient->of_id ."'>Delete
                  </a></td>" ?> -->
            
                <?php echo "<td class='text-center'><a style='margin-left:5px;' class='btn btn-primary bg-blue' href='". base_url() ."standardusercontrol/oldfindingsview/". $patient->of_id ."'>View
                  </a><a style='margin-left:5px;' class='btn btn-danger' href='". base_url() ."standardusercontrol/delete_oldfindings/". $patient->of_id ."'>Remove
                  </a></td>" ?>

                    </tr>           
                 <?php endforeach; ?>
               
                   
                  </tbody>

                </table>
              </div>
            </div>
          </div>


 

 <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>




 <script>

  $(document).ready(function(){
  
  $('#import_form').on('submit', function(event) {
    event.preventDefault();
   
   $.ajax({
     beforeSend:function(){
      $('#btn-upload').html('Importing...');
     },
      success:function(){
       $('#import_form')[0].reset();
       $('#btn-upload').attr('disabled', false);
       $('#btn-upload').html('Import Done');
      }
   });

  });

</script>



