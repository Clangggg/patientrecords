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
                         minlength="12" maxlength="12" name="a_casenumber" placeholder="Enter LRN"
                         value="<?php echo set_value('a_casenumber'); ?>">
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
                         value="<?php echo set_value('a_others'); ?>" placeholder="Type N/A if not applicable">
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

                 <p class="ml-5">Visual Acuity (Snellen's) <br> &nbsp &nbsp &nbsp &nbsp &nbsp a. Normal right &nbsp
                     &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                     c. AbNormal right <br> &nbsp &nbsp &nbsp &nbsp &nbsp b. Normal left
                     &nbsp &nbsp &nbsp &nbsp &nbsp
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp d. AbNormal
                     left</p>

                 <p class="ml-5">Hearing (Tuning fork) <br> &nbsp &nbsp &nbsp &nbsp &nbsp a. Normal right &nbsp &nbsp
                     &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp c.
                     AbNormal right <br> &nbsp &nbsp &nbsp &nbsp &nbsp b. Normal left
                     &nbsp &nbsp &nbsp &nbsp
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp d.
                     AbNormal left</p>

                 <p class="ml-5">Skin/Scalp <br> &nbsp &nbsp &nbsp &nbsp &nbsp a. Normal &nbsp &nbsp &nbsp &nbsp &nbsp
                     &nbsp
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                     g. Hematoma <br> &nbsp &nbsp &nbsp &nbsp &nbsp b. Pediculosis
                     &nbsp &nbsp &nbsp &nbsp
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp h.
                     Bruises <br> &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp c. Tinea Flava &nbsp &nbsp &nbsp
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                     i. Cuts/lacerations <br>
                     &nbsp &nbsp &nbsp &nbsp &nbsp d. Ringworm &nbsp &nbsp &nbsp
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                     j. Allergy <br> &nbsp &nbsp &nbsp &nbsp &nbsp e. Eczema &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp
                     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp k. Others, specify <br>
                     &nbsp &nbsp &nbsp &nbsp &nbsp f. Impetigo/boil</p>

                 <p class="ml-5">Eye/Ear/Nose <br> &nbsp &nbsp &nbsp &nbsp &nbsp a. Normal eye &nbsp &nbsp &nbsp &nbsp
                     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp f. Ear discharge <br> &nbsp &nbsp &nbsp
                     &nbsp &nbsp b. Normal ears
                     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp g. Impacted cerumen
                     <br> &nbsp &nbsp &nbsp &nbsp &nbsp c. Normal nose &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                     &nbsp &nbsp &nbsp &nbsp &nbsp h. Septal deviation <br>
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspd. Squinting &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp i. Nasal discharge <br> &nbsp &nbsp
                     &nbsp &nbsp &nbsp e. Pale conjunctivae &nbsp &nbsp &nbsp &nbsp
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp j. Others, specify
                 </p>

                 <p class="ml-5">Mouth/Neck/Throat <br> &nbsp &nbsp &nbsp &nbsp &nbsp a. Normal mouth &nbsp &nbsp &nbsp
                     &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp f. Inflamed
                     pharynx<br> &nbsp &nbsp &nbsp &nbsp &nbsp b. Normal throat
                     &nbsp &nbsp &nbsp &nbsp &nbsp
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp with/w/o
                     exudates <br> &nbsp &nbsp &nbsp &nbsp &nbsp c. Enlarged tonsils &nbsp &nbsp &nbsp &nbsp
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp g. Enlarged thyroid gland <br> &nbsp
                     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp with/w/o exudates &nbsp &nbsp &nbsp &nbsp &nbsp
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp h. Speech defect<br>
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspd. Lip lesion &nbsp &nbsp &nbsp &nbsp
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                     i. Dental problem <br> &nbsp &nbsp &nbsp &nbsp &nbsp e. Enlarged tonsils &nbsp &nbsp &nbsp &nbsp
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp j. Others, specify <br> &nbsp
                     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspwith/w/o exudates</p>

                 <p class="ml-5">Lungs/Heart <br> &nbsp &nbsp &nbsp &nbsp &nbsp a. Normal lungs &nbsp &nbsp &nbsp &nbsp
                     &nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp f. Deformed chest<br> &nbsp &nbsp
                     &nbsp &nbsp &nbsp b. Normal heart
                     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspg. Distant
                     heart sounds <br> &nbsp &nbsp &nbsp &nbsp &nbsp c. Rales &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsph. Irregular
                     heart rate <br>
                     &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspd. Wheeze &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp
                     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp i. Others, specify
                     <br> &nbsp &nbsp &nbsp &nbsp &nbsp e. Murmur
                 </p>

                 <p class="ml-5">Abdomen/Genitalia <br> &nbsp &nbsp &nbsp &nbsp &nbsp a. Normal abdomen &nbsp &nbsp
                     &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp e. Tenderness<br> &nbsp &nbsp &nbsp &nbsp
                     &nbsp b. Normal genitalia
                     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp f. Genital discharge <br>
                     &nbsp &nbsp &nbsp &nbsp &nbsp c. Mass &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                     &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp g. Hernia <br>
                     &nbsp &nbsp &nbsp &nbsp &nbsp d. Hemorrhoids &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsph. Others, specify </p>

                 <p class="ml-5">Spine/Extremities <br> &nbsp &nbsp &nbsp &nbsp &nbsp a. Normal spine &nbsp &nbsp &nbsp
                     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp f. Kyphosis <br> &nbsp
                     &nbsp &nbsp &nbsp &nbsp b. N upper extremities
                     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp g. Bowlegs/knock knees <br> &nbsp &nbsp &nbsp
                     &nbsp &nbsp c. N lower extremities &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsph.
                     Flat foot <br>
                     &nbsp &nbsp &nbsp &nbsp &nbsp d. Scoliosis &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbspi. Club
                     foot <br>
                     &nbsp &nbsp &nbsp &nbsp &nbsp e. Lordosis &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                     &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbspj. Others, specify</p>
             </div>


         </div><!-- End of Column 2 -->
     </div><!-- End of Row -->


     <!-- Card Header - Dropdown -->
     <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
         <h6 class="m-0 font-weight-bold text-primary">Medical History</h6>
     </div>

     <div class="card-body">
         <div class="row">
             <div class="col-sm-5 ml-5">
                 <div style="margin-bottom:17px;">
                     <div class="row no-gutters">
                         <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Allergy
                         </div>
                     </div>
                     <div class="h5 mb-1 font-weight-bold text-gray-800">
                         <select name="a_allergy" class="form-control">
                             <option value="">Select</option>
                             <?php if(count($get_status)): ?>
                             <?php foreach($get_status as $status): ?>
                             <option
                                 value=<?php echo $status->st_name; ?><?php echo set_select('a_allergy', $status->st_name); ?>>
                                 <?php echo $status->st_name; ?></option>
                             <?php endforeach; ?>
                             <?php endif; ?>
                         </select>
                     </div>
                     <div class="text-danger text-center"><?php echo form_error('a_allergy'); ?></div>
                 </div>

                 <div style="margin-bottom:17px;">
                     <div class="row no-gutters">
                         <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Asthma
                         </div>
                     </div>
                     <div class="h5 mb-1 font-weight-bold text-gray-800">
                         <select name="a_asthma" class="form-control">
                             <option value="">Select</option>
                             <?php if(count($get_status)): ?>
                             <?php foreach($get_status as $status): ?>
                             <option
                                 value=<?php echo $status->st_name; ?><?php echo set_select('a_asthma', $status->st_name); ?>>
                                 <?php echo $status->st_name; ?></option>
                             <?php endforeach; ?>
                             <?php endif; ?>
                         </select>
                     </div>
                     <div class="text-danger text-center"><?php echo form_error('a_asthma'); ?></div>
                 </div>


                 <div style="margin-bottom:17px;">
                     <div class="row no-gutters">
                         <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Anemia
                         </div>
                     </div>
                     <div class="h5 mb-1 font-weight-bold text-gray-800">
                         <select name="a_anemia" class="form-control">
                             <option value="">Select </option>
                             <?php if(count($get_status)): ?>
                             <?php foreach($get_status as $status): ?>
                             <option
                                 value=<?php echo $status->st_name; ?><?php echo set_select('a_anemia', $status->st_name); ?>>
                                 <?php echo $status->st_name; ?></option>
                             <?php endforeach; ?>
                             <?php endif; ?>
                         </select>
                     </div>
                     <div class="text-danger text-center"><?php echo form_error('a_anemia'); ?></div>
                 </div>

                 <div style="margin-bottom:17px;">
                     <div class="row no-gutters">
                         <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Bleeding Problem
                         </div>
                     </div>
                     <div class="h5 mb-1 font-weight-bold text-gray-800">
                         <select name="a_bleeding" class="form-control">
                             <option value=""> Select </option>
                             <?php if(count($get_status)): ?>
                             <?php foreach($get_status as $status): ?>
                             <option
                                 value=<?php echo $status->st_name; ?><?php echo set_select('a_bleeding', $status->st_name); ?>>
                                 <?php echo $status->st_name; ?></option>
                             <?php endforeach; ?>
                             <?php endif; ?>
                         </select>
                     </div>
                     <div class="text-danger text-center"><?php echo form_error('a_bleeding'); ?></div>
                 </div>

                 <div style="margin-bottom:17px;">
                     <div class="row no-gutters">
                         <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Heart Ailment
                         </div>
                     </div>
                     <div class="h5 mb-1 font-weight-bold text-gray-800">
                         <select name="a_hailment" class="form-control">
                             <option value="">Select</option>
                             <?php if(count($get_status)): ?>
                             <?php foreach($get_status as $status): ?>
                             <option
                                 value=<?php echo $status->st_name; ?><?php echo set_select('a_hailment', $status->st_name); ?>>
                                 <?php echo $status->st_name; ?></option>
                             <?php endforeach; ?>
                             <?php endif; ?>
                         </select>
                     </div>
                     <div class="text-danger text-center"><?php echo form_error('a_hailment'); ?></div>
                 </div>
             </div>



             <div class="col-sm-5">
                 <div style="margin-bottom:17px;">
                     <div class="row no-gutters">
                         <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Diabetes</div>
                     </div>
                     <div class="h5 mb-1 font-weight-bold text-gray-800">
                         <select name="a_diabetes" class="form-control">
                             <option value="">Select</option>
                             <?php if(count($get_status)): ?>
                             <?php foreach($get_status as $status): ?>
                             <option
                                 value=<?php echo $status->st_name; ?><?php echo set_select('a_diabetes', $status->st_name); ?>>
                                 <?php echo $status->st_name; ?></option>
                             <?php endforeach; ?>
                             <?php endif; ?>
                         </select>
                     </div>
                     <div class="text-danger text-center"><?php echo form_error('a_diabetes'); ?></div>
                 </div>

                 <div style="margin-bottom:17px;">
                     <div class="row no-gutters">
                         <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Epilepsy</div>
                     </div>
                     <div class="h5 mb-1 font-weight-bold text-gray-800">
                         <select name="a_epilepsy" class="form-control">
                             <option value="">Select</option>
                             <?php if(count($get_status)): ?>
                             <?php foreach($get_status as $status): ?>
                             <option
                                 value=<?php echo $status->st_name; ?><?php echo set_select('a_epilepsy', $status->st_name); ?>>
                                 <?php echo $status->st_name; ?></option>
                             <?php endforeach; ?>
                             <?php endif; ?>
                         </select>
                     </div>
                     <div class="text-danger text-center"><?php echo form_error('a_epilepsy'); ?></div>
                 </div>

                 <div style="margin-bottom:17px;">
                     <div class="row no-gutters">
                         <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Kidney Disease
                         </div>
                     </div>
                     <div class="h5 mb-1 font-weight-bold text-gray-800">
                         <select name="a_kidney" class="form-control">
                             <option value="">Select</option>
                             <?php if(count($get_status)): ?>
                             <?php foreach($get_status as $status): ?>
                             <option
                                 value=<?php echo $status->st_name; ?><?php echo set_select('a_kidney', $status->st_name); ?>>
                                 <?php echo $status->st_name; ?></option>
                             <?php endforeach; ?>
                             <?php endif; ?>
                         </select>
                     </div>
                     <div class="text-danger text-center"><?php echo form_error('a_kidney'); ?></div>
                 </div>

                 <div style="margin-bottom:17px;">
                     <div class="row no-gutters">
                         <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Convulsion</div>
                     </div>
                     <div class="h5 mb-1 font-weight-bold text-gray-800">
                         <select name="a_convulsion" class="form-control">
                             <option value="">Select</option>
                             <?php if(count($get_status)): ?>
                             <?php foreach($get_status as $status): ?>
                             <option
                                 value=<?php echo $status->st_name; ?><?php echo set_select('a_convulsion', $status->st_name); ?>>
                                 <?php echo $status->st_name; ?></option>
                             <?php endforeach; ?>
                             <?php endif; ?>
                         </select>
                     </div>
                     <div class="text-danger text-center"><?php echo form_error('a_convulsion'); ?></div>
                 </div>

                 <div style="margin-bottom:17px;">
                     <div class="row no-gutters">
                         <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Fainting</div>
                     </div>
                     <div class="h5 mb-1 font-weight-bold text-gray-800">
                         <select name="a_fainting" class="form-control">
                             <option value="">Select</option>
                             <?php if(count($get_status)): ?>
                             <?php foreach($get_status as $status): ?>
                             <option
                                 value=<?php echo $status->st_name; ?><?php echo set_select('a_fainting', $status->st_name); ?>>
                                 <?php echo $status->st_name; ?></option>
                             <?php endforeach; ?>
                             <?php endif; ?>
                         </select>
                     </div>
                     <div class="text-danger text-center"><?php echo form_error('a_fainting'); ?></div>
                 </div>

             </div>
         </div>
     </div>

     <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
         <h6 class="m-0 font-weight-bold text-primary">Oral Health Examination</h6>
     </div>

     <div class="row">
         <div class="col-sm-6">
             <div class="text-s font-weight-bold text-secondary  mt-3 text-uppercase mb-2">
                 Examined by
             </div>
             <div class="h5 font-weight-bold text-gray-800" style="width:70%;">
                 <select name="a_oralphys" class="form-control">
                     <option value="">Select Physician</option>
                     <?php if(count($add_physician)): ?>
                     <?php foreach($add_physician as $physicians): ?>
                     <option
                         value=<?php echo $physicians->ph_name. ' / '.$physicians->ph_fieldofphysician; ?><?php echo set_select('a_oralphys', $physicians->ph_name.' / '.$physicians->ph_fieldofphysician); ?>>
                         <?php echo "Dr.".$physicians->ph_name.' / '.$physicians->ph_fieldofphysician; ?></option>
                     <?php endforeach; ?>
                     <?php endif; ?>
                 </select>
             </div>
         </div>
         <div class="text-danger text-center"><?php echo form_error('a_oralphys'); ?></div>


         <div class="col-sm-5 ml-2">
             <div class="text-s font-weight-bold text-secondary mt-3 text-uppercase mb-2">Date</div>

             <div class="h5 font-weight-bold text-gray-800" style="width:60%;"><input class="form-control" type="date"
                     name="a_oraldate" value="<?php echo set_value('a_oraldate'); ?>">
             </div>
             <div class="text-danger text-center"><?php echo form_error('a_oraldate'); ?></div>
         </div>
     </div>

     <h6 class="mt-5 ml-4 mb-3 font-weight-bold">CONDITION AND TREATMENT NEEDS</h6>
     <p style="font-size:13px; color:black; font-weight:700; margin-left:8%; margin-bottom:none;">
         (Check the references below) </p>

     <div class="frame-12-NT9"
         style="align-items: center; display: flex;  height: 3.9rem; font-size: 1rem; width: 100%; ">
         <p style="font-size:13px; color:blue; font-weight:700; margin-left:17.6%; margin-bottom:none;">
             CONDITION </p>

         <div class="frame-1-hVR" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem;  font-weight: 600; height: 62%; justify-content: center;  width: 2.7rem; 
                         margin-left:3%" id="2:47"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionfa"
                 value="<?php echo set_value('a_conditionfa'); ?>">
         </div>

         <div class="frame-2-DCs" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 62%; justify-content: center;
                         width: 2.6rem;" id="2:49"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionfb"
                 value="<?php echo set_value('a_conditionfb'); ?>">
         </div>

         <div class="frame-3-urP" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex;  font-size: 0.8rem; font-weight: 600; height: 62%; justify-content: center;
                         width: 2.7rem;" id="2:51"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionfc"
                 value="<?php echo set_value('a_conditionfc'); ?>">
         </div>
         <div class="frame-4-1Pd" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 62%; justify-content: center;
                         width: 2.6rem;" id="2:53"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionfd"
                 value="<?php echo set_value('a_conditionfd'); ?>">
         </div>

         <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 62%; justify-content: center;
                         width: 2.6rem;" id="2:55"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionfe"
                 value="<?php echo set_value('a_conditionfe'); ?>">
         </div>

         <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 62%;justify-content: center;
                          width: 2.6rem;" id="2:57"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionff"
                 value="<?php echo set_value('a_conditionff'); ?>">
         </div>

         <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 62%; justify-content: center;
                         width: 2.6rem;" id="2:59"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionfg"
                 value="<?php echo set_value('a_conditionfg'); ?>">
         </div>

         <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 62%; justify-content: center;
                         width: 2.7rem;" id="2:61"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionfh"
                 value="<?php echo set_value('a_conditionfh'); ?>">
         </div>

         <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 62%; justify-content: center;
                        width: 2.6rem;" id="2:63"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionfi"
                 value="<?php echo set_value('a_conditionfi'); ?>">
         </div>

         <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 62%; justify-content: center;
                         width: 2.7rem;" id="2:65"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionfj"
                 value="<?php echo set_value('a_conditionfj'); ?>">
         </div>
     </div>

     <img width="62.5%" height="50%" style="margin-left:15.3%; margin-top:none;"
         src="<?php echo base_url(); ?>img/one.png">

     <div class="frame-12-NT9"
         style="align-items: center; display: flex;  height: 3.9rem; font-size: 1rem; width: 100%; ">
         <p style="font-size:13px; color:blue; font-weight:700; margin-left:5.3%; margin-bottom:none;">
         TREATMENT<br>NEEDS </p>
         <div class="frame-1-hVR" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem;  font-weight: 600; height: 60%; justify-content: center;  width: 2.8rem; 
                         margin-left:2%" id="2:47"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionsa"
                 value="<?php echo set_value('a_conditionsa'); ?>">
         </div>

         <div class="frame-2-DCs" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.7rem;" id="2:49"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionsb"
                 value="<?php echo set_value('a_conditionsb'); ?>">
         </div>

         <div class="frame-3-urP" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex;  font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.7rem;" id="2:51"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionsc"
                 value="<?php echo set_value('a_conditionsc'); ?>">
         </div>

         <div class="frame-4-1Pd" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:53"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionsd"
                 value="<?php echo set_value('a_conditionsd'); ?>">
         </div>

         <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:55"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionse"
                 value="<?php echo set_value('a_conditionse'); ?>">
         </div>

         <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%;justify-content: center;
                          width: 2.6rem;" id="2:57"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionsf"
                 value="<?php echo set_value('a_conditionsf'); ?>">
         </div>

         <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.7rem;" id="2:59"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionsg"
                 value="<?php echo set_value('a_conditionsg'); ?>">
         </div>

         <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:61"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionsh"
                 value="<?php echo set_value('a_conditionsh'); ?>">
         </div>

         <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                        width: 2.6rem;" id="2:63"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionsi"
                 value="<?php echo set_value('a_conditionsi'); ?>">
         </div>
         <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:65"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionsj"
                 value="<?php echo set_value('a_conditionsj'); ?>">
         </div>

         <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:55"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionsk"
                 value="<?php echo set_value('a_conditionsk'); ?>">
         </div>

         <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%;justify-content: center;
                          width: 2.7rem;" id="2:57"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionsl"
                 value="<?php echo set_value('a_conditionsl'); ?>">
         </div>

         <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:59"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionsm"
                 value="<?php echo set_value('a_conditionsm'); ?>">
         </div>

         <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.8rem;" id="2:61"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionsn"
                 value="<?php echo set_value('a_conditionsn'); ?>">
         </div>

         <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                        width: 2.6rem;" id="2:63"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionso"
                 value="<?php echo set_value('a_conditionso'); ?>">
         </div>
         <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.7rem;" id="2:65"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionsp"
                 value="<?php echo set_value('a_conditionsp'); ?>">
         </div>
     </div>

     <div class="frame-12-NT9"
         style="align-items: center; display: flex;  height: 3.9rem; font-size: 1rem; width: 100%; ">
         <p style="font-size:13px; color:blue; font-weight:700; margin-left:6.2%; margin-bottom:none;">
             CONDITION</p>
         <div class="frame-1-hVR" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem;  font-weight: 600; height: 60%; justify-content: center;  width: 2.8rem; 
                         margin-left:1.6%" id="2:47"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatfa"
                 value="<?php echo set_value('a_treatfa'); ?>">
         </div>

         <div class="frame-2-DCs" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:49"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatfb"
                 value="<?php echo set_value('a_treatfb'); ?>">
         </div>

         <div class="frame-3-urP" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex;  font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.7rem;" id="2:51"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatfc"
                 value="<?php echo set_value('a_treatfc'); ?>">
         </div>

         <div class="frame-4-1Pd" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:53"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatfd"
                 value="<?php echo set_value('a_treatfd'); ?>">
         </div>

         <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:55"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatfe"
                 value="<?php echo set_value('a_treatfe'); ?>">
         </div>

         <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%;justify-content: center;
                          width: 2.7rem;" id="2:57"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatff"
                 value="<?php echo set_value('a_treatff'); ?>">
         </div>

         <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:59"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatfg"
                 value="<?php echo set_value('a_treatfg'); ?>">
         </div>

         <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.7rem;" id="2:61"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatfh"
                 value="<?php echo set_value('a_treatfh'); ?>">
         </div>

         <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                        width: 2.6rem;" id="2:63"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatfi"
                 value="<?php echo set_value('a_treatfi'); ?>">
         </div>

         <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:65"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatfj"
                 value="<?php echo set_value('a_treatfj'); ?>">
         </div>

         <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.7rem;" id="2:55"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatfk"
                 value="<?php echo set_value('a_treatfk'); ?>">
         </div>

         <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%;justify-content: center;
                          width: 2.6rem;" id="2:57"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatfl"
                 value="<?php echo set_value('a_treatfl'); ?>">
         </div>

         <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.7rem;" id="2:59"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatfm"
                 value="<?php echo set_value('a_treatfm'); ?>">
         </div>

         <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.7rem;" id="2:61"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatfn"
                 value="<?php echo set_value('a_treatfn'); ?>">
         </div>

         <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                        width: 2.6rem;" id="2:63"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatfo"
                 value="<?php echo set_value('a_treatfo'); ?>">
         </div>

         <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.7rem;" id="2:65"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatfp"
                 value="<?php echo set_value('a_treatfp'); ?>">
         </div>
     </div>


     <img width="72.5%" height="70%" style="margin-left:12.1%; margin-top:none;"
         src="<?php echo base_url(); ?>img/two.png">

     <div class="frame-12-NT9"
         style="align-items: center; display: flex;  height: 3.9rem; font-size: 1rem; width: 100%; ">
         <p style="font-size:13px; color:blue; font-weight:700; margin-left:5.8%; margin-bottom:none;">
             CONDITION </p>
         <div class="frame-1-hVR" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem;  font-weight: 600; height: 60%; justify-content: center;  width: 2.8rem; 
                         margin-left:2%" id="2:47"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionta"
                 value="<?php echo set_value('a_conditionta'); ?>">
         </div>

         <div class="frame-2-DCs" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:49"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditiontb"
                 value="<?php echo set_value('a_conditiontb'); ?>">
         </div>

         <div class="frame-3-urP" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex;  font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:51"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditiontc"
                 value="<?php echo set_value('a_conditiontc'); ?>">
         </div>

         <div class="frame-4-1Pd" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.7rem;" id="2:53"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditiontd"
                 value="<?php echo set_value('a_conditiontd'); ?>">
         </div>
         <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:55"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionte"
                 value="<?php echo set_value('a_conditionte'); ?>">
         </div>

         <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%;justify-content: center;
                          width: 2.6rem;" id="2:57"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditiontf"
                 value="<?php echo set_value('a_conditiontf'); ?>">
         </div>

         <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.7rem;" id="2:59"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditiontg"
                 value="<?php echo set_value('a_conditiontg'); ?>">
         </div>

         <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.7rem;" id="2:61"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionth"
                 value="<?php echo set_value('a_conditionth'); ?>">
         </div>

         <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                        width: 2.6rem;" id="2:63"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionti"
                 value="<?php echo set_value('a_conditionti'); ?>">
         </div>

         <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.7rem;" id="2:65"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditiontj"
                 value="<?php echo set_value('a_conditiontj'); ?>">
         </div>

         <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:55"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditiontk"
                 value="<?php echo set_value('a_conditiontk'); ?>">
         </div>

         <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%;justify-content: center;
                          width: 2.7rem;" id="2:57"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditiontl"
                 value="<?php echo set_value('a_conditiontl'); ?>">
         </div>

         <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.7rem;" id="2:59"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditiontm"
                 value="<?php echo set_value('a_conditiontm'); ?>">
         </div>

         <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:61"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditiontn"
                 value="<?php echo set_value('a_conditiontn'); ?>">
         </div>

         <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                        width: 2.6rem;" id="2:63"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionto"
                 value="<?php echo set_value('a_conditionto'); ?>">
         </div>

         <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.7rem;" id="2:65"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditiontp"
                 value="<?php echo set_value('a_conditiontp'); ?>">
         </div>
     </div>

     <div class="frame-12-NT9"
         style="align-items: center; display: flex;  height: 3.9rem; font-size: 1rem; width: 100%; ">
         <p style="font-size:13px; color:blue; font-weight:700; margin-left:5.8%; margin-bottom:none;">
             TREATMENT<br>NEEDS</p>
         <div class="frame-1-hVR" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem;  font-weight: 600; height: 60%; justify-content: center;  width: 2.7rem; 
                         margin-left:1.6%" id="2:47"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatsa"
                 value="<?php echo set_value('a_treatsa'); ?>">
         </div>

         <div class="frame-2-DCs" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:49"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatsb"
                 value="<?php echo set_value('a_treatsb'); ?>">
         </div>

         <div class="frame-3-urP" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex;  font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:51"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatsc"
                 value="<?php echo set_value('a_treatsc'); ?>">
         </div>

         <div class="frame-4-1Pd" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.7rem;" id="2:53"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatsd"
                 value="<?php echo set_value('a_treatsd'); ?>">
         </div>

         <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.7rem;" id="2:55"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatse"
                 value="<?php echo set_value('a_treatse'); ?>">
         </div>

         <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%;justify-content: center;
                          width: 2.6rem;" id="2:57"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatsf"
                 value="<?php echo set_value('a_treatsf'); ?>">
         </div>

         <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:59"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatsg"
                 value="<?php echo set_value('a_treatsg'); ?>">
         </div>

         <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.7rem;" id="2:61"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatsh"
                 value="<?php echo set_value('a_treatsh'); ?>">
         </div>

         <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                        width: 2.7rem;" id="2:63"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatsi"
                 value="<?php echo set_value('a_treatsi'); ?>">
         </div>

         <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:65"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatsj"
                 value="<?php echo set_value('a_treatsj'); ?>">
         </div>

         <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:55"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatsk"
                 value="<?php echo set_value('a_treatsk'); ?>">
         </div>

         <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%;justify-content: center;
                          width: 2.7rem;" id="2:57"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatsl"
                 value="<?php echo set_value('a_treatsl'); ?>">
         </div>

         <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.8rem;" id="2:59"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatsm"
                 value="<?php echo set_value('a_treatsm'); ?>">
         </div>

         <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:61"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatsn"
                 value="<?php echo set_value('a_treatsn'); ?>">
         </div>

         <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                        width: 2.6rem;" id="2:63"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatso"
                 value="<?php echo set_value('a_treatso'); ?>">
         </div>

         <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:65"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_treatsp"
                 value="<?php echo set_value('a_treatsp'); ?>">
         </div>
     </div>


     <img width="66%" height="50%" style="margin-left:16.7%; margin-top:none;"
         src="<?php echo base_url(); ?>img/three.png">


     <div class="frame-12-NT9"
         style="align-items: center; display: flex;  height: 3.9rem; font-size: 1rem; width: 100%; ">
         <p style="font-size:13px; color:blue; font-weight:700; margin-left:17.9%; margin-bottom:none;">
             CONDITION </p>
         <div class="frame-1-hVR" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem;  font-weight: 600; height: 60%; justify-content: center;  width: 2.6rem; 
                         margin-left:3%" id="2:47"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionla"
                 value="<?php echo set_value('a_conditionla'); ?>">
         </div>

         <div class="frame-2-DCs" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:49"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionlb"
                 value="<?php echo set_value('a_conditionlb'); ?>">
         </div>

         <div class="frame-3-urP" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex;  font-size: 0.8rem; font-weight: 600; height:60%; justify-content: center;
                         width: 2.7rem;" id="2:51"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionlc"
                 value="<?php echo set_value('a_conditionlc'); ?>">
         </div>

         <div class="frame-4-1Pd" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:53"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionld"
                 value="<?php echo set_value('a_conditionld'); ?>">
         </div>

         <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.7rem;" id="2:55"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionle"
                 value="<?php echo set_value('a_conditionle'); ?>">
         </div>

         <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%;justify-content: center;
                          width: 2.6rem;" id="2:57"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionlf"
                 value="<?php echo set_value('a_conditionlf'); ?>">
         </div>

         <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.7rem;" id="2:59"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionlg"
                 value="<?php echo set_value('a_conditionlg'); ?>">
         </div>

         <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:61"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionlh"
                 value="<?php echo set_value('a_conditionlh'); ?>">
         </div>

         <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                        width: 2.7rem;" id="2:63"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionli"
                 value="<?php echo set_value('a_conditionli'); ?>">
         </div>

         <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.7rem;" id="2:65"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="a_conditionlj"
                 value="<?php echo set_value('a_conditionlj'); ?>">
         </div>
     </div>


     <div class="card-body">
         <div class="table">
             <p style="font-size:13px; color:black; font-weight:700; margin-top:10%;">
                 (Check the references below) </p>

             <table class="table table-bordered" cellspacing="0">

                 <thead>
                     <tr>
                         <th class="text-center">&nbsp&nbsp</th>
                         <th class="text-center">Dental Procedures</th>
                         <th class="text-center">Remarks</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td class="text-center">Examination</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="a_mouthexam" value="<?php echo set_value('a_mouthexam'); ?>">
                         </td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0;" type="text"
                                 name="a_rmouthexam" value="<?php echo set_value('a_rmouthexam'); ?>"></td>
                     </tr>
                     <tr>
                         <td class="text-center">Sealant (G.I.)</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="a_seal" value="<?php echo set_value('a_seal'); ?>"></td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0;" type="text"
                                 name="a_rseal" value="<?php echo set_value('a_rseal'); ?>">
                         </td>
                     <tr>
                         <td class="text-center">Gum Treatment</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="a_gum" value="<?php echo set_value('a_gum'); ?>"></td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0;" type="text"
                                 name="a_rgum" value="<?php echo set_value('a_rgum'); ?>"></td>
                     </tr>
                     <tr>
                         <td class="text-center">Permanent filling</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="a_perm" value="<?php echo set_value('a_perm'); ?>"></td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0;" type="text"
                                 name="a_rperm" value="<?php echo set_value('a_rperm'); ?>">
                         </td>
                     </tr>
                     <tr>
                         <td class="text-center">ART</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="a_art" value="<?php echo set_value('a_art'); ?>"></td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0;" type="text"
                                 name="a_rart" value="<?php echo set_value('a_rart'); ?>"></td>
                     </tr>
                     <tr>
                         <td class="text-center">Extraction</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="a_extra" value="<?php echo set_value('a_extra'); ?>">
                         </td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0;" type="text"
                                 name="a_rextra" value="<?php echo set_value('a_rextra'); ?>">
                         </td>
                     </tr>
                     <tr>
                         <td class="text-center">Oral prohylaxis</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="a_prohy" value="<?php echo set_value('a_prohy'); ?>">
                         </td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0;" type="text"
                                 name="a_rprohy" value="<?php echo set_value('a_rprohy'); ?>">
                         </td>
                     </tr>
                     <tr>
                         <td class="text-center">Referral</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="a_refer" value="<?php echo set_value('a_refer'); ?>">
                         </td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0;" type="text"
                                 name="a_rrefer" value="<?php echo set_value('a_rrefer'); ?>">
                         </td>
                     </tr>
                     <tr>
                         <td class="text-center">Other oral treatment</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="a_otheroral" value="<?php echo set_value('a_otheroral'); ?>">
                         </td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0;" type="text"
                                 name="a_rotheroral" value="<?php echo set_value('a_rotheroral'); ?>"></td>
                     </tr>
                 </tbody>
             </table>
         </div>
     </div>

     <div class="card-body">
         <div class="table">
             <p style="font-size:13px; color:black; font-weight:700; margin-bottom:none;">
                 (Check the references below) </p>
             <table class="table table-bordered" cellspacing="0">

                 <thead>
                     <tr>
                         <th class="text-center">&nbsp&nbsp</th>
                         <th class="text-center">Oral Health Condition</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td class="text-center">Gingivitis</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="a_ging" value="<?php echo set_value('a_ging'); ?>"></td>
                     </tr>
                     <tr>
                         <td class="text-center">Periodontal Disease</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="a_period" value="<?php echo set_value('a_period'); ?>">
                         </td>
                     </tr>
                     <tr>
                         <td class="text-center">Malocclussion</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="a_malo" value="<?php echo set_value('a_malo'); ?>"></td>
                     </tr>
                     <tr>
                         <td class="text-center">Supernumerary teeth</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="a_super" value="<?php echo set_value('a_super'); ?>">
                         </td>
                     </tr>
                     <tr>
                         <td class="text-center">Decubital ulcer</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="a_ulcer" value="<?php echo set_value('a_ulcer'); ?>">
                         </td>
                     </tr>
                     <tr>
                         <td class="text-center">Calculus</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="a_calcu" value="<?php echo set_value('a_calcu'); ?>">
                         </td>
                     <tr>
                         <td class="text-center">Cleft lip/palate</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="a_cleft" value="<?php echo set_value('a_cleft'); ?>">
                         </td>
                     </tr>
                     <tr>
                         <td class="text-center">Root fragment</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="a_root" value="<?php echo set_value('a_root'); ?>"></td>
                     </tr>
                     <tr>
                         <td class="text-center">Fluorosis</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="a_flu" value="<?php echo set_value('a_flu'); ?>"></td>
                     </tr>
                     <tr>
                         <td class="text-center">Others, specify</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="a_specify" value="<?php echo set_value('a_specify'); ?>">
                         </td>
                     </tr>
                 </tbody>
             </table>
         </div>

     </div>


     <h6 class="mt-2 ml-5 font-weight-bold">PERMANENT TEETH</h6>
     <div class="card-body">
         <div class="table">

             <table class="table table-bordered" cellspacing="0">

                 <thead>
                     <tr>
                         <th class="text-center">Index: D.M.F.T.</th>
                         <th class="text-center">DMFT Index</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td class="text-center">No. T/Decayed</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="number"
                                 name="a_decay" value="<?php echo set_value('a_decay'); ?>">
                         </td>
                     </tr>
                     <tr>
                         <td class="text-center">No. T/Missing</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="number"
                                 name="a_missing" value="<?php echo set_value('a_missing'); ?>">
                         </td>
                     </tr>
                     <tr>
                         <td class="text-center">No. T/Filled</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="number"
                                 name="a_filled" value="<?php echo set_value('a_filled'); ?>">
                         </td>
                     </tr>
                     <tr>
                         <td class="text-center">Total D.M.F.T</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="number"
                                 name="a_total" value="<?php echo set_value('a_total'); ?>">
                         </td>
                     </tr>
                     <tr>
                         <td class="text-center">Total Sound teeth</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="number"
                                 name="a_sound" value="<?php echo set_value('a_sound'); ?>">
                         </td>
                     </tr>
                 </tbody>
             </table>
         </div>

     </div>
     <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
         <h6 class="ml-3 mb-0 font-weight-bold text-primary">REFERENCES</h6>
     </div>

     <div class="row">
         <div class="col-sm-8">
             <h6 class="mt-5 font-weight-bold" style="margin-left:25%; margin-bottom:3%;">Symbols for Mouth
                 Examination</h6>

             <div class="row">
                 <div class="col-sm-4 ml-5">
                     <p style="font-size:13px; color:black; font-weight:700; ">
                         X - Tooth indicated for extraction <br> RF - Root fragment <br> M - Missing tooth
                         <br>
                         DU - Decubital ulcer
                         <br> RD - Recurrence of decay <br> Mal - Malocclusion <br> Flu - Fluorosis <br> F -
                         Tooth indicated for filling
                     </p>
                 </div>
                 <div class="col-sm-5 ml-5">
                     <p style="font-size:13px; color:black; font-weight:700; ">
                         OoF - Tooth with temporary filling <br> HS - Permanent filling <br> (&#x2713;) -
                         Sound/erupted permanent tooth
                         <br> Gn - Normal <br> Gm - moderate gingivitis (1-2 quadrant) <br> Gs - severe
                         gingivitis (3-4 quadrant) <br>
                         CMR - complete mouth rehab
                     </p>
                 </div>
             </div>
         </div>

         <div class="col-sm-3">
             <h6 class="mt-5 mb-3 font-weight-bold">Artificial Restoration</h6>

             <p style="font-size:13px; color:black; font-weight:700; ">
                 JC - Jacket crown <br> I - Inlay
             </p>

             <h6 class="mt-4 font-weight-bold">Symbols for Accomplishment </h6>
             <p style="font-size:13px; color:black; font-weight:700; ">
                 Xt - Extracted permanent tooth <br> xt - Extracted temporary tooth <br> Ag F - Amalgam
                 filling <br> Sy F - Synthetic filling <br> OP - Oral Prophylaxis <br> ZOE - Zinc Oxide
                 Eugenol
                 filling <br>
                 TF - Temporary filling <br> R - Referred
             </p>
         </div>
     </div>


     <?php echo "<button style='margin-left: 35%; width:30%; margin-top:30px;margin-bottom: 40px; text-decoration:none' type='submit' class='btn btn-primary bg-blue' name='submit' href='". base_url() ."multiplerecordcontrol/add_multiple_findings'>" ?>
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