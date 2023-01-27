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
                                 <td class="text-left">a. Normal eye &nbsp &nbsp &nbsp
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspf.
                                     Ear
                                     discharge <br> b. Normal ears
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp g.
                                     Impacted
                                     cerumen<br> c. Normal nose &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                     h. Septal
                                     deviation<br> d. Squinting
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                     i. Nasal
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
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspwith/w/o
                                     exudates
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
                                 <td class="text-left">a. Normal lungs
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp f. Deformed
                                     chest
                                     <br> b. Normal heart&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp g.
                                     Distant heart
                                     sounds
                                     <br> c. Rales
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                     h. Irregular heart rate
                                     <br> d. Wheeze
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                     i.
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
                                 <td class="text-left">a. Normal spine
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp e. Lordosis
                                     <br> b. N upper
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                     &nbsp &nbsp f.
                                     Kyphosis
                                     <br> &nbsp&nbsp&nbsp extremities
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp g.
                                     Bowlegs/knock knees <br>
                                     c. N lower
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                     h. Flat
                                     foot
                                     <br> &nbsp&nbsp&nbsp&nbspextremities
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp i.
                                     Club foot
                                     <br> d. Scoliosis
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                     j. Others,
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
     <div class="row">
         <div class="col-sm-6">
             <div class="text-s font-weight-bold text-secondary  mt-3 text-uppercase mb-2">
                 Examined by
             </div>
             <div class="h5 font-weight-bold text-gray-800" style="width:70%;">
                 <select class="form-control" name="e_oralphys">
                     <option
                         value=<?php echo $get_findings_view->f_oralphys; ?><?php echo set_select('e_oralphys', $get_findings_view->f_oralphys); ?>>
                         <?php echo "Dr. ".$get_findings_view->f_oralphys; ?></option>
                     <?php if(count($add_physician)): ?>
                     <?php foreach($add_physician as $physicians): ?>
                     <option
                         value=<?php echo $physicians->ph_name.' / '.$physicians->ph_fieldofphysician; ?><?php echo $physicians->ph_name.'/'.$physicians->ph_fieldofphysician; ?><?php echo set_select('a_oralphys', $physicians->ph_name.' / '.$physicians->ph_fieldofphysician); ?>>
                         <?php echo "Dr.".$physicians->ph_name.' / '.$physicians->ph_fieldofphysician; ?>
                     </option>
                     <?php endforeach; ?>
                     <?php endif; ?>
                 </select>
             </div>
             <div class="text-danger text-center"><?php echo form_error('e_oralphys'); ?></div>
         </div>

         <div class="col-sm-5 ml-2">
             <div class="text-s font-weight-bold text-secondary mt-3 text-uppercase mb-2">Date</div>

             <div class="h5 font-weight-bold text-gray-800" style="width:60%;"><input class="form-control" type="date"
                     name="e_oraldate" value="<?php  echo $get_findings_view->f_oraldate; ?>">
             </div>
             <div class="text-danger text-center"><?php echo form_error('e_oraldate'); ?></div>
         </div>
     </div>

     <h6 class="mt-5 ml-4 mb-3 font-weight-bold">CONDITION AND TREATMENT NEEDS</h6>
     <p style="font-size:13px; color:black; font-weight:700; margin-left:8%; margin-bottom:none;">
         (Check the references below) </p>
     <div class="frame-12-NT9"
         style="align-items: center; display: flex;  height: 3.9rem; font-size: 1rem; width: 100%; ">
         <p style="font-size:13px; color:blue; font-weight:700; margin-left:17.4%; margin-bottom:none;">
             CONDITION </p>

         <div class="frame-1-hVR" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem;  font-weight: 600; height: 60%; justify-content: center;  width: 2.6rem; 
                         margin-left:3%" id="2:47"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionfa"
                 value="<?php echo $get_findings_view->f_conditionfa; ?>">
         </div>

         <div class="frame-2-DCs" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:49"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionfb"
                 value="<?php echo $get_findings_view->f_conditionfb; ?>">
         </div>

         <div class="frame-3-urP" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex;  font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:51"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionfc"
                 value="<?php echo $get_findings_view->f_conditionfc; ?>">
         </div>
         <div class="frame-4-1Pd" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:53"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionfd"
                 value="<?php echo $get_findings_view->f_conditionfd; ?>">
         </div>

         <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:55"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionfe"
                 value="<?php echo $get_findings_view->f_conditionfe; ?>">
         </div>

         <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%;justify-content: center;
                          width: 2.6rem;" id="2:57"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionff"
                 value="<?php echo $get_findings_view->f_conditionff; ?>">
         </div>

         <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:59"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionfg"
                 value="<?php echo $get_findings_view->f_conditionfg; ?>">
         </div>

         <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:61"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionfh"
                 value="<?php echo $get_findings_view->f_conditionfh; ?>">
         </div>

         <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                        width: 2.6rem;" id="2:63"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionfi"
                 value="<?php echo $get_findings_view->f_conditionfi; ?>">
         </div>

         <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:65"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionfj"
                 value="<?php echo $get_findings_view->f_conditionfj; ?>">
         </div>
     </div>

     <img width="63%" height="50%" style="margin-left:15.3%; margin-top:none;"
         src="<?php echo base_url(); ?>img/one.png">

     <div class="frame-12-NT9"
         style="align-items: center; display: flex;  height: 3.9rem; font-size: 1rem; width: 100%; ">
         <p style="font-size:13px; color:blue; font-weight:700; margin-left:5.1%; margin-bottom:none;">
         TREATMENT<br>NEEDS </p>
         <div class="frame-1-hVR" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem;  font-weight: 600; height: 60%; justify-content: center;  width: 2.6rem; 
                         margin-left:2%" id="2:47"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionsa"
                 value="<?php echo $get_findings_view->f_conditionsa; ?>">
         </div>

         <div class="frame-2-DCs" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:49"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionsb"
                 value="<?php echo $get_findings_view->f_conditionsb; ?>">
         </div>

         <div class="frame-3-urP" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex;  font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:51"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionsc"
                 value="<?php echo $get_findings_view->f_conditionsc; ?>">
         </div>

         <div class="frame-4-1Pd" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:53"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionsd"
                 value="<?php echo $get_findings_view->f_conditionsd; ?>">
         </div>

         <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:55"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionse"
                 value="<?php echo $get_findings_view->f_conditionse; ?>">
         </div>

         <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%;justify-content: center;
                          width: 2.6rem;" id="2:57"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionsf"
                 value="<?php echo $get_findings_view->f_conditionsf; ?>">
         </div>

         <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:59"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionsg"
                 value="<?php echo $get_findings_view->f_conditionsg; ?>">
         </div>

         <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:61"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionsh"
                 value="<?php echo $get_findings_view->f_conditionsh; ?>">
         </div>

         <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                        width: 2.6rem;" id="2:63"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionsi"
                 value="<?php echo $get_findings_view->f_conditionsi; ?>">
         </div>

         <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:65"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionsj"
                 value="<?php echo $get_findings_view->f_conditionsj; ?>">
         </div>

         <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:55"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionsk"
                 value="<?php echo $get_findings_view->f_conditionsk; ?>">
         </div>

         <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%;justify-content: center;
                          width: 2.6rem;" id="2:57"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionsl"
                 value="<?php echo $get_findings_view->f_conditionsl; ?>">
         </div>

         <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:59"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionsm"
                 value="<?php echo $get_findings_view->f_conditionsm; ?>">
         </div>

         <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:61"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionsn"
                 value="<?php echo $get_findings_view->f_conditionsn; ?>">
         </div>

         <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                        width: 2.6rem;" id="2:63"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionso"
                 value="<?php echo $get_findings_view->f_conditionso; ?>">
         </div>

         <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:65"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionsp"
                 value="<?php echo $get_findings_view->f_conditionsp; ?>">
         </div>
     </div>

     <div class="frame-12-NT9"
         style="align-items: center; display: flex;  height: 3.9rem; font-size: 1rem; width: 100%; ">
         <p style="font-size:13px; color:blue; font-weight:700; margin-left:5.9%; margin-bottom:none;">
             CONDITION</p>
         <div class="frame-1-hVR" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem;  font-weight: 600; height: 60%; justify-content: center;  width: 2.6rem; 
                         margin-left:1.6%" id="2:47"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatfa"
                 value="<?php echo $get_findings_view->f_treatfa; ?>">
         </div>

         <div class="frame-2-DCs" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:49"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatfb"
                 value="<?php echo $get_findings_view->f_treatfb; ?>">
         </div>

         <div class="frame-3-urP" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex;  font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:51"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatfc"
                 value="<?php echo $get_findings_view->f_treatfc; ?>">
         </div>

         <div class="frame-4-1Pd" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:53"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatfd"
                 value="<?php echo $get_findings_view->f_treatfd; ?>">
         </div>

         <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:55"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatfe"
                 value="<?php echo $get_findings_view->f_treatfe; ?>">
         </div>

         <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%;justify-content: center;
                          width: 2.6rem;" id="2:57"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatff"
                 value="<?php echo $get_findings_view->f_treatff; ?>">
         </div>

         <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:59"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatfg"
                 value="<?php echo $get_findings_view->f_treatfg; ?>">
         </div>

         <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:61"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatfh"
                 value="<?php echo $get_findings_view->f_treatfh; ?>">
         </div>

         <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                        width: 2.6rem;" id="2:63"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatfi"
                 value="<?php echo $get_findings_view->f_treatfi; ?>">
         </div>

         <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:65"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatfj"
                 value="<?php echo $get_findings_view->f_treatfj; ?>">
         </div>

         <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:55"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatfk"
                 value="<?php echo $get_findings_view->f_treatfk; ?>">
         </div>

         <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%;justify-content: center;
                          width: 2.6rem;" id="2:57"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatfl"
                 value="<?php echo $get_findings_view->f_treatfl; ?>">
         </div>

         <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:59"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatfm"
                 value="<?php echo $get_findings_view->f_treatfm; ?>">
         </div>

         <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:61"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatfn"
                 value="<?php echo $get_findings_view->f_treatfn; ?>">
         </div>

         <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                        width: 2.6rem;" id="2:63"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatfo"
                 value="<?php echo $get_findings_view->f_treatfo; ?>">
         </div>

         <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:65"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatfp"
                 value="<?php echo $get_findings_view->f_treatfp; ?>">
         </div>
     </div>


     <img width="72.5%" height="70%" style="margin-left:12.1%; margin-top:none;"
         src="<?php echo base_url(); ?>img/two.png">

     <div class="frame-12-NT9"
         style="align-items: center; display: flex;  height: 3.9rem; font-size: 1rem; width: 100%; ">
         <p style="font-size:13px; color:blue; font-weight:700; margin-left:5.6%; margin-bottom:none;">
             CONDITION </p>
         <div class="frame-1-hVR" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem;  font-weight: 600; height: 60%; justify-content: center;  width: 2.6rem; 
                         margin-left:2%" id="2:47"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionta"
                 value="<?php echo $get_findings_view->f_conditionta; ?>">
         </div>

         <div class="frame-2-DCs" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:49"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditiontb"
                 value="<?php echo $get_findings_view->f_conditiontb; ?>">
         </div>

         <div class="frame-3-urP" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex;  font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:51"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditiontc"
                 value="<?php echo $get_findings_view->f_conditiontc; ?>">
         </div>

         <div class="frame-4-1Pd" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:53"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditiontd"
                 value="<?php echo $get_findings_view->f_conditiontd; ?>">
         </div>

         <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:55"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionte"
                 value="<?php echo $get_findings_view->f_conditionte; ?>">
         </div>

         <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%;justify-content: center;
                          width: 2.6rem;" id="2:57"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditiontf"
                 value="<?php echo $get_findings_view->f_conditiontf; ?>">
         </div>

         <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:59"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditiontg"
                 value="<?php echo $get_findings_view->f_conditiontg; ?>">
         </div>

         <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:61"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionth"
                 value="<?php echo $get_findings_view->f_conditionth; ?>">
         </div>

         <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                        width: 2.6rem;" id="2:63"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionti"
                 value="<?php echo $get_findings_view->f_conditionti; ?>">
         </div>

         <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:65"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditiontj"
                 value="<?php echo $get_findings_view->f_conditiontj; ?>">
         </div>

         <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:55"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditiontk"
                 value="<?php echo $get_findings_view->f_conditiontk; ?>">
         </div>

         <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%;justify-content: center;
                          width: 2.6rem;" id="2:57"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditiontl"
                 value="<?php echo $get_findings_view->f_conditiontl; ?>">
         </div>

         <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:59"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditiontm"
                 value="<?php echo $get_findings_view->f_conditiontm; ?>">
         </div>

         <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:61"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditiontn"
                 value="<?php echo $get_findings_view->f_conditiontn; ?>">
         </div>

         <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                        width: 2.6rem;" id="2:63"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionto"
                 value="<?php echo $get_findings_view->f_conditionto; ?>">
         </div>

         <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:65"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditiontp"
                 value="<?php echo $get_findings_view->f_conditiontp; ?>">
         </div>
     </div>

     <div class="frame-12-NT9"
         style="align-items: center; display: flex;  height: 3.9rem; font-size: 1rem; width: 100%; ">
         <p style="font-size:13px; color:blue; font-weight:700; margin-left:5.6%; margin-bottom:none;">
             TREATMENT<br>NEEDS</p>
         <div class="frame-1-hVR" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem;  font-weight: 600; height: 60%; justify-content: center;  width: 2.6rem; 
                         margin-left:1.6%" id="2:47"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatsa"
                 value="<?php echo $get_findings_view->f_treatsa; ?>">
         </div>

         <div class="frame-2-DCs" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:49"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatsb"
                 value="<?php echo $get_findings_view->f_treatsb; ?>">
         </div>

         <div class="frame-3-urP" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex;  font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:51"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatsc"
                 value="<?php echo $get_findings_view->f_treatsc; ?>">
         </div>

         <div class="frame-4-1Pd" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:53"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatsd"
                 value="<?php echo $get_findings_view->f_treatsd; ?>">
         </div>

         <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:55"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatse"
                 value="<?php echo $get_findings_view->f_treatse; ?>">
         </div>

         <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%;justify-content: center;
                          width: 2.6rem;" id="2:57"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatsf"
                 value="<?php echo $get_findings_view->f_treatsf; ?>">
         </div>

         <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:59"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatsg"
                 value="<?php echo $get_findings_view->f_treatsg; ?>">
         </div>

         <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:61"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatsh"
                 value="<?php echo $get_findings_view->f_treatsh; ?>">
         </div>

         <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                        width: 2.6rem;" id="2:63"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatsi"
                 value="<?php echo $get_findings_view->f_treatsi; ?>">
         </div>

         <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:65"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatsj"
                 value="<?php echo $get_findings_view->f_treatsj; ?>">
         </div>

         <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:55"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatsk"
                 value="<?php echo $get_findings_view->f_treatsk; ?>">
         </div>

         <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%;justify-content: center;
                          width: 2.6rem;" id="2:57"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatsl"
                 value="<?php echo $get_findings_view->f_treatsl; ?>">
         </div>

         <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:59"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatsm"
                 value="<?php echo $get_findings_view->f_treatsm; ?>">
         </div>

         <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:61"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatsn"
                 value="<?php echo $get_findings_view->f_treatsn; ?>">
         </div>

         <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                        width: 2.6rem;" id="2:63"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatso"
                 value="<?php echo $get_findings_view->f_treatso; ?>">
         </div>

         <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:65"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_treatsp"
                 value="<?php echo $get_findings_view->f_treatsp; ?>">
         </div>
     </div>


     <img width="66%" height="50%" style="margin-left:16.8%; margin-top:none;"
         src="<?php echo base_url(); ?>img/three.png">


     <div class="frame-12-NT9"
         style="align-items: center; display: flex;  height: 3.9rem; font-size: 1rem; width: 100%; ">
         <p style="font-size:13px; color:blue; font-weight:700; margin-left:17.9%; margin-bottom:none;">
             CONDITION </p>
         <div class="frame-1-hVR" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem;  font-weight: 600; height: 60%; justify-content: center;  width: 2.6rem; 
                         margin-left:3%" id="2:47"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionla"
                 value="<?php echo $get_findings_view->f_conditionla; ?>">
         </div>

         <div class="frame-2-DCs" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:49"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionlb"
                 value="<?php echo $get_findings_view->f_conditionlb; ?>">
         </div>

         <div class="frame-3-urP" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex;  font-size: 0.8rem; font-weight: 600; height:60%; justify-content: center;
                         width: 2.5rem;" id="2:51"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionlc"
                 value="<?php echo $get_findings_view->f_conditionlc; ?>">
         </div>

         <div class="frame-4-1Pd" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:53"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionld"
                 value="<?php echo $get_findings_view->f_conditionld; ?>">
         </div>

         <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:55"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionle"
                 value="<?php echo $get_findings_view->f_conditionle; ?>">
         </div>

         <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%;justify-content: center;
                          width: 2.6rem;" id="2:57"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionlf"
                 value="<?php echo $get_findings_view->f_conditionlf; ?>">
         </div>

         <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:59"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionlg"
                 value="<?php echo $get_findings_view->f_conditionlg; ?>">
         </div>

         <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.6rem;" id="2:61"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionlh"
                 value="<?php echo $get_findings_view->f_conditionlh; ?>">
         </div>

         <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                        width: 2.6rem;" id="2:63"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionli"
                 value="<?php echo $get_findings_view->f_conditionli; ?>">
         </div>

         <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 60%; justify-content: center;
                         width: 2.5rem;" id="2:65"><input class="form-control"
                 style="font-size: 0.9rem;  font-weight: 600; width: 2.5rem;" type="text" name="e_conditionlj"
                 value="<?php echo $get_findings_view->f_conditionlj; ?>">
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
                         <th class="text-center">Dental Procedures</th>
                         <th class="text-center">Remarks</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td class="text-center">Examination</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="e_mouthexam" value="<?php echo $get_findings_view->f_mouthexam; ?>"></td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0;" type="text"
                                 name="e_rmouthexam" value="<?php echo $get_findings_view->f_rmouthexam; ?>"></td>
                     </tr>
                     <tr>
                         <td class="text-center">Sealant (G.I.)</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="e_seal" value="<?php echo $get_findings_view->f_seal; ?>"></td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0;" type="text"
                                 name="e_rseal" value="<?php echo $get_findings_view->f_rseal; ?>"></td>
                     <tr>
                         <td class="text-center">Gum Treatment</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="e_gum" value="<?php echo $get_findings_view->f_gum; ?>"></td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0;" type="text"
                                 name="e_rgum" value="<?php echo $get_findings_view->f_rgum; ?>"></td>
                     </tr>
                     <tr>
                         <td class="text-center">Permanent filling</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="e_perm" value="<?php echo $get_findings_view->f_perm; ?>"></td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0;" type="text"
                                 name="e_rperm" value="<?php echo $get_findings_view->f_rperm; ?>"></td>
                     </tr>
                     <tr>
                         <td class="text-center">ART</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="e_art" value="<?php echo $get_findings_view->f_art; ?>"></td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0;" type="text"
                                 name="e_rart" value="<?php echo $get_findings_view->f_rart; ?>"></td>
                     </tr>
                     <tr>
                         <td class="text-center">Extraction</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="e_extra" value="<?php echo $get_findings_view->f_extra; ?>"></td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0;" type="text"
                                 name="e_rextra" value="<?php echo $get_findings_view->f_rextra; ?>"></td>
                     </tr>
                     <tr>
                         <td class="text-center">Oral prohylaxis</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="e_prohy" value="<?php echo $get_findings_view->f_prohy; ?>"></td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0;" type="text"
                                 name="e_rprohy" value="<?php echo $get_findings_view->f_rprohy; ?>"></td>
                     </tr>
                     <tr>
                         <td class="text-center">Referral</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="e_refer" value="<?php echo $get_findings_view->f_refer; ?>"></td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0;" type="text"
                                 name="e_rrefer" value="<?php echo $get_findings_view->f_rrefer; ?>"></td>
                     </tr>
                     <tr>
                         <td class="text-center">Other oral treatment</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="e_otheroral" value="<?php echo $get_findings_view->f_otheroral; ?>"></td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0;" type="text"
                                 name="e_rotheroral" value="<?php echo $get_findings_view->f_rotheroral; ?>"></td>
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
                                 name="e_ging" value="<?php echo $get_findings_view->f_ging; ?>"></td>
                     </tr>
                     <tr>
                         <td class="text-center">Periodontal Disease</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="e_period" value="<?php echo $get_findings_view->f_period; ?>"></td>
                     </tr>
                     <tr>
                         <td class="text-center">Malocclussion</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="e_malo" value="<?php echo $get_findings_view->f_malo; ?>"></td>
                     </tr>
                     <tr>
                         <td class="text-center">Supernumerary teeth</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="e_super" value="<?php echo $get_findings_view->f_super; ?>"></td>
                     </tr>
                     <tr>
                         <td class="text-center">Decubital ulcer</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="e_ulcer" value="<?php echo $get_findings_view->f_ulcer; ?>"></td>
                     </tr>
                     <tr>
                         <td class="text-center">Calculus</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="e_calcu" value="<?php echo $get_findings_view->f_calcu; ?>"></td>
                     <tr>
                         <td class="text-center">Cleft lip/palate</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="e_cleft" value="<?php echo $get_findings_view->f_cleft; ?>"></td>
                     </tr>
                     <tr>
                         <td class="text-center">Root fragment</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="e_root" value="<?php echo $get_findings_view->f_root; ?>"></td>
                     </tr>
                     <tr>
                         <td class="text-center">Fluorosis</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="e_flu" value="<?php echo $get_findings_view->f_flu; ?>"></td>
                     </tr>
                     <tr>
                         <td class="text-center">Others, specify</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="text"
                                 name="e_specify" value="<?php echo $get_findings_view->f_specify; ?>"></td>
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
                                 name="e_decay" value="<?php echo $get_findings_view->f_decay; ?>"></td>
                     </tr>
                     <tr>
                         <td class="text-center">No. T/Missing</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="number"
                                 name="e_missing" value="<?php echo $get_findings_view->f_missing; ?>"></td>
                     </tr>
                     <tr>
                         <td class="text-center">No. T/Filled</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="number"
                                 name="e_filled" value="<?php echo $get_findings_view->f_filled; ?>"></td>
                     </tr>
                     <tr>
                         <td class="text-center">Total D.M.F.T</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="number"
                                 name="e_total" value="<?php echo $get_findings_view->f_total; ?>"></td>
                     </tr>
                     <tr>
                         <td class="text-center">Total Sound teeth</td>
                         <td><input class="text-center" style="width:100%; height: 100%; border: 0; " type="number"
                                 name="e_sound" value="<?php echo $get_findings_view->f_sound; ?>"></td>
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

 </div>
 </div>
 </div>

 <?php echo "<button style='margin-left: 42%; margin-bottom: 20px; text-decoration:none' type='submit' class='btn btn-primary bg-blue' name='submit' href='". base_url() ."admissioncontrol/edit_findings/". $get_findings_view->pr_id ."#findings'>" ?>
 <span class="icon text-white-100">
     <i class="fas fa-arrow-right"></i>
     Update Examination
 </span>
 </button>

 </div>



 <?php echo form_close(); ?>