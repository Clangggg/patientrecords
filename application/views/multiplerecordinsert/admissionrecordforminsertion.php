 <?php $attributes = array('id' => 'add_admission_form', 'class' => 'form-horizontal user'); ?>
 <?php echo form_open('multiplerecordcontrol/add_multiple_admission/#Admission', $attributes); ?>
 <div class="container-fluid">

     <div class="row">

         <div class="col-sm-6 ">
             <div style="margin-bottom:17px; ">
                 <div class="row no-gutters">
                     <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Student LRN</div>
                 </div>
                 <div style="margin-right:20px;" class="h6 mb-1  text-gray-800">


                     <input class="form-control <?= (form_error('a_caseno') == "" ? '':'is-invalid') ?>" type="text"
                     minlength="12" maxlength="12" name="a_caseno" placeholder="Enter LRN" value="<?php echo set_value('a_caseno') ?>">

                     <div class="text-danger text-center"><?php echo form_error('a_caseno'); ?>
                     </div>
                 </div>
             </div>
         </div>

         <div class="col-sm-6 ">
             <div style="margin-bottom:17px; ">
                 <div class="row no-gutters">
                     <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Date of visit</div>
                 </div>
                 <div style="margin-right:20px;" class="h6 mb-1  text-gray-800">


                     <input class="form-control <?= (form_error('a_date') == "" ? '':'is-invalid') ?>" type="date"
                         name="a_date" value="<?php echo set_value('a_date') ?>">

                     <div class="text-danger text-center"><?php echo form_error('a_date'); ?>
                     </div>

                 </div>
             </div>
         </div>
     </div>
 </div>




 <div class="row">




 </div><!-- End of Row -->

 <div class="row">
     <div class="col-sm-6 ">
         <div style="margin-bottom:17px; width:96%;">
             <div class="row no-gutters ml-4">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Reason of visit</div>
             </div>
             <div class="h6 mb-1 ml-4 text-gray-800">

                 <select name="a_wards" class="form-control">
                     <option value="">Select</option>
                     <?php if(count($get_ward)): ?>
                     <?php foreach($get_ward as $ward): ?>
                     <option value=<?php echo $ward->w_name; ?><?php echo set_select('a_wards', $ward->w_name); ?>>
                         <?php echo $ward->w_name; ?></option>
                     <?php endforeach; ?>
                     <?php endif; ?>
                 </select>
                 <div class="text-danger text-center"><?php echo form_error('a_wards'); ?>

                 </div>
             </div>
         </div>
     </div>
     <div class="col-sm-4">
         <div style="margin-bottom:17px; width:140%;">
             <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Intervention</div>
             </div>
             <div class="h6 mb-1 text-gray-800">
                 <input class="form-control <?= (form_error('a_relationtopatient') == "" ? '':'is-invalid') ?>"
                     type="text" name="a_relationtopatient" placeholder="Enter intervention"
                     value="<?php echo set_value('a_relationtopatient') ?>">
                 <div class="text-danger text-center"><?php echo form_error('a_relationtopatient'); ?>

                 </div>
             </div>
         </div>
     </div>



 </div><!-- End of Row -->



 <br><br>




 <?php echo "<button style='margin-left: 410px; margin-bottom: 20px; text-decoration:none' type='submit' class='btn btn-primary bg-blue' name='submit' href='". base_url() ."admissioncontrol/admit_form'>" ?>
 <span class="icon text-white-100">
     <i class="fas fa-arrow-right"></i>
     Add clinical visit record
 </span>
 </button>




 <?php echo form_close(); ?>



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>