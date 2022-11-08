 <?php $attributes = array('id' => 'add_admission_form', 'class' => 'form-horizontal user'); ?>
 <?php echo form_open('admissioncontrol/admit_form/'.$this->uri->segment(3).'#admission', $attributes); ?>
 <div class="container-fluid">

     <div class="row">
     <div class="col-sm-6">
             <div style="margin-bottom:17px;">
                 <div class="row no-gutters">
                     <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Reason of visit</div>
                 </div>
                 <div class="h6 mb-1  text-gray-800">

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
         <div class="col-sm-6">
             <div style="margin-bottom:17px;">
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
   








     <?php echo "<button style='margin-left: 250px; margin-bottom: 20px; text-decoration:none' type='submit' class='btn btn-primary bg-blue' name='submit' href='". base_url() ."admissioncontrol/admit_form/". $get_data->pr_id ."#admission'>" ?>
     <span class="icon text-white-100">
         <i class="fas fa-arrow-right"></i>
         Add visit
     </span>
     </button>




     <?php echo form_close(); ?>



     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>