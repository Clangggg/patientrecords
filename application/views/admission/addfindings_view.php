
  <div class="align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 text-center">Student Record</h1>
          </div>

	<div class="row"> <!-- Begin of Row -->

	    <div class="col-xl-8 col-md-8 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                  	<div class="col-auto">
    			 	 <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">STUDENT NAME</div>
    			 	 </div>
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      	&nbsp&nbsp&nbsp&nbsp&nbsp
                      	<?php echo $get_data->pr_lname ?>,&nbsp&nbsp
                      	<?php echo $get_data->pr_fname ?>&nbsp&nbsp
                      	<?php echo $get_data->pr_mname ?>&nbsp&nbsp
                        <?php echo $get_data->pr_suffix ?>
                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <div class="col-xl-4 col-md-6 mb-4 ml-auto">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                  	<div class="col-auto">
        			 <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">LRN</div>
    			 	 </div>
                       <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      	<?php echo "".$get_data->pr_id ?>
                        
                      </div>
                    </div>   
                  </div>
                </div>
              </div>
            </div>


    </div><!-- End of Row -->


<div class="row"><!-- Begin Row -->
 
  <!-- First Column -->
            <div class="col-lg-4">

              <!-- Details -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Details <?php echo "<a style='margin-left: 225px; text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/patient_edit_option/". $get_data->pr_id ."'>" ?> 
                    <i class="fa fa-edit"></i></a> </h6>        
                </div>
               <div class="card-body"> <!--Card Body begin tag  -->

           <!-- <?php if($this->session->flashdata('patientrecordoption_updated')): ?>  
          <?php echo "<div style='#1cc88a' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><i class='con fa fa-check'></i></h6>".$this->session->flashdata('patientrecordoption_updated') ."</div>" ?>
           <?php endif; ?> -->
               
               <div style="margin-bottom:17px;">
               	<div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Address</div>   
                </div>
 				<div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_data->pr_addrs; ?></div>
               </div>

               <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Age</div>   
                </div>
 				<div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_data->pr_age; ?></div>
 			   </div>
    
              <div style="margin-bottom:17px;">
 				<div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Birthdate</div> 
                </div>
 				<div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_data->pr_bdate; ?></div>
 			  </div>
               
               <div style="margin-bottom:17px;">
 				<div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Birthplace</div>
                </div>
 				<div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_data->pr_bplace; ?></div>
 			   </div>

          <div style="margin-bottom:17px;">
 				<div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Vaccination Status</div>
                </div>
 				<div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_data->pr_vaccinestat; ?></div>
 			   </div>

 			   <div style="margin-bottom:17px;">
 				<div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Region</div>
                </div>
 				<div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_data->pr_civilstat; ?></div>
 			   </div>

          <div style="margin-bottom:17px;">
 				<div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Division</div>
                </div>
 				<div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_data->pr_divi; ?></div>
 			   </div>

 			   <div style="margin-bottom:17px;">
 				<div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Gender</div>
                </div>
 				<div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_data->pr_gen; ?></div>
 			   </div>

 			   <div style="margin-bottom:18px;">
 				<div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Tel/Mobile No.</div>
                </div>
 				<div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_data->pr_number; ?></div>
 			   </div>

 			    <div style="margin-bottom:18px;">
 				<div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Parent/Guardian</div>
                </div>
 				<div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_data->pr_religion; ?></div>
 			   </div> 

 			    <div style="margin-bottom:18px;">
 				<div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">School</div>
                </div>
 				<div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_data->pr_occup; ?></div>
 			   </div>

         <div style="margin-bottom:18px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Date Added</div>
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_data->pr_date; ?></div>
         </div>



                </div><!--Card body end tag -->
              </div>
			
		   </div>



      <!-- Findings Box -->
            <div  id="findings" class="col-xl-8 col-lg-4">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                   <h6 class="m-0 font-weight-bold text-primary">Student Health Examination <?php echo "<a style='margin-left: 390px; text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/patientdataview/". $get_data->pr_id ."#findings'>" ?> <i class="fa 
                   fa-arrow-left"></i></a></h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  
                 <?php $this->load->view($add_findings); ?>

                </div>
              </div>
               <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Clinical Visit </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                 
                  
                  <div class="table">

                <table class="table table-bordered" id="dataTable" cellspacing="0">

                  <thead>
                    <tr>
                      <th class="text-center">Reason of visit</th>
                      <th class="text-center">Intervention</th>
                      <th class="text-center">Date of visit</th>
                    </tr>
                  </thead>
                  <tbody>
           
               <?php foreach($get_admission_data as $admission): ?>
                
                    <tr>

                       <?php echo "<td class='text-center'>". $admission->ad_wardname. "</td>" ?>
                       <?php echo "<td class='text-center'>". $admission->ad_relationtopatient. "</td>" ?>
                       <?php echo "<td class='text-center'>". $admission->ad_date ."</td>" ?>     
                
                
                    </tr>      

                 <?php endforeach; ?>

                  </tbody>
                </table>
              </div>

                </div>
              </div>
            </div>
 
     

</div><!-- End of Row -->

 
