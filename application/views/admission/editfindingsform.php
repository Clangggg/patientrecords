 <?php $attributes = array('id' => 'edit_findings_form', 'class' => 'form-horizontal user'); ?>
 <?php echo form_open('admissioncontrol/edit_findings/'.$this->uri->segment(3).'#findings', $attributes); ?>
 <div class="container-fluid">
     <div class="row">
         <div class="col-sm-5">
             <div class="col-sm-18">
                 <div style="margin-bottom:17px;">
                     <div class="row no-gutters">
                         <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Details of Examination
                         </div>
                     </div>
                     <div class="h5 mb-1 font-weight-bold text-gray-800">
                         <select class="form-control" name="e_historyillness">
                             <option
                                 value=<?php echo $get_findings_view->f_historypresentillness;?><?php echo set_select('e_historyillness', $get_findings_view->f_historypresentillness);?>>
                                 <?php echo $get_findings_view->f_historypresentillness; ?></option>
                             <?php if(count($get_details)): ?>
                             <?php foreach($get_details as $details): ?>
                             <option
                                 value=<?php echo $details->de_name; ?><?php echo set_select('e_historyillness', $details->de_name); ?>>
                                 <?php echo $details->de_name; ?></option>
                             <?php endforeach; ?>
                             <?php endif; ?>
                         </select>
                     </div>
                     <div class="text-danger text-center"><?php echo form_error('e_historyillness'); ?></div>
                 </div>

                 <div style="margin-bottom:17px; margin-top:10px;">
                     <div class="row no-gutters">
                         <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Vital Signs</div>
                     </div>
                     <div style="margin-top:10px;" class="row">
                         <!--Begin First Column -->
                         <div class="col-sm-4">
                             <?php echo form_label('Blood Pressure'); ?>
                             <input class="form-control" type="text" name="e_bp"
                                 value="<?php echo $get_findings_view->f_bp; ?>" placeholder="BP">
                         </div>
                         <div class="col-sm-4">
                             <?php echo form_label('Heart Rate'); ?>
                             <input class="form-control" type="text" name="e_rr"
                                 value="<?php echo $get_findings_view->f_rr; ?>" placeholder="RR">
                         </div>
                         <div class="col-sm-4">
                             <?php echo form_label('Pulse Rate'); ?>
                             <input class="form-control" type="text" name="e_pulse"
                                 value="<?php echo $get_findings_view->f_pulse;?>" placeholder=" PR">
                         </div>
                     </div>
                     <!--End First Column -->
                     <div style="margin-top:10px;" class="row">
                         <!--Begin Second Column -->
                         <div class="col-sm-4">
                             <?php echo form_label('Temperature'); ?>
                             <input class="form-control" type="text" name="e_temp"
                                 value="<?php echo $get_findings_view->f_temp; ?>" placeholder="in C">
                         </div>
                         <div class="col-sm-4">
                             <?php echo form_label('Weight'); ?>
                             <input class="form-control" type="text" name="e_wt"
                                 value="<?php echo $get_findings_view->f_wt; ?>" placeholder="in kg">
                         </div>
                         <div class="col-sm-4">
                             <?php echo form_label('Height'); ?>
                             <input class="form-control" type="text" name="e_pr"
                                 value="<?php echo $get_findings_view->f_pr; ?>" placeholder="in cm">
                         </div>

                         <div class="col-sm-10 mt-4">
                             <div class="row no-gutters">
                                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Nutritional
                                     Status
                                 </div>
                             </div>
                             <div class="h5 mb-1 font-weight-bold text-gray-800">
                                 <select class="form-control" name="e_cr">
                                     <option
                                         value=<?php echo $get_findings_view->f_cr;?><?php echo set_select('e_cr', $get_findings_view->f_cr);?>>
                                         <?php echo $get_findings_view->f_cr; ?></option>
                                     <?php if(count($get_cr)): ?>
                                     <?php foreach($get_cr as $cr): ?>
                                     <option
                                         value=<?php echo $cr->cr_name; ?><?php echo set_select('e_cr', $cr->cr_name); ?>>
                                         <?php echo $cr->cr_name; ?></option>
                                     <?php endforeach; ?>
                                     <?php endif; ?>
                                 </select>
                                 <div class="text-danger text-center"><?php echo form_error('e_cr'); ?></div>
                             </div>

                         </div>
                     </div>
                     <!--End Second Column -->
                 </div>

             </div><!-- End of Column 1 -->

             <div class="col-sm-10">
                 <div style="margin-bottom:17px;">
                     <div class="row no-gutters">
                         <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Visual Acuity
                             (Snellen's)
                         </div>
                     </div>
                     <div class="h5 mb-1 font-weight-bold text-gray-800"><input
                             class="form-control  <?= (form_error('e_physicalexam') == "" ? '':'is-invalid') ?>"
                             type="text" name="e_physicalexam"
                             value="<?php echo $get_findings_view->f_physicalexam; ?>">

                     </div>
                     <div class="text-danger text-center"><?php echo form_error('e_physicalexam'); ?></div>
                 </div>

                 <div style="margin-bottom:17px;">
                     <div class="row no-gutters">
                         <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Hearing (Tuning fork)
                         </div>
                     </div>
                     <div class="h5 mb-1 font-weight-bold text-gray-800"><input
                             class="form-control  <?= (form_error('e_diagnosis') == "" ? '':'is-invalid') ?>"
                             type="text" name="e_diagnosis" value="<?php echo $get_findings_view->f_diagnosis; ?>">

                     </div>
                     <div class="text-danger text-center"><?php echo form_error('e_diagnosis'); ?></div>
                 </div>

                 <div style="margin-bottom:17px;">
                     <div class="row no-gutters">
                         <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Skin/Scalp</div>
                     </div>
                     <div class="h5 mb-1 font-weight-bold text-gray-800"><input
                             class="form-control  <?= (form_error('e_medical_treatment') == "" ? '':'is-invalid') ?>"
                             type="text" name="e_medical_treatment"
                             value="<?php echo $get_findings_view->f_medication; ?>">

                     </div>
                     <div class="text-danger text-center"><?php echo form_error('e_medical_treatment'); ?></div>
                 </div>

                 <div style="margin-bottom:17px;">
                     <div class="row no-gutters">
                         <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Eyes/Ears/Nose</div>
                     </div>
                     <div class="h5 mb-1 font-weight-bold text-gray-800"><input
                             class="form-control  <?= (form_error('e_chief_complaint') == "" ? '':'is-invalid') ?>"
                             type="text" name="e_chief_complaint"
                             value="<?php echo $get_findings_view->f_chiefcomplaint; ?>">

                     </div>
                     <div class="text-danger text-center"><?php echo form_error('e_chief_complaint'); ?></div>
                 </div>

                 <div style="margin-bottom:17px;">
                     <div class="row no-gutters">
                         <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Mouth/Neck/Throat
                         </div>
                     </div>
                     <div class="h5 mb-1 font-weight-bold text-gray-800"><input
                             class="form-control  <?= (form_error('e_mouth') == "" ? '':'is-invalid') ?>" type="text"
                             name="e_mouth" value="<?php echo $get_findings_view->f_mouth; ?>">

                     </div>
                     <div class="text-danger text-center"><?php echo form_error('e_mouth'); ?></div>
                 </div>

                 <div style="margin-bottom:17px;">
                     <div class="row no-gutters">
                         <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Lungs/Heart</div>
                     </div>
                     <div class="h5 mb-1 font-weight-bold text-gray-800"><input
                             class="form-control  <?= (form_error('e_lungs') == "" ? '':'is-invalid') ?>" type="text"
                             name="e_lungs" value="<?php echo $get_findings_view->f_lungs; ?>">

                     </div>
                     <div class="text-danger text-center"><?php echo form_error('e_lungs'); ?></div>
                 </div>

                 <div style="margin-bottom:17px;">
                     <div class="row no-gutters">
                         <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Abdomen/Genitalia
                         </div>
                     </div>
                     <div class="h5 mb-1 font-weight-bold text-gray-800"><input
                             class="form-control  <?= (form_error('e_abdo') == "" ? '':'is-invalid') ?>" type="text"
                             name="e_abdo" value="<?php echo $get_findings_view->f_abdo; ?>">

                     </div>
                     <div class="text-danger text-center"><?php echo form_error('e_abdo'); ?></div>
                 </div>

                 <div style="margin-bottom:17px;">
                     <div class="row no-gutters">
                         <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Spine/Extremities
                         </div>
                     </div>
                     <div class="h5 mb-1 font-weight-bold text-gray-800"><input
                             class="form-control  <?= (form_error('e_spine') == "" ? '':'is-invalid') ?>" type="text"
                             name="e_spine" value="<?php echo $get_findings_view->f_spine; ?>">

                     </div>
                     <div class="text-danger text-center"><?php echo form_error('e_spine'); ?></div>
                 </div>

                 <div style="margin-bottom:17px;">
                     <div class="row no-gutters">
                         <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Remarks/Intervention
                         </div>
                     </div>
                     <div class="h5 mb-1 font-weight-bold text-gray-800">
                         <select class="form-control" name="e_remarks">
                             <option
                                 value=<?php echo $get_findings_view->f_remarks; ?><?php echo set_select('e_remarks', $get_findings_view->f_remarks); ?>>
                                 <?php echo $get_findings_view->f_remarks; ?></option>
                             <?php if(count($get_remarks)): ?>
                             <?php foreach($get_remarks as $remarks): ?>
                             <option
                                 value=<?php echo $remarks->r_name; ?><?php echo set_select('e_remarks', $remarks->r_name); ?>>
                                 <?php echo $remarks->r_name; ?></option>
                             <?php endforeach; ?>
                             <?php endif; ?>
                         </select>
                     </div>
                     <div class="text-danger text-center"><?php echo form_error('e_remarks'); ?></div>
                 </div>

                 <div style="margin-bottom:17px;">
                     <div class="row no-gutters">
                         <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Others, specify</div>
                     </div>
                     <div class="h5 mb-1 font-weight-bold text-gray-800"><input
                             class="form-control  <?= (form_error('e_others') == "" ? '':'is-invalid') ?>" type="text"
                             name="e_others" value="<?php echo $get_findings_view->f_others; ?>">

                     </div>
                     <div class="text-danger text-center"><?php echo form_error('e_others'); ?></div>
                 </div>

                 <div style="margin-bottom:20%;">
                     <div class="row no-gutters">
                         <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Attending Physician
                         </div>
                     </div>
                     <div class="h5 mb-1 font-weight-bold text-gray-800">
                         <select class="form-control" name="e_physician">
                             <option
                                 value=<?php echo $get_findings_view->f_nameofphysician; ?><?php echo set_select('e_physician', $get_findings_view->f_nameofphysician); ?>>
                                 <?php echo "Dr. ".$get_findings_view->f_nameofphysician; ?></option>
                             <?php if(count($add_physician)): ?>
                             <?php foreach($add_physician as $physicians): ?>
                             <option
                                 value=<?php echo $physicians->ph_name.' / '.$physicians->ph_fieldofphysician; ?><?php echo $physicians->ph_name.'/'.$physicians->ph_fieldofphysician; ?><?php echo set_select('a_physician', $physicians->ph_name.' / '.$physicians->ph_fieldofphysician); ?>>
                                 <?php echo "Dr.".$physicians->ph_name.' / '.$physicians->ph_fieldofphysician; ?>
                             </option>
                             <?php endforeach; ?>
                             <?php endif; ?>
                         </select>
                     </div>
                     <div class="text-danger text-center"><?php echo form_error('e_physician'); ?></div>
                 </div>



             </div><!-- End of Row -->
         </div>
         <div class="col-sm-7">
             <!-- Card Header - Dropdown -->

             <h6 class="ml-3 mb-0 font-weight-bold text-center  text-uppercase text-primary">Reference
             </h6>

             <!-- Card Body -->
             <div class="card-body">

                 <div class="table">

                     <table class="table table-bordered" cellspacing="0">
                         <tbody>

                             <tr>
                                 <td class="text-center">Visual Acuity</td>
                                 <td class="text-left">a. Normal right &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp c.
                                     Abnormal
                                     right
                                     <br> b. Normal left &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp d. Abnormal
                                     left
                                 </td>

                             </tr>
                             <tr>
                                 <td class="text-center">Hearing</td>
                                 <td class="text-left">a. Normal right &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp c.
                                     Abnormal
                                     right
                                     <br> b. Normal left &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp d. Abnormal
                                     left
                                 </td>

                             </tr>
                             <tr>
                                 <td class="text-center">Skin/Scalp</td>
                                 <td class="text-left">a. Normal &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp g. Hematoma <br> b. Pediculosis
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp h. Bruises <br>
                                     c. Tinea Flava &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp i.
                                     Cuts/lacerations<br> d. Ringworm
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp j.
                                     Allergy <br>
                                     e. Eczema
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                     k. Others, Specify <br> f. Impetigo/boil</td>
                             </tr>
                             <tr>
                                 <td class="text-center">Eye/Ear/Nose</td>
                                 <td class="text-left">a. Normal eye &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspf.
                                     Ear
                                     discharge <br> b. Normal ears &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp g.
                                     Impacted
                                     cerumen<br> c. Normal nose &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp h. Septal
                                     deviation<br> d. Squinting
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp i. Nasal
                                     discharge<br>
                                     e. Pale
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                     j. Others, specify <br>&nbsp&nbsp&nbsp&nbspconjunctivae
                                 </td>

                             </tr>
                             <tr>
                                 <td class="text-center">Mouth/Neck/<br>Throat</td>
                                 <td class="text-left">a. Normal mouth &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp f.
                                     Inflamed pharynx <br> b. Normal throat
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspwith/w/o exudates
                                     <br> c. Enlarged tonsils &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp g. Enlarged thyroid
                                     <br>&nbsp&nbsp&nbspwith/w/o exudates &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp gland<br>
                                     d. Lip lesion
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                     h. Speech defect <br> e. Enlarged tonsils
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp i. Dental problem
                                     <br> &nbsp&nbsp&nbsp&nbspwith/w/o exudates
                                     &nbsp&nbsp&nbsp j. Others, specify
                                 </td>
                             </tr>
                             <tr>
                                 <td class="text-center">Lungs/Heart</td>
                                 <td class="text-left">a. Normal lungs &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp f. Deformed
                                     chest
                                     <br> b. Normal heart&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp g. Distant heart
                                     sounds
                                     <br> c. Rales
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                     h. Irregular heart rate
                                     <br> d. Wheeze
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp i.
                                     Others, speficy
                                     <br> e. Murmur
                                 </td>
                             </tr>
                             <tr>
                                 <td class="text-center">Abdomen/<br>Genitalia</td>
                                 <td class="text-left">a. Normal abdomen &nbsp&nbsp&nbsp&nbsp&nbsp e.
                                     Tenderness
                                     <br> b. Normal genitalia &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp f. Genital
                                     discharge
                                     <br> c. Mass
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                     g. Hernia
                                     <br> d. Hemorrhoids
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp h.
                                     Others, specify
                                     <br>
                                 </td>
                             </tr>
                             <tr>
                                 <td class="text-center">Spine/<br>Extremities</td>
                                 <td class="text-left">a. Normal spine &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp e. Lordosis
                                     <br> b. N upper
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp f.
                                     Kyphosis
                                     <br> &nbsp&nbsp&nbsp extremities &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp g.
                                     Bowlegs/knock knees <br>
                                     c. N lower
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp h. Flat
                                     foot
                                     <br> &nbsp&nbsp&nbsp&nbspextremities
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp i. Club foot
                                     <br> d. Scoliosis
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp j. Others,
                                     specify
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>


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
                             <select class="form-control" name="e_allergy">
                                 <option
                                     value=<?php echo $get_findings_view->f_allergy; ?><?php echo set_select('e_allergy', $get_findings_view->f_allergy); ?>>
                                     <?php echo $get_findings_view->f_allergy; ?></option>
                                 <?php if(count($get_status)): ?>
                                 <?php foreach($get_status as $status): ?>
                                 <option
                                     value=<?php echo $status->st_name; ?><?php echo set_select('e_allergy', $status->st_name); ?>>
                                     <?php echo $status->st_name; ?></option>
                                 <?php endforeach; ?>
                                 <?php endif; ?>
                             </select>
                         </div>
                         <div class="text-danger text-center"><?php echo form_error('e_allergy'); ?></div>
                     </div>

                     <div style="margin-bottom:17px;">
                         <div class="row no-gutters">
                             <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Asthma
                             </div>
                         </div>
                         <div class="h5 mb-1 font-weight-bold text-gray-800">
                             <select class="form-control" name="e_asthma">
                                 <option
                                     value=<?php echo $get_findings_view->f_asthma; ?><?php echo set_select('e_asthma', $get_findings_view->f_asthma); ?>>
                                     <?php echo $get_findings_view->f_asthma; ?></option>
                                 <?php if(count($get_status)): ?>
                                 <?php foreach($get_status as $status): ?>
                                 <option
                                     value=<?php echo $status->st_name; ?><?php echo set_select('e_asthma', $status->st_name); ?>>
                                     <?php echo $status->st_name; ?></option>
                                 <?php endforeach; ?>
                                 <?php endif; ?>
                             </select>
                         </div>
                         <div class="text-danger text-center"><?php echo form_error('e_asthma'); ?></div>
                     </div>


                     <div style="margin-bottom:17px;">
                         <div class="row no-gutters">
                             <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Anemia
                             </div>
                         </div>
                         <div class="h5 mb-1 font-weight-bold text-gray-800">
                             <select class="form-control" name="e_anemia">
                                 <option
                                     value=<?php echo $get_findings_view->f_anemia; ?><?php echo set_select('e_anemia', $get_findings_view->f_anemia); ?>>
                                     <?php echo $get_findings_view->f_anemia; ?></option>
                                 <?php if(count($get_status)): ?>
                                 <?php foreach($get_status as $status): ?>
                                 <option
                                     value=<?php echo $status->st_name; ?><?php echo set_select('e_anemia', $status->st_name); ?>>
                                     <?php echo $status->st_name; ?></option>
                                 <?php endforeach; ?>
                                 <?php endif; ?>
                             </select>
                         </div>
                         <div class="text-danger text-center"><?php echo form_error('e_anemia'); ?></div>
                     </div>

                     <div style="margin-bottom:17px;">
                         <div class="row no-gutters">
                             <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Bleeding Problem
                             </div>
                         </div>
                         <div class="h5 mb-1 font-weight-bold text-gray-800">
                             <select class="form-control" name="e_bleeding">
                                 <option
                                     value=<?php echo $get_findings_view->f_bleeding; ?><?php echo set_select('e_bleeding', $get_findings_view->f_bleeding); ?>>
                                     <?php echo $get_findings_view->f_bleeding; ?></option>
                                 <?php if(count($get_status)): ?>
                                 <?php foreach($get_status as $status): ?>
                                 <option
                                     value=<?php echo $status->st_name; ?><?php echo set_select('e_bleeding', $status->st_name); ?>>
                                     <?php echo $status->st_name; ?></option>
                                 <?php endforeach; ?>
                                 <?php endif; ?>
                             </select>
                         </div>
                         <div class="text-danger text-center"><?php echo form_error('e_bleeding'); ?></div>
                     </div>

                     <div style="margin-bottom:17px;">
                         <div class="row no-gutters">
                             <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Heart Ailment
                             </div>
                         </div>
                         <div class="h5 mb-1 font-weight-bold text-gray-800">
                             <select class="form-control" name="e_hailment">
                                 <option
                                     value=<?php echo $get_findings_view->f_hailment; ?><?php echo set_select('e_hailment', $get_findings_view->f_hailment); ?>>
                                     <?php echo $get_findings_view->f_hailment; ?></option>
                                 <?php if(count($get_status)): ?>
                                 <?php foreach($get_status as $status): ?>
                                 <option
                                     value=<?php echo $status->st_name; ?><?php echo set_select('e_hailment', $status->st_name); ?>>
                                     <?php echo $status->st_name; ?></option>
                                 <?php endforeach; ?>
                                 <?php endif; ?>
                             </select>
                         </div>
                         <div class="text-danger text-center"><?php echo form_error('e_hailment'); ?></div>
                     </div>
                 </div>



                 <div class="col-sm-5">
                     <div style="margin-bottom:17px;">
                         <div class="row no-gutters">
                             <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Diabetes</div>
                         </div>
                         <div class="h5 mb-1 font-weight-bold text-gray-800">
                             <select class="form-control" name="e_diabetes">
                                 <option
                                     value=<?php echo $get_findings_view->f_diabetes; ?><?php echo set_select('e_diabetes', $get_findings_view->f_diabetes); ?>>
                                     <?php echo $get_findings_view->f_diabetes; ?></option>
                                 <?php if(count($get_status)): ?>
                                 <?php foreach($get_status as $status): ?>
                                 <option
                                     value=<?php echo $status->st_name; ?><?php echo set_select('e_diabetes', $status->st_name); ?>>
                                     <?php echo $status->st_name; ?></option>
                                 <?php endforeach; ?>
                                 <?php endif; ?>
                             </select>
                         </div>
                         <div class="text-danger text-center"><?php echo form_error('e_diabetes'); ?></div>
                     </div>

                     <div style="margin-bottom:17px;">
                         <div class="row no-gutters">
                             <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Epilepsy</div>
                         </div>
                         <div class="h5 mb-1 font-weight-bold text-gray-800">
                             <select class="form-control" name="e_epilepsy">
                                 <option
                                     value=<?php echo $get_findings_view->f_epilepsy; ?><?php echo set_select('e_epilepsy', $get_findings_view->f_epilepsy); ?>>
                                     <?php echo $get_findings_view->f_epilepsy; ?></option>
                                 <?php if(count($get_status)): ?>
                                 <?php foreach($get_status as $status): ?>
                                 <option
                                     value=<?php echo $status->st_name; ?><?php echo set_select('e_epilepsy', $status->st_name); ?>>
                                     <?php echo $status->st_name; ?></option>
                                 <?php endforeach; ?>
                                 <?php endif; ?>
                             </select>
                         </div>
                         <div class="text-danger text-center"><?php echo form_error('e_epilepsy'); ?></div>
                     </div>

                     <div style="margin-bottom:17px;">
                         <div class="row no-gutters">
                             <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Kidney Disease
                             </div>
                         </div>
                         <div class="h5 mb-1 font-weight-bold text-gray-800">
                             <select class="form-control" name="e_kidney">
                                 <option
                                     value=<?php echo $get_findings_view->f_kidney; ?><?php echo set_select('e_kidney', $get_findings_view->f_kidney); ?>>
                                     <?php echo $get_findings_view->f_kidney; ?></option>
                                 <?php if(count($get_status)): ?>
                                 <?php foreach($get_status as $status): ?>
                                 <option
                                     value=<?php echo $status->st_name; ?><?php echo set_select('e_kidney', $status->st_name); ?>>
                                     <?php echo $status->st_name; ?></option>
                                 <?php endforeach; ?>
                                 <?php endif; ?>
                             </select>
                         </div>
                         <div class="text-danger text-center"><?php echo form_error('e_kidney'); ?></div>
                     </div>

                     <div style="margin-bottom:17px;">
                         <div class="row no-gutters">
                             <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Convulsion</div>
                         </div>
                         <div class="h5 mb-1 font-weight-bold text-gray-800">
                             <select class="form-control" name="e_convulsion">
                                 <option
                                     value=<?php echo $get_findings_view->f_convulsion; ?><?php echo set_select('e_convulsion', $get_findings_view->f_convulsion); ?>>
                                     <?php echo $get_findings_view->f_convulsion; ?></option>
                                 <?php if(count($get_status)): ?>
                                 <?php foreach($get_status as $status): ?>
                                 <option
                                     value=<?php echo $status->st_name; ?><?php echo set_select('e_convulsion', $status->st_name); ?>>
                                     <?php echo $status->st_name; ?></option>
                                 <?php endforeach; ?>
                                 <?php endif; ?>
                             </select>
                         </div>
                         <div class="text-danger text-center"><?php echo form_error('e_convulsion'); ?></div>
                     </div>

                     <div style="margin-bottom:17px;">
                         <div class="row no-gutters">
                             <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Fainting</div>
                         </div>
                         <div class="h5 mb-1 font-weight-bold text-gray-800">
                             <select class="form-control" name="e_fainting">
                                 <option
                                     value=<?php echo $get_findings_view->f_fainting; ?><?php echo set_select('e_fainting', $get_findings_view->f_fainting); ?>>
                                     <?php echo $get_findings_view->f_fainting; ?></option>
                                 <?php if(count($get_status)): ?>
                                 <?php foreach($get_status as $status): ?>
                                 <option
                                     value=<?php echo $status->st_name; ?><?php echo set_select('e_fainting', $status->st_name); ?>>
                                     <?php echo $status->st_name; ?></option>
                                 <?php endforeach; ?>
                                 <?php endif; ?>
                             </select>
                         </div>
                         <div class="text-danger text-center"><?php echo form_error('e_fainting'); ?></div>
                     </div>

                 </div>
             </div>
         </div>

<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
             <h6 class="m-0 font-weight-bold text-primary">Oral Health Examination</h6>
         </div>

         <div class="card-body">
             <div class="row">
                 <div class="col-sm-5 ml-5">
                     <!-- <div style="margin-bottom:17px;">
                         <div class="row no-gutters">
                             <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Allergy
                             </div>
                         </div>
                         <div class="h5 mb-1 font-weight-bold text-gray-800">
                             <select class="form-control" name="e_allergy">
                                 <option
                                     value=<?php echo $get_findings_view->f_allergy; ?><?php echo set_select('e_allergy', $get_findings_view->f_allergy); ?>>
                                     <?php echo $get_findings_view->f_allergy; ?></option>
                                 <?php if(count($get_status)): ?>
                                 <?php foreach($get_status as $status): ?>
                                 <option
                                     value=<?php echo $status->st_name; ?><?php echo set_select('e_allergy', $status->st_name); ?>>
                                     <?php echo $status->st_name; ?></option>
                                 <?php endforeach; ?>
                                 <?php endif; ?>
                             </select>
                         </div>
                         <div class="text-danger text-center"><?php echo form_error('e_allergy'); ?></div>
                     </div>

                     <div style="margin-bottom:17px;">
                         <div class="row no-gutters">
                             <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Asthma
                             </div>
                         </div>
                         <div class="h5 mb-1 font-weight-bold text-gray-800">
                             <select class="form-control" name="e_asthma">
                                 <option
                                     value=<?php echo $get_findings_view->f_asthma; ?><?php echo set_select('e_asthma', $get_findings_view->f_asthma); ?>>
                                     <?php echo $get_findings_view->f_asthma; ?></option>
                                 <?php if(count($get_status)): ?>
                                 <?php foreach($get_status as $status): ?>
                                 <option
                                     value=<?php echo $status->st_name; ?><?php echo set_select('e_asthma', $status->st_name); ?>>
                                     <?php echo $status->st_name; ?></option>
                                 <?php endforeach; ?>
                                 <?php endif; ?>
                             </select>
                         </div>
                         <div class="text-danger text-center"><?php echo form_error('e_asthma'); ?></div>
                     </div>


                     <div style="margin-bottom:17px;">
                         <div class="row no-gutters">
                             <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Anemia
                             </div>
                         </div>
                         <div class="h5 mb-1 font-weight-bold text-gray-800">
                             <select class="form-control" name="e_anemia">
                                 <option
                                     value=<?php echo $get_findings_view->f_anemia; ?><?php echo set_select('e_anemia', $get_findings_view->f_anemia); ?>>
                                     <?php echo $get_findings_view->f_anemia; ?></option>
                                 <?php if(count($get_status)): ?>
                                 <?php foreach($get_status as $status): ?>
                                 <option
                                     value=<?php echo $status->st_name; ?><?php echo set_select('e_anemia', $status->st_name); ?>>
                                     <?php echo $status->st_name; ?></option>
                                 <?php endforeach; ?>
                                 <?php endif; ?>
                             </select>
                         </div>
                         <div class="text-danger text-center"><?php echo form_error('e_anemia'); ?></div>
                     </div>

                     <div style="margin-bottom:17px;">
                         <div class="row no-gutters">
                             <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Bleeding Problem
                             </div>
                         </div>
                         <div class="h5 mb-1 font-weight-bold text-gray-800">
                             <select class="form-control" name="e_bleeding">
                                 <option
                                     value=<?php echo $get_findings_view->f_bleeding; ?><?php echo set_select('e_bleeding', $get_findings_view->f_bleeding); ?>>
                                     <?php echo $get_findings_view->f_bleeding; ?></option>
                                 <?php if(count($get_status)): ?>
                                 <?php foreach($get_status as $status): ?>
                                 <option
                                     value=<?php echo $status->st_name; ?><?php echo set_select('e_bleeding', $status->st_name); ?>>
                                     <?php echo $status->st_name; ?></option>
                                 <?php endforeach; ?>
                                 <?php endif; ?>
                             </select>
                         </div>
                         <div class="text-danger text-center"><?php echo form_error('e_bleeding'); ?></div>
                     </div>

                     <div style="margin-bottom:17px;">
                         <div class="row no-gutters">
                             <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Heart Ailment
                             </div>
                         </div>
                         <div class="h5 mb-1 font-weight-bold text-gray-800">
                             <select class="form-control" name="e_hailment">
                                 <option
                                     value=<?php echo $get_findings_view->f_hailment; ?><?php echo set_select('e_hailment', $get_findings_view->f_hailment); ?>>
                                     <?php echo $get_findings_view->f_hailment; ?></option>
                                 <?php if(count($get_status)): ?>
                                 <?php foreach($get_status as $status): ?>
                                 <option
                                     value=<?php echo $status->st_name; ?><?php echo set_select('e_hailment', $status->st_name); ?>>
                                     <?php echo $status->st_name; ?></option>
                                 <?php endforeach; ?>
                                 <?php endif; ?>
                             </select>
                         </div>
                         <div class="text-danger text-center"><?php echo form_error('e_hailment'); ?></div>
                     </div>
                 </div>



                 <div class="col-sm-5">
                     <div style="margin-bottom:17px;">
                         <div class="row no-gutters">
                             <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Diabetes</div>
                         </div>
                         <div class="h5 mb-1 font-weight-bold text-gray-800">
                             <select class="form-control" name="e_diabetes">
                                 <option
                                     value=<?php echo $get_findings_view->f_diabetes; ?><?php echo set_select('e_diabetes', $get_findings_view->f_diabetes); ?>>
                                     <?php echo $get_findings_view->f_diabetes; ?></option>
                                 <?php if(count($get_status)): ?>
                                 <?php foreach($get_status as $status): ?>
                                 <option
                                     value=<?php echo $status->st_name; ?><?php echo set_select('e_diabetes', $status->st_name); ?>>
                                     <?php echo $status->st_name; ?></option>
                                 <?php endforeach; ?>
                                 <?php endif; ?>
                             </select>
                         </div>
                         <div class="text-danger text-center"><?php echo form_error('e_diabetes'); ?></div>
                     </div>

                     <div style="margin-bottom:17px;">
                         <div class="row no-gutters">
                             <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Epilepsy</div>
                         </div>
                         <div class="h5 mb-1 font-weight-bold text-gray-800">
                             <select class="form-control" name="e_epilepsy">
                                 <option
                                     value=<?php echo $get_findings_view->f_epilepsy; ?><?php echo set_select('e_epilepsy', $get_findings_view->f_epilepsy); ?>>
                                     <?php echo $get_findings_view->f_epilepsy; ?></option>
                                 <?php if(count($get_status)): ?>
                                 <?php foreach($get_status as $status): ?>
                                 <option
                                     value=<?php echo $status->st_name; ?><?php echo set_select('e_epilepsy', $status->st_name); ?>>
                                     <?php echo $status->st_name; ?></option>
                                 <?php endforeach; ?>
                                 <?php endif; ?>
                             </select>
                         </div>
                         <div class="text-danger text-center"><?php echo form_error('e_epilepsy'); ?></div>
                     </div>

                     <div style="margin-bottom:17px;">
                         <div class="row no-gutters">
                             <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Kidney Disease
                             </div>
                         </div>
                         <div class="h5 mb-1 font-weight-bold text-gray-800">
                             <select class="form-control" name="e_kidney">
                                 <option
                                     value=<?php echo $get_findings_view->f_kidney; ?><?php echo set_select('e_kidney', $get_findings_view->f_kidney); ?>>
                                     <?php echo $get_findings_view->f_kidney; ?></option>
                                 <?php if(count($get_status)): ?>
                                 <?php foreach($get_status as $status): ?>
                                 <option
                                     value=<?php echo $status->st_name; ?><?php echo set_select('e_kidney', $status->st_name); ?>>
                                     <?php echo $status->st_name; ?></option>
                                 <?php endforeach; ?>
                                 <?php endif; ?>
                             </select>
                         </div>
                         <div class="text-danger text-center"><?php echo form_error('e_kidney'); ?></div>
                     </div>

                     <div style="margin-bottom:17px;">
                         <div class="row no-gutters">
                             <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Convulsion</div>
                         </div>
                         <div class="h5 mb-1 font-weight-bold text-gray-800">
                             <select class="form-control" name="e_convulsion">
                                 <option
                                     value=<?php echo $get_findings_view->f_convulsion; ?><?php echo set_select('e_convulsion', $get_findings_view->f_convulsion); ?>>
                                     <?php echo $get_findings_view->f_convulsion; ?></option>
                                 <?php if(count($get_status)): ?>
                                 <?php foreach($get_status as $status): ?>
                                 <option
                                     value=<?php echo $status->st_name; ?><?php echo set_select('e_convulsion', $status->st_name); ?>>
                                     <?php echo $status->st_name; ?></option>
                                 <?php endforeach; ?>
                                 <?php endif; ?>
                             </select>
                         </div>
                         <div class="text-danger text-center"><?php echo form_error('e_convulsion'); ?></div>
                     </div>

                     <div style="margin-bottom:17px;">
                         <div class="row no-gutters">
                             <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Fainting</div>
                         </div>
                         <div class="h5 mb-1 font-weight-bold text-gray-800">
                             <select class="form-control" name="e_fainting">
                                 <option
                                     value=<?php echo $get_findings_view->f_fainting; ?><?php echo set_select('e_fainting', $get_findings_view->f_fainting); ?>>
                                     <?php echo $get_findings_view->f_fainting; ?></option>
                                 <?php if(count($get_status)): ?>
                                 <?php foreach($get_status as $status): ?>
                                 <option
                                     value=<?php echo $status->st_name; ?><?php echo set_select('e_fainting', $status->st_name); ?>>
                                     <?php echo $status->st_name; ?></option>
                                 <?php endforeach; ?>
                                 <?php endif; ?>
                             </select>
                         </div>
                         <div class="text-danger text-center"><?php echo form_error('e_fainting'); ?></div>
                     </div> -->

                 </div>
             </div>
         </div>

     <?php echo "<button style='margin-left: 380px; margin-bottom: 20px; text-decoration:none' type='submit' class='btn btn-primary bg-blue' name='submit' href='". base_url() ."admissioncontrol/edit_findings/". $get_findings_view->pr_id ."#findings'>" ?>
     <span class="icon text-white-100">
         <i class="fas fa-arrow-right"></i>
         Update Examination
     </span>
     </button>

 </div>



 <?php echo form_close(); ?>