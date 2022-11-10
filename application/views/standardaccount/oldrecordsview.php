


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
                      
                      <th>Last Name</th>
                      <th>First Name</th>
                      <th>Middle Name</th>
                      <th class="text-center">Examination Details</th>
                      <th>Gender</th>
                      <th>Age</th>
                      <th>Date of Examination</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    
                      <?php foreach($oldrecords as $patient): ?>
                   <tr>

                <?php echo "<td class='text-center'>". $patient->of_lname ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->of_fname ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->of_mname ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->of_historypresentillness ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->of_gender ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->of_age ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->of_date ."</td>" ?>
                
                
                 <?php echo "<td class='text-center'><a style='margin-left:5px;' class='btn btn-primary bg-blue' href='". base_url() ."standardusercontrol/oldfindingsview/". $patient->of_id ."'>View
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



