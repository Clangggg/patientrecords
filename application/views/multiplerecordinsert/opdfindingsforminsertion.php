 <?php $attributes = array('id' => 'add_multiple_findings', 'class' => 'form-horizontal user'); ?>
 <?php echo form_open('multiplerecordcontrol/add_multiple_findings/#Findings', $attributes); ?>
 <div class="container-fluid">
     <div class="row">
         <div class="col-sm-4">
             <div style="margin-bottom:17px;">
                 <div class="row no-gutters">
                     <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Student LRN</div>
                 </div>
                 <div class="h5 mb-1 font-weight-bold text-gray-800"><input
                         class="form-control  <?= (form_error('a_casenumber') == "" ? '':'is-invalid') ?>" type="text"
                         minlength="12" maxlength="12" name="a_casenumber" placeholder="Enter LRN" value="<?php echo set_value('a_casenumber'); ?>">
                 </div>
                 <div class="text-danger text-center"><?php echo form_error('a_casenumber'); ?></div>
             </div>
         </div>
         <div class="col-sm-8">
             <div style="margin-bottom:17px; margin-left:60%;">
                 <div class="row no-gutters">
                     <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Date</div>
                 </div>
                 <div class="h5 mb-1 font-weight-bold text-gray-800"><input
                         class="form-control <?= (form_error('a_date') == "" ? '':'is-invalid') ?>" type="date"
                         name="a_date" placeholder="Enter Case Number" value="<?php echo set_value('a_date'); ?>">
                 </div>
                 <div class="text-danger text-center"><?php echo form_error('a_date'); ?></div>
             </div>
         </div>
     </div>


     <div class="row">
         <div class="col-sm-6">
             <div style="margin-bottom:17px;">
                 <div class="row no-gutters">
                     <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Examination Details
                     </div>
                 </div>
                 <div class="h5 mb-1 font-weight-bold text-gray-800">
                     <select name="a_historyillness" class="form-control">
                         <option value="">Select</option>
                         <?php if(count($get_details)): ?>
                         <?php foreach($get_details as $details): ?>
                         <option
                             value=<?php echo $details->de_name; ?><?php echo set_select('a_historyillness', $details->de_name); ?>>
                             <?php echo $details->de_name; ?></option>
                         <?php endforeach; ?>
                         <?php endif; ?>
                     </select>
                 </div>
                 <div class="text-danger text-center"><?php echo form_error('a_historyillness'); ?></div>
             </div>



             <div style="margin-bottom:17px;">
                 <div class="row no-gutters">
                     <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Vital Signs</div>
                 </div>
                 <div class="row">
                     <!--Begin First Column -->
                     <div class="col-sm-4">
                         <?php echo form_label('Blood Pressure'); ?>
                         <input class="form-control" type="text" name="a_bp" value="<?php echo set_value('a_bp'); ?>"
                             placeholder="BP">
                     </div>
                     <div class="col-sm-4">
                         <?php echo form_label('Respiratory Rate'); ?>
                         <input class="form-control" type="text" name="a_rr" value="<?php echo set_value('a_rr'); ?>"
                             placeholder="RR/HR">
                     </div>
                     <div class="col-sm-4">
                         <?php echo form_label('Pulse Rate'); ?>
                         <input class="form-control" type="text" name="a_pulse"
                             value="<?php echo set_value('a_pulse'); ?>" placeholder="PR">
                     </div>
                 </div>
                 <!--End First Column -->
                 <div class="row">
                     <!--Begin Second Column -->
                     <div class="col-sm-4 mt-3">
                         <?php echo form_label('Temperature'); ?>
                         <input class="form-control" type="text" name="a_temp"
                             value="<?php echo set_value('a_temp'); ?>" placeholder="in C ">
                     </div>
                     <div class="col-sm-4 mt-3">
                         <?php echo form_label('Weight'); ?>
                         <input class="form-control" type="text" name="a_wt" value="<?php echo set_value('a_wt'); ?>"
                             placeholder="in kg">
                     </div>
                     <div class="col-sm-4 mt-3">
                         <?php echo form_label('Height'); ?>
                         <input class="form-control" type="text" name="a_pr" value="<?php echo set_value('a_pr'); ?>"
                             placeholder="in cm">
                     </div>
                 </div>

                 <div style="margin-bottom:17px;">
                     <div class="row no-gutters">
                         <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1 mt-4">Nutritional
                             Status
                         </div>
                     </div>
                     <div class="h5 mb-1 font-weight-bold text-gray-800">
                         <select name="a_cr" class="form-control">
                             <option value="">Select</option>
                             <?php if(count($get_cr)): ?>
                             <?php foreach($get_cr as $cr): ?>
                             <option value=<?php echo $cr->cr_name; ?><?php echo set_select('a_cr', $cr->cr_name); ?>>
                                 <?php echo $cr->cr_name; ?></option>
                             <?php endforeach; ?>
                             <?php endif; ?>
                         </select>
                     </div>
                     <div class="text-danger text-center"><?php echo form_error('a_cr'); ?></div>
                 </div>
                 <div class="row no-gutters">
                     <div class="text-xs font-weight-bold text-primary text-uppercase mt-3">Refer to the Reference</div>
                 </div>
                 <div class="row no-gutters mt-2">
                     <?php echo form_label('Visual Acuity'); ?>
                     <input class="form-control" type="text" name="a_physicalexam"
                         value="<?php echo set_value('a_physicalexam'); ?>" placeholder="">
                 </div>

                 <div class="row no-gutters mt-3">
                     <?php echo form_label('Hearing (Tuning fork)'); ?>
                     <input class="form-control" type="text" name="a_diagnosis"
                         value="<?php echo set_value('a_diagnosis'); ?>" placeholder="">
                 </div>

                 <div class="row no-gutters mt-3">
                     <?php echo form_label('Skin/Scalp'); ?>
                     <input class="form-control" type="text" name="a_medical_treatment"
                         value="<?php echo set_value('a_medical_treatment'); ?>" placeholder="">
                 </div>

                 <div class="row no-gutters mt-3">
                     <?php echo form_label('Eyes/Ears/Nose'); ?>
                     <input class="form-control" type="text" name="a_chief_complaint"
                         value="<?php echo set_value('a_chief_complaint'); ?>" placeholder="">
                 </div>

                 <div class="row no-gutters mt-3">
                     <?php echo form_label('Mouth/Neck/Throat'); ?>
                     <input class="form-control" type="text" name="a_mouth" value="<?php echo set_value('a_mouth'); ?>"
                         placeholder="">
                 </div>

                 <div class="row no-gutters mt-3">
                     <?php echo form_label('Lungs/Heart'); ?>
                     <input class="form-control" type="text" name="a_lungs" value="<?php echo set_value('a_lungs'); ?>"
                         placeholder="">
                 </div>

                 <div class="row no-gutters mt-3">
                     <?php echo form_label('Abdomen/Genitalia'); ?>
                     <input class="form-control" type="text" name="a_abdo" value="<?php echo set_value('a_abdo'); ?>"
                         placeholder="">
                 </div>

                 <div class="row no-gutters mt-3">
                     <?php echo form_label('Spine/Extremities'); ?>
                     <input class="form-control" type="text" name="a_spine" value="<?php echo set_value('a_spine'); ?>"
                         placeholder="">
                 </div>

                 <div class="row no-gutters mt-3">
                     <?php echo form_label('Remarks/Intervention'); ?>
                     <select name="a_remarks" class="form-control">
                         <option value="">Select remarks</option>
                         <?php if(count($get_remarks)): ?>
                         <?php foreach($get_remarks as $remarks): ?>
                         <option
                             value=<?php echo $remarks->r_name; ?><?php echo set_select('a_remarks', $remarks->r_name); ?>>
                             <?php echo $remarks->r_name; ?></option>
                         <?php endforeach; ?>
                         <?php endif; ?>
                     </select>
                 </div>

                 <div class="row no-gutters mt-3">
                     <?php echo form_label('Others, specify'); ?>
                     <input class="form-control" type="text" name="a_others"
                         value="<?php echo set_value('a_others'); ?>" placeholder="">
                 </div>

                 <div class="row no-gutters mt-3">
                     <?php echo form_label('Attending Physician'); ?>
                     <select name="a_physician" class="form-control">
                         <option value="">Select Physician</option>
                         <?php if(count($add_physician)): ?>
                         <?php foreach($add_physician as $physicians): ?>
                         <option
                             value=<?php echo $physicians->ph_name. ' / '.$physicians->ph_fieldofphysician; ?><?php echo set_select('a_physician', $physicians->ph_name.' / '.$physicians->ph_fieldofphysician); ?>>
                             <?php echo "Dr.".$physicians->ph_name.' / '.$physicians->ph_fieldofphysician; ?></option>
                         <?php endforeach; ?>
                         <?php endif; ?>
                     </select>
                 </div>





                 <!--End Second Column -->
             </div>
         </div><!-- End of Column 1 -->

         <div class="col-sm-6">


             <div style="margin-bottom:17px; font-size:13px;">
                 <h6 class="ml-3 mb-2 font-weight-bold text-s text-center mt-4 text-uppercase text-primary">Reference
                 </h6>

                 <p class="ml-5">Visual Acuity (Snellen's) <br> &nbsp &nbsp &nbsp &nbsp &nbsp a. Normal right &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp c. AbNormal right <br> &nbsp &nbsp &nbsp &nbsp &nbsp b. Normal left
                 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp d. AbNormal left</p>

                 <p class="ml-5">Hearing (Tuning fork) <br> &nbsp &nbsp &nbsp &nbsp &nbsp a. Normal right &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp c. AbNormal right <br> &nbsp &nbsp &nbsp &nbsp &nbsp b. Normal left
                 &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp d. AbNormal left</p>

                 <p class="ml-5">Skin/Scalp <br> &nbsp &nbsp &nbsp &nbsp &nbsp a. Normal &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  g. Hematoma <br> &nbsp &nbsp &nbsp &nbsp &nbsp b. Pediculosis
                 &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp h. Bruises <br> &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp  c. Tinea Flava &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp i. Cuts/lacerations <br>
                 &nbsp &nbsp &nbsp &nbsp &nbsp d. Ringworm &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp j. Allergy <br> &nbsp &nbsp &nbsp &nbsp &nbsp  e. Eczema &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp k. Others, specify <br>
                &nbsp &nbsp &nbsp &nbsp &nbsp   f. Impetigo/boil</p>

                <p class="ml-5">Eye/Ear/Nose <br> &nbsp &nbsp &nbsp &nbsp &nbsp a. Normal eye &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  f. Ear discharge <br> &nbsp &nbsp &nbsp &nbsp &nbsp b. Normal ears
                 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  g. Impacted cerumen <br> &nbsp &nbsp &nbsp &nbsp &nbsp c. Normal nose &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  h. Septal deviation <br> 
                 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspd. Squinting &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  i. Nasal discharge <br> &nbsp &nbsp &nbsp &nbsp &nbsp e. Pale conjunctivae &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp j. Others, specify</p>

                <p class="ml-5">Mouth/Neck/Throat <br> &nbsp &nbsp &nbsp &nbsp &nbsp a. Normal mouth &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp f. Inflamed pharynx<br> &nbsp &nbsp &nbsp &nbsp &nbsp b. Normal throat
                 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp with/w/o exudates  <br> &nbsp &nbsp &nbsp &nbsp &nbsp c. Enlarged tonsils &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp g. Enlarged thyroid gland  <br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp with/w/o exudates  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp h. Speech defect<br> 
                 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspd. Lip lesion &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp i. Dental problem <br> &nbsp &nbsp &nbsp &nbsp &nbsp e. Enlarged tonsils  &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp j. Others, specify <br>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspwith/w/o exudates</p>

                <p class="ml-5">Lungs/Heart <br> &nbsp &nbsp &nbsp &nbsp &nbsp a. Normal lungs &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp f. Deformed chest<br> &nbsp &nbsp &nbsp &nbsp &nbsp b. Normal heart
                 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspg. Distant heart sounds <br> &nbsp &nbsp &nbsp &nbsp &nbsp c. Rales &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsph. Irregular heart rate <br> 
                 &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspd. Wheeze &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp i. Others, specify <br> &nbsp &nbsp &nbsp &nbsp &nbsp e. Murmur </p>

                <p class="ml-5">Abdomen/Genitalia <br> &nbsp &nbsp &nbsp &nbsp &nbsp a. Normal abdomen &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp e. Tenderness<br> &nbsp &nbsp &nbsp &nbsp &nbsp b. Normal genitalia
                &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp f. Genital discharge <br> &nbsp &nbsp &nbsp &nbsp &nbsp c. Mass &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  g. Hernia <br> 
                 &nbsp &nbsp  &nbsp &nbsp &nbsp d. Hemorrhoids &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsph. Others, specify  </p>

                <p class="ml-5">Spine/Extremities <br> &nbsp &nbsp &nbsp &nbsp &nbsp a. Normal spine &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  f. Kyphosis <br> &nbsp &nbsp &nbsp &nbsp &nbsp b. N upper extremities
                 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp g. Bowlegs/knock knees <br> &nbsp &nbsp &nbsp &nbsp &nbsp c. N lower extremities &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsph. Flat foot <br> 
                 &nbsp &nbsp &nbsp &nbsp &nbsp d. Scoliosis &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbspi. Club foot <br> 
                 &nbsp &nbsp &nbsp &nbsp &nbsp  e. Lordosis &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbspj. Others, specify</p>
             </div>


         </div><!-- End of Column 2 -->
     </div><!-- End of Row -->
     <div class="row">
         <div class="col-sm-6">

         </div>
         <div class="col-sm-6">

         </div>
     </div>

     <?php echo "<button style='margin-left: 410px; margin-top:30px;margin-bottom: 20px; text-decoration:none' type='submit' class='btn btn-primary bg-blue' name='submit' href='". base_url() ."multiplerecordcontrol/add_multiple_findings'>" ?>
     <span class="icon text-white-100">
         <i class="fas fa-arrow-right"></i>
         Add Record
     </span>
     </button>

 </div>


 <?php echo form_close(); ?>


 <script>
$(document).ready(function() {

    $('#medicalfield').change(function() {
        var fp_id = $('#medicalfield').val();
        if (fp_id != '') {
            $.ajax({
                url: "<?php echo base_url(); ?>admissioncontrol/get_physician",
                method: "POST",
                data: {
                    fp_id: fp_id
                },
                success: function(data) {
                    $('#physician').html(data);
                }
            });
        } else {
            $('#physician').html('<option value="">Select Physician</option>');
        }
    });

});
 </script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>