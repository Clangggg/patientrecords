
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
      
            <div class="card-header py-3">
           
            <!-- Page Heading -->
          <h5 class="mb-2 text-gray-800">User Logs
                  </h5>  

            </div>
            <div class="card-body">

      
            
               <hr>
              <div class="container">
            
             </div>

              <div class="table">
                <table class="table  " id="dataTable" width="100%" cellspacing="0">

                  <thead>
                    <tr>
                      
                      <th class="text-center">Username</th>
                      <th class="text-center">Full Name</th>  
                      <th class="text-center">Log Date/Time</th>
                    </tr>
                  </thead>

                  <tbody>
                    
                      <?php foreach($get_log_findings as $userlog): ?>
                   <tr>

                <?php echo "<td class='text-center'>". $userlog->su_user ."</td>" ?>
                <?php echo "<td class='text-center'>". $userlog->su_fname ."</td>" ?>
                 <?php echo "<td class='text-center'>". $userlog->log_time ."</td>" ?>         


            
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






