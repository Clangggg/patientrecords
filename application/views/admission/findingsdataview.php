<div style="  height: 800vh; overflow: hidden;">
    <div class="align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 text-center">Student Records</h1>
    </div>

    <div class="row">
        <!-- Begin of Row -->

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

                                <?php echo $get_findings_view->pr_lname; ?>,&nbsp&nbsp
                                <?php echo $get_findings_view->pr_fname; ?>&nbsp&nbsp
                                <?php echo $get_findings_view->pr_mname; ?>&nbsp&nbsp
                                <?php echo $get_findings_view->pr_suffix; ?>


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
                                <?php echo "".$get_findings_view->pr_id; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div><!-- End of Row -->



    <!-- Begin Row -->

    <!-- First Column -->



    <!-- Findings Box -->
    <div id="findings" class="col-xl-12 col-lg-4">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">School Health Examination<h6>
                        <?php echo "<a style='margin-left: 390px; 
                    data-toggle='tooltip' title='Back To Student Record' text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/patientdataview/". $get_findings_view->pr_id ."#findings'>" ?>
                        <i class="fa 
                                    fa-arrow-left"></i></a>
                        <?php echo "<a 
                    data-toggle='tooltip' title='Edit' style='margin-left: 30px; text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/edit_findings/". $get_findings_view->findings_id ."#findings'>" ?>
                        <i class="fa 
                                    fa-edit"></i></a>
                        <?php echo "<a data-toggle='tooltip' title='Send to Teacher' style='margin-left: 30px; text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/addfindingsdataview/". $get_findings_view->findings_id ."#findings'>" ?>
                        <i class="fa 
                                    fa-users"></i></a>
                        <a data-toggle='tooltip' title='Print Summary' style='margin-left: 20px; margin-right: 21px;'
                            class="btn_print text-secondary"><i class="fa 
                                    fa-print"></i></a>
            </div>
            <!-- Card Body -->
            <div class="card-body">




                <?php if($this->session->flashdata('edit_finding_success')): ?>
                <?php echo "<div style='#1cc88a' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><i class='con fa fa-check'></i></h6>".$this->session->flashdata('edit_finding_success') ."</div>" ?>
                <?php endif; ?>
                <!-- 
                <?php if($this->session->flashdata('add_to_doctor_success')): ?>
                <?php echo "<div style='#1cc88a' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><i class='con fa fa-check'></i></h6>".$this->session->flashdata('add_to_doctor_success') ."</div>" ?>
                <?php endif; ?> -->



                <div class="row">
                    <div class="col-sm-6">

                        <div style="margin-bottom:17px; margin-left:20px;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Examination
                                    Details</div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_findings_view->f_historypresentillness): ?>
                                <?php echo $get_findings_view->f_historypresentillness; ?>
                                <?php else: ?>
                                <p>N/A</p> ?>
                                <?php endif; ?>
                            </div>
                        </div>




                        <div class="row">

                            <div class="row ml-5">
                                <!-- Begin Row -->
                                <div class="col-sm-4">

                                    <div style="margin-bottom:17px;">
                                        <div class="row no-gutters">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Blood
                                                Pressure</div>
                                        </div>
                                        <div class="h5 mb-1 font-weight-bold text-gray-800">
                                            <?php if($get_findings_view->f_bp): ?>
                                            <?php echo $get_findings_view->f_bp; ?>
                                            <?php else: ?>
                                            <p>N/A</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-sm-6 ml-5">


                                    <div style="margin-bottom:17px; margin-left:50px;">
                                        <div class="row no-gutters">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Respiratory Rate</div>
                                        </div>
                                        <div class="h5 mb-1 font-weight-bold text-gray-800">
                                            <?php if($get_findings_view->f_rr): ?>
                                            <?php echo $get_findings_view->f_rr; ?>
                                            <?php else: ?>
                                            <p>N/A</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                </div>

                                <div class="col-sm-6">

                                    <div style="margin-bottom:17px; ">
                                        <div class="row no-gutters">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Pulse
                                                Rate
                                            </div>
                                        </div>
                                        <div class="h5 mb-1 font-weight-bold text-gray-800">
                                            <?php if($get_findings_view-> f_pulse): ?>
                                            <?php echo $get_findings_view-> f_pulse; ?>
                                            <?php else: ?>
                                            <p>N/A</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-5 ml-4">


                                    <div type="margin-bottom:17px; margin-left:50px;">
                                        <div class="row no-gutters">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Nutritional
                                                Status</div>
                                        </div>
                                        <div class="h5 mb-1 font-weight-bold text-gray-800">
                                            <?php if($get_findings_view->f_cr): ?>
                                            <?php echo $get_findings_view->f_cr; ?>
                                            <?php else: ?>
                                            <p>N/A</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm-4">

                                    <div style="margin-bottom:17px;">
                                        <div class="row no-gutters">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Temperature
                                            </div>
                                        </div>
                                        <div class="h5 mb-1 font-weight-bold text-gray-800">
                                            <?php if($get_findings_view->f_temp): ?>
                                            <?php echo $get_findings_view->f_temp; ?>˚C
                                            <?php else: ?>
                                            <p>N/A</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                </div>

                            </div>


                            <!-- End Row -->

                            <div class="row ml-5">
                                <!-- Begin Row -->

                                <div class="col-sm-4">

                                    <div style="margin-bottom:17px;">
                                        <div class="row no-gutters">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Height
                                            </div>
                                        </div>
                                        <div class="h5 mb-1 font-weight-bold text-gray-800">
                                            <?php if($get_findings_view->f_pr): ?>
                                            <?php echo $get_findings_view->f_pr ;  ?> cm
                                            <?php else: ?>
                                            <p>N/A</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm-4 ml-5">

                                    <div style="margin-bottom:17px; margin-left:50px;">
                                        <div class="row no-gutters">
                                            <div
                                                class="text-xs font-weight-bold text-secondary text-uppercase mb-1 ml-1">
                                                Weight
                                            </div>
                                        </div>
                                        <div class="h5 mb-1 ml-1 font-weight-bold text-gray-800">
                                            <?php if($get_findings_view->f_wt): ?>
                                            <?php echo $get_findings_view->f_wt; ?> kg
                                            <?php else: ?>
                                            <p>N/A</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                </div>

                                <!-- End Row -->

                                <div class="row mt-4">

                                    <div class="col-sm-5 ml-3" style="margin-bottom:17px;">
                                        <div class="row no-gutters">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Visual
                                                Acuity (Snellen's)</div>
                                        </div>
                                        <div class="h5 mb-1 font-weight-bold text-gray-800">
                                            <?php if($get_findings_view->f_physicalexam): ?>
                                            <?php echo $get_findings_view->f_physicalexam; ?>
                                            <?php else: ?>
                                            <p>N/A</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-sm-5 ml-5" style="margin-bottom:17px; margin-left:30px;">
                                        <div class="row no-gutters">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Hearing
                                                (Tuning fork)</div>
                                        </div>
                                        <div class="h5 mb-1 font-weight-bold text-gray-800">
                                            <?php if($get_findings_view->f_diagnosis): ?>
                                            <?php echo $get_findings_view->f_diagnosis; ?>
                                            <?php else: ?>
                                            <p>N/A</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-sm-5 ml-3" style="margin-bottom:17px;">
                                        <div class="row no-gutters">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Skin/Scalp
                                            </div>
                                        </div>
                                        <div class="h5 mb-1 font-weight-bold text-gray-800 ">
                                            <?php if($get_findings_view->f_medication): ?>
                                            <?php echo $get_findings_view->f_medication; ?>
                                            <?php else: ?>
                                            <p>N/A</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 ml-5" style="margin-bottom:17px;margin-left:30px;">
                                        <div class="row no-gutters">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Eyes/Ears/Nose</div>
                                        </div>
                                        <div class="h5 mb-1 font-weight-bold text-gray-800 ">
                                            <?php if($get_findings_view->f_chiefcomplaint): ?>
                                            <?php echo $get_findings_view->f_chiefcomplaint; ?>
                                            <?php else: ?>
                                            <p>N/A</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row ml-1">
                                    <div class="col-sm-5" style="margin-bottom:17px;margin-right:14px;">
                                        <div class="row no-gutters">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Mouth/Neck/Throat</div>
                                        </div>
                                        <div class="h5 mb-1 font-weight-bold text-gray-800 ">
                                            <?php if($get_findings_view->f_mouth): ?>
                                            <?php echo $get_findings_view->f_mouth; ?>
                                            <?php else: ?>
                                            <p>N/A</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-sm-5 ml-5" style="margin-bottom:17px; margin-left:28px;">
                                        <div class="row no-gutters">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Lungs/Heart
                                            </div>
                                        </div>
                                        <div class="h5 mb-1 font-weight-bold text-gray-800 ">
                                            <?php if($get_findings_view->f_lungs): ?>
                                            <?php echo $get_findings_view->f_lungs; ?>
                                            <?php else: ?>
                                            <p>N/A</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-sm-5" style="margin-bottom:17px; margin-right:12px; ">
                                        <div class="row no-gutters">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Abdomen/Genitalia</div>
                                        </div>
                                        <div class="h5 mb-1 font-weight-bold text-gray-800 ">
                                            <?php if($get_findings_view->f_abdo): ?>
                                            <?php echo $get_findings_view->f_abdo; ?>
                                            <?php else: ?>
                                            <p>N/A</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                    <div class="col-sm-4 ml-5" style="margin-bottom:17px; margin-left:30px;">
                                        <div class="row no-gutters">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Spine/Extremities</div>
                                        </div>
                                        <div class="h5 mb-1 font-weight-bold text-gray-800 ">
                                            <?php if($get_findings_view->f_spine): ?>
                                            <?php echo $get_findings_view->f_spine; ?>
                                            <?php else: ?>
                                            <p>N/A</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12" style="margin-bottom:17px;">
                                    <div class="row no-gutters">
                                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                            Remarks/Intervention</div>
                                    </div>
                                    <div class="h5 mb-1 font-weight-bold text-gray-800 ">
                                        <?php if($get_findings_view->f_remarks): ?>
                                        <?php echo $get_findings_view->f_remarks; ?>
                                        <?php else: ?>
                                        <p>N/A</p>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="col-sm-12" style="margin-bottom:17px;">
                                    <div class="row no-gutters">
                                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                            Others, specify</div>
                                    </div>
                                    <div class="h5 mb-1 font-weight-bold text-gray-800 ">
                                        <?php if($get_findings_view->f_others): ?>
                                        <?php echo $get_findings_view->f_others; ?>
                                        <?php else: ?>
                                        <p>N/A</p>
                                        <?php endif; ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-12" style="margin-bottom:17px; margin-left:30px">
                            <div class="row no-gutters">
                                <div
                                    class="text-xs text-center font-weight-bold text-secondary text-uppercase mb-1 mt-3">
                                    Examined
                                    by
                                </div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800 ">
                                <?php if($get_findings_view->f_nameofphysician): ?>
                                <?php echo "Dr. ".$get_findings_view->f_nameofphysician; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">


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
                                            <td class="text-left">a. Normal right &nbsp &nbsp &nbsp &nbsp c.
                                                Abnormal
                                                right
                                                <br> b. Normal left &nbsp &nbsp &nbsp &nbsp &nbsp d. Abnormal
                                                left
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-center">Hearing</td>
                                            <td class="text-left">a. Normal right &nbsp &nbsp &nbsp &nbsp c.
                                                Abnormal
                                                right
                                                <br> b. Normal left &nbsp &nbsp &nbsp &nbsp &nbsp d. Abnormal
                                                left
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-center">Skin/Scalp</td>
                                            <td class="text-left">a. Normal &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                                                &nbsp&nbsp&nbsp g. Hematoma <br> b. Pediculosis
                                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp h. Bruises <br>
                                                c. Tinea Flava &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp i.
                                                Cuts/lacerations<br> d. Ringworm
                                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp j.
                                                Allergy <br>
                                                e. Eczema
                                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                k. Others, Specify <br> f. Impetigo/boil</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Eye/Ear/Nose</td>
                                            <td class="text-left">a. Normal eye &nbsp &nbsp &nbsp &nbsp&nbspf.
                                                Ear
                                                discharge <br> b. Normal ears &nbsp&nbsp&nbsp&nbsp&nbsp g.
                                                Impacted
                                                cerumen<br> c. Normal nose &nbsp&nbsp&nbsp&nbsp&nbsp h. Septal
                                                deviation<br> d. Squinting
                                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp i. Nasal
                                                discharge<br>
                                                e. Pale
                                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                j. Others, specify <br>&nbsp&nbsp&nbsp&nbspconjunctivae
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-center">Mouth/Neck/<br>Throat</td>
                                            <td class="text-left">a. Normal mouth &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                f.
                                                Inflamed pharynx <br> b. Normal throat
                                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp with/w/o exudates
                                                <br> c. Enlarged tonsils &nbsp&nbsp&nbsp g. Enlarged thyroid
                                                <br>&nbspwith/w/o exudates &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp gland<br>
                                                d. Lip lesion
                                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                h. Speech defect <br> e. Enlarged tonsils
                                                &nbsp&nbsp&nbsp&nbsp i. Dental problem
                                                <br> &nbsp&nbsp&nbspwith/w/o exudates
                                                &nbsp&nbsp j. Others, specify
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Lungs/Heart</td>
                                            <td class="text-left">a. Normal lungs &nbsp&nbsp&nbsp&nbsp f. Deformed
                                                chest
                                                <br> b. Normal heart&nbsp&nbsp&nbsp&nbsp&nbsp g. Distant heart
                                                sounds
                                                <br> c. Rales
                                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                h. Irregular heart rate
                                                <br> d. Wheeze
                                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp i.
                                                Others, speficy
                                                <br> e. Murmur
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Abdomen/<br>Genitalia</td>
                                            <td class="text-left">a. Normal abdomen &nbsp&nbsp&nbsp&nbsp e.
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
                                            <td class="text-left">a. Normal spine &nbsp&nbsp&nbsp e. Lordosis
                                                <br> b. N upper
                                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp f.
                                                Kyphosis
                                                <br> &nbsp&nbsp&nbsp extremities &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp g.
                                                Bowlegs/knock knees <br>
                                                c. N lower
                                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp h. Flat
                                                foot
                                                <br> &nbsp&nbsp&nbsp&nbspextremities
                                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp i. Club foot
                                                <br> d. Scoliosis
                                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp j. Others,
                                                specify
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>





                <!-- Card Body End tag -->

                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="ml-3 mb-0 font-weight-bold text-primary">Medical History</h6>
                </div>
                <!-- Card Body -->
                <div style="font-size:17px; margin-top:4%; margin-left:5%; margin-bottom:5%; ">
                    <table style="border: 1px solid; border-color: #E0E0E0; border-collapse: collapse; width:95%;  ">
                        <tr>
                            <th style="width:40%; text-align:center; padding: 8px; font-weight:700; border: 1px solid; border-color: #E0E0E0;">
                                Health Conditions
                            </th>

                            <th style="width:40%; text-align:center; padding: 8px; font-weight:700; border: 1px solid; border-color: #E0E0E0;">
                                Indication
                            </th>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Allergy
                            </td>

                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_allergy): ?>
                                <?php echo $get_findings_view->f_allergy; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>

                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Asthma
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view-> f_asthma): ?>
                                <?php echo $get_findings_view-> f_asthma; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>

                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Anemia
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_anemia): ?>
                                <?php echo $get_findings_view->f_anemia; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Bleeding Problem
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_bleeding): ?>
                                <?php echo $get_findings_view->f_bleeding; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Heart Ailment
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_hailment): ?>
                                <?php echo $get_findings_view->f_hailment; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Diabetes
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_diabetes): ?>
                                <?php echo $get_findings_view->f_diabetes; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Epilepsy
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_epilepsy): ?>
                                <?php echo $get_findings_view->f_epilepsy; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Kidney Disease
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_kidney): ?>
                                <?php echo $get_findings_view->f_kidney; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Convulsion
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_convulsion): ?>
                                <?php echo $get_findings_view->f_convulsion; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Fainting
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_fainting): ?>
                                <?php echo $get_findings_view->f_fainting; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                    </table>
                </div>


                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="ml-3 mb-0 font-weight-bold text-primary">Oral Health Examination</h6>
                </div>
                <!-- Card Body -->

                <h6 class="mt-5 ml-5 mb-3 font-weight-bold">CONDITION AND TREATMENT NEEDS</h6>
                <p style="font-size:13px; color:black; font-weight:700; margin-left:8%; margin-bottom:none;">
                    (Check the references below) </p>
                <div class="frame-12-NT9"
                    style="align-items: center; display: flex;  height: 3.9rem; font-size: 1rem; width: 100%; ">
                    <p style="font-size:11px; color:blue; font-weight:700; margin-left:24.9%; margin-bottom:none;">
                        CONDITION </p>
                    <div class="frame-1-hVR" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem;  font-weight: 600; height: 55%; justify-content: center;  width: 2.3rem; 
                         margin-left:2.8%" id="2:47">
                        <?php if($get_findings_view->f_conditionfa): ?>
                        <?php echo $get_findings_view->f_conditionfa; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-2-DCs" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:49">
                        <?php if($get_findings_view->f_conditionfb): ?>
                        <?php echo $get_findings_view->f_conditionfb; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-3-urP" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex;  font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:51">
                        <?php if($get_findings_view->f_conditionfc): ?>
                        <?php echo $get_findings_view->f_conditionfc; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-4-1Pd" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:53">
                        <?php if($get_findings_view->f_conditionfd): ?>
                        <?php echo $get_findings_view->f_conditionfd; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:55">
                        <?php if($get_findings_view->f_conditionfe): ?>
                        <?php echo $get_findings_view->f_conditionfe; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%;justify-content: center;
                          width: 2.2rem;" id="2:57">
                        <?php if($get_findings_view->f_conditionff): ?>
                        <?php echo $get_findings_view->f_conditionff; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:59">
                        <?php if($get_findings_view->f_conditionfg): ?>
                        <?php echo $get_findings_view->f_conditionfg; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:61">
                        <?php if($get_findings_view->f_conditionfh): ?>
                        <?php echo $get_findings_view->f_conditionfh; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                        width: 2.1rem;" id="2:63">
                        <?php if($get_findings_view->f_conditionfi): ?>
                        <?php echo $get_findings_view->f_conditionfi; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:65">
                        <?php if($get_findings_view->f_conditionfj): ?>
                        <?php echo $get_findings_view->f_conditionfj; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                </div>

                <img width="49.8%" height="50%" style="margin-left:24%; margin-top:none;"
                    src="<?php echo base_url(); ?>img/one.png">

                <div class="frame-12-NT9"
                    style="align-items: center; display: flex;  height: 3.9rem; font-size: 1rem; width: 100%; ">
                    <p style="font-size:11px; color:blue; font-weight:700; margin-left:14.2%; margin-bottom:none;">
                        TREATMENT<br>NEEDS </p>
                    <div class="frame-1-hVR" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem;  font-weight: 600; height: 55%; justify-content: center;  width: 2.3rem; 
                         margin-left:3%" id="2:47">
                        <?php if($get_findings_view->f_conditionsa): ?>
                        <?php echo $get_findings_view->f_conditionsa; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-2-DCs" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:49">
                        <?php if($get_findings_view->f_conditionsb): ?>
                        <?php echo $get_findings_view->f_conditionsb; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-3-urP" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex;  font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:51">
                        <?php if($get_findings_view->f_conditionsc): ?>
                        <?php echo $get_findings_view->f_conditionsc; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-4-1Pd" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:53">
                        <?php if($get_findings_view->f_conditionsd): ?>
                        <?php echo $get_findings_view->f_conditionsd; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:55">
                        <?php if($get_findings_view->f_conditionse): ?>
                        <?php echo $get_findings_view->f_conditionse; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%;justify-content: center;
                          width: 2.2rem;" id="2:57">
                        <?php if($get_findings_view->f_conditionsf): ?>
                        <?php echo $get_findings_view->f_conditionsf; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:59">
                        <?php if($get_findings_view->f_conditionsg): ?>
                        <?php echo $get_findings_view->f_conditionsg; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:61">
                        <?php if($get_findings_view->f_conditionsh): ?>
                        <?php echo $get_findings_view->f_conditionsh; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                        width: 2.2rem;" id="2:63">
                        <?php if($get_findings_view->f_conditionsi): ?>
                        <?php echo $get_findings_view->f_conditionsi; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:65">
                        <?php if($get_findings_view->f_conditionsj): ?>
                        <?php echo $get_findings_view->f_conditionsj; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:55">
                        <?php if($get_findings_view->f_conditionsk): ?>
                        <?php echo $get_findings_view->f_conditionsk; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%;justify-content: center;
                          width: 2.2rem;" id="2:57">
                        <?php if($get_findings_view->f_conditionsl): ?>
                        <?php echo $get_findings_view->f_conditionsl; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:59">
                        <?php if($get_findings_view->f_conditionsm): ?>
                        <?php echo $get_findings_view->f_conditionsm; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:61">
                        <?php if($get_findings_view->f_conditionsn): ?>
                        <?php echo $get_findings_view->f_conditionsn; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                        width: 2.3rem;" id="2:63">
                        <?php if($get_findings_view->f_conditionso): ?>
                        <?php echo $get_findings_view->f_conditionso; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.3rem;" id="2:65">
                        <?php if($get_findings_view->f_conditionsp): ?>
                        <?php echo $get_findings_view->f_conditionsp; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="frame-12-NT9"
                    style="align-items: center; display: flex;  height: 3.9rem; font-size: 1rem; width: 100%; ">
                    <p style="font-size:11px; color:blue; font-weight:700; margin-left:14.7%; margin-bottom:none;">
                        CONDITION</p>
                    <div class="frame-1-hVR" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem;  font-weight: 600; height: 55%; justify-content: center;  width: 2.3rem; 
                         margin-left:3%" id="2:47">
                        <?php if($get_findings_view->f_treatfa): ?>
                        <?php echo $get_findings_view->f_treatfa; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-2-DCs" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:49">
                        <?php if($get_findings_view->f_treatfb): ?>
                        <?php echo $get_findings_view->f_treatfb; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-3-urP" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex;  font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:51">
                        <?php if($get_findings_view->f_treatfc): ?>
                        <?php echo $get_findings_view->f_treatfc; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-4-1Pd" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:53">
                        <?php if($get_findings_view->f_treatfd): ?>
                        <?php echo $get_findings_view->f_treatfd; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:55">
                        <?php if($get_findings_view->f_treatfe): ?>
                        <?php echo $get_findings_view->f_treatfe; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%;justify-content: center;
                          width: 2.2rem;" id="2:57">
                        <?php if($get_findings_view->f_treatff): ?>
                        <?php echo $get_findings_view->f_treatff; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:59">
                        <?php if($get_findings_view->f_treatfg): ?>
                        <?php echo $get_findings_view->f_treatfg; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:61">
                        <?php if($get_findings_view->f_treatfh): ?>
                        <?php echo $get_findings_view->f_treatfh; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                        width: 2.2rem;" id="2:63">
                        <?php if($get_findings_view->f_treatfi): ?>
                        <?php echo $get_findings_view->f_treatfi; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:65">
                        <?php if($get_findings_view->f_treatfj): ?>
                        <?php echo $get_findings_view->f_treatfj; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:55">
                        <?php if($get_findings_view->f_treatfk): ?>
                        <?php echo $get_findings_view->f_treatfk; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%;justify-content: center;
                          width: 2.2rem;" id="2:57">
                        <?php if($get_findings_view->f_treatfl): ?>
                        <?php echo $get_findings_view->f_treatfl; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:59">
                        <?php if($get_findings_view->f_treatfm): ?>
                        <?php echo $get_findings_view->f_treatfm; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:61">
                        <?php if($get_findings_view->f_treatfn): ?>
                        <?php echo $get_findings_view->f_treatfn; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                        width: 2.2rem;" id="2:63">
                        <?php if($get_findings_view->f_treatfo): ?>
                        <?php echo $get_findings_view->f_treatfo; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.3rem;" id="2:65">
                        <?php if($get_findings_view->f_treatfp): ?>
                        <?php echo $get_findings_view->f_treatfp; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                </div>


                <img width="58%" height="58%" style="margin-left:21.3%; margin-top:none;"
                    src="<?php echo base_url(); ?>img/two.png">

                <div class="frame-12-NT9"
                    style="align-items: center; display: flex;  height: 3.9rem; font-size: 1rem; width: 100%; ">
                    <p style="font-size:11px; color:blue; font-weight:700; margin-left:14.7%; margin-bottom:none;">
                        CONDITION </p>
                    <div class="frame-1-hVR" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem;  font-weight: 600; height: 55%; justify-content: center;  width: 2.3rem; 
                         margin-left:3%" id="2:47">
                        <?php if($get_findings_view->f_conditionta): ?>
                        <?php echo $get_findings_view->f_conditionta; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-2-DCs" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:49">
                        <?php if($get_findings_view->f_conditiontb): ?>
                        <?php echo $get_findings_view->f_conditiontb; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-3-urP" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex;  font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:51">
                        <?php if($get_findings_view->f_conditiontc): ?>
                        <?php echo $get_findings_view->f_conditiontc; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-4-1Pd" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:53">
                        <?php if($get_findings_view->f_conditiontd): ?>
                        <?php echo $get_findings_view->f_conditiontd; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:55">
                        <?php if($get_findings_view->f_conditionte): ?>
                        <?php echo $get_findings_view->f_conditionte; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%;justify-content: center;
                          width: 2.2rem;" id="2:57">
                        <?php if($get_findings_view->f_conditiontf): ?>
                        <?php echo $get_findings_view->f_conditiontf; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:59">
                        <?php if($get_findings_view->f_conditiontg): ?>
                        <?php echo $get_findings_view->f_conditiontg; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:61">
                        <?php if($get_findings_view->f_conditionth): ?>
                        <?php echo $get_findings_view->f_conditionth; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                        width: 2.2rem;" id="2:63">
                        <?php if($get_findings_view->f_conditionti): ?>
                        <?php echo $get_findings_view->f_conditionti; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:65">
                        <?php if($get_findings_view->f_conditiontj): ?>
                        <?php echo $get_findings_view->f_conditiontj; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:55">
                        <?php if($get_findings_view->f_conditiontk): ?>
                        <?php echo $get_findings_view->f_conditiontk; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%;justify-content: center;
                          width: 2.2rem;" id="2:57">
                        <?php if($get_findings_view->f_conditiontl): ?>
                        <?php echo $get_findings_view->f_conditiontl; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:59">
                        <?php if($get_findings_view->f_conditiontm): ?>
                        <?php echo $get_findings_view->f_conditiontm; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:61">
                        <?php if($get_findings_view->f_conditiontn): ?>
                        <?php echo $get_findings_view->f_conditiontn; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                        width: 2.2rem;" id="2:63">
                        <?php if($get_findings_view->f_conditionto): ?>
                        <?php echo $get_findings_view->f_conditionto; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:65">
                        <?php if($get_findings_view->f_conditiontp): ?>
                        <?php echo $get_findings_view->f_conditiontp; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="frame-12-NT9"
                    style="align-items: center; display: flex;  height: 3.9rem; font-size: 1rem; width: 100%; ">
                    <p style="font-size:11px; color:blue; font-weight:700; margin-left:14.4%; margin-bottom:none;">
                        TREATMENT<br>NEEDS</p>
                    <div class="frame-1-hVR" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem;  font-weight: 600; height: 55%; justify-content: center;  width: 2.3rem; 
                         margin-left:3%" id="2:47">
                        <?php if($get_findings_view->f_treatsa): ?>
                        <?php echo $get_findings_view->f_treatsa; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-2-DCs" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:49">
                        <?php if($get_findings_view->f_treatsb): ?>
                        <?php echo $get_findings_view->f_treatsb; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-3-urP" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex;  font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:51">
                        <?php if($get_findings_view->f_treatsc): ?>
                        <?php echo $get_findings_view->f_treatsc; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-4-1Pd" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:53">
                        <?php if($get_findings_view->f_treatsd): ?>
                        <?php echo $get_findings_view->f_treatsd; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:55">
                        <?php if($get_findings_view->f_treatse): ?>
                        <?php echo $get_findings_view->f_treatse; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%;justify-content: center;
                          width: 2.2rem;" id="2:57">
                        <?php if($get_findings_view->f_treatsf): ?>
                        <?php echo $get_findings_view->f_treatsf; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:59">
                        <?php if($get_findings_view->f_treatsg): ?>
                        <?php echo $get_findings_view->f_treatsg; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:61">
                        <?php if($get_findings_view->f_treatsh): ?>
                        <?php echo $get_findings_view->f_treatsh; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                        width: 2.2rem;" id="2:63">
                        <?php if($get_findings_view->f_treatsi): ?>
                        <?php echo $get_findings_view->f_treatsi; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:65">
                        <?php if($get_findings_view->f_treatsj): ?>
                        <?php echo $get_findings_view->f_treatsj; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:55">
                        <?php if($get_findings_view->f_treatsk): ?>
                        <?php echo $get_findings_view->f_treatsk; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%;justify-content: center;
                          width: 2.2rem;" id="2:57">
                        <?php if($get_findings_view->f_treatsl): ?>
                        <?php echo $get_findings_view->f_treatsl; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:59">
                        <?php if($get_findings_view->f_treatsm): ?>
                        <?php echo $get_findings_view->f_treatsm; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:61">
                        <?php if($get_findings_view->f_treatsn): ?>
                        <?php echo $get_findings_view->f_treatsn; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                        width: 2.2rem;" id="2:63">
                        <?php if($get_findings_view->f_treatso): ?>
                        <?php echo $get_findings_view->f_treatso; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:65">
                        <?php if($get_findings_view->f_treatsp): ?>
                        <?php echo $get_findings_view->f_treatsp; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                </div>

                <img width="52.7%" height="52.7%" style="margin-left:25%; margin-top:none;"
                    src="<?php echo base_url(); ?>img/three.png">

                <div class="frame-12-NT9"
                    style="align-items: center; display: flex;  height: 3.9rem; font-size: 1rem; width: 100%; ">
                    <p style="font-size:11px; color:blue; font-weight:700; margin-left:25.2%; margin-bottom:none;">
                        CONDITION </p>
                    <div class="frame-1-hVR" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem;  font-weight: 600; height: 55%; justify-content: center;  width: 2.3rem; 
                         margin-left:3%" id="2:47">
                        <?php if($get_findings_view->f_conditionla): ?>
                        <?php echo $get_findings_view->f_conditionla; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-2-DCs" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:49">
                        <?php if($get_findings_view->f_conditionlb): ?>
                        <?php echo $get_findings_view->f_conditionlb; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-3-urP" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex;  font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:51">
                        <?php if($get_findings_view->f_conditionlc): ?>
                        <?php echo $get_findings_view->f_conditionlc; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-4-1Pd" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:53">
                        <?php if($get_findings_view->f_conditionld): ?>
                        <?php echo $get_findings_view->f_conditionld; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-5-vFh" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:55">
                        <?php if($get_findings_view->f_conditionle): ?>
                        <?php echo $get_findings_view->f_conditionle; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-6-E1V" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%;justify-content: center;
                          width: 2.2rem;" id="2:57">
                        <?php if($get_findings_view->f_conditionlf): ?>
                        <?php echo $get_findings_view->f_conditionlf; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-7-8sZ" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:59">
                        <?php if($get_findings_view->f_conditionlg): ?>
                        <?php echo $get_findings_view->f_conditionlg; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-8-StF" style="align-items: center;border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.2rem;" id="2:61">
                        <?php if($get_findings_view->f_conditionlh): ?>
                        <?php echo $get_findings_view->f_conditionlh; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-9-ZT5" style=" align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                        width: 2.2rem;" id="2:63">
                        <?php if($get_findings_view->f_conditionli): ?>
                        <?php echo $get_findings_view->f_conditionli; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:65">
                        <?php if($get_findings_view->f_conditionlj): ?>
                        <?php echo $get_findings_view->f_conditionlj; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                </div>



                <p style="font-size:13px; color:black; font-weight:700; margin-left:2%;; margin-top:4%;">
                    (Check the references below) </p>

                <div style="font-size:17px; margin-top:4%; margin-left:5%; margin-bottom:5%; ">
                    <table style="border: 1px solid #C5C5C5; border-collapse: collapse; width:95%; border-color: #E0E0E0; ">
                        <tr>
                            <th style="width:40%; text-align:center; padding: 8px; font-weight:700; border: 1px solid; border-color: #E0E0E0;">

                            </th>

                            <th style="width:40%; text-align:center; padding: 8px; font-weight:700; border: 1px solid; border-color: #E0E0E0;">
                                Dental Procedures
                            </th>
                            <th style="width:40%; text-align:center; padding: 8px; font-weight:700; border: 1px solid; border-color: #E0E0E0;">
                                Remarks
                            </th>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                DATE
                            </td>

                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_oraldate): ?>
                                <?php echo $get_findings_view->f_oraldate; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                ---
                            </td>

                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Examination
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view-> f_mouthexam): ?>
                                <?php echo $get_findings_view-> f_mouthexam; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view-> f_rmouthexam): ?>
                                <?php echo $get_findings_view-> f_rmouthexam; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>

                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Sealant (G.I.)
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_seal): ?>
                                <?php echo $get_findings_view->f_seal; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_rseal): ?>
                                <?php echo $get_findings_view->f_rseal; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Gum Treatment
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid;border-color: #E0E0E0;" >
                                <?php if($get_findings_view->f_gum): ?>
                                <?php echo $get_findings_view->f_gum; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_rgum): ?>
                                <?php echo $get_findings_view->f_rgum; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Permanent filling
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_perm): ?>
                                <?php echo $get_findings_view->f_perm; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_rperm): ?>
                                <?php echo $get_findings_view->f_rperm; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                ART
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_art): ?>
                                <?php echo $get_findings_view->f_art; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_rart): ?>
                                <?php echo $get_findings_view->f_rart; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Extraction
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_extra): ?>
                                <?php echo $get_findings_view->f_extra; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_rextra): ?>
                                <?php echo $get_findings_view->f_rextra; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Oral prohylaxis
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_prohy): ?>
                                <?php echo $get_findings_view->f_prohy; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_rprohy): ?>
                                <?php echo $get_findings_view->f_rprohy; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Referral
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_refer): ?>
                                <?php echo $get_findings_view->f_refer; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_rrefer): ?>
                                <?php echo $get_findings_view->f_rrefer; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Other oral treatment
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_otheroral): ?>
                                <?php echo $get_findings_view->f_otheroral; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_rotheroral): ?>
                                <?php echo $get_findings_view->f_rotheroral; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Examined by
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_oralphys): ?>
                                <?php echo $get_findings_view->f_oralphys; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                    </table>
                </div>




                <p style="font-size:13px; color:black; font-weight:700; margin-left:3%;">
                    (Check the references below) </p>
                <div style="font-size:17px; margin-top:4%; margin-left:5%; margin-bottom:5%; ">
                    <table style="border: 1px solid #C5C5C5; border-collapse: collapse; width:95%; border-color: #E0E0E0; ">
                        <tr>
                            <th style="width:40%; text-align:center; padding: 8px; font-weight:700; border: 1px solid; border-color: #E0E0E0;">

                            </th>

                            <th style="width:40%; text-align:center; padding: 8px; font-weight:700; border: 1px solid; border-color: #E0E0E0;">
                                Oral Health Condition
                            </th>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Gingivitis
                            </td>

                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_ging): ?>
                                <?php echo $get_findings_view->f_ging; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>

                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Periodontal disease
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view-> f_period): ?>
                                <?php echo $get_findings_view-> f_period; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>

                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Malocclusion
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_malo): ?>
                                <?php echo $get_findings_view->f_malo; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Supernumerary teeth
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_super): ?>
                                <?php echo $get_findings_view->f_super; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Decubital ulcer
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_ulcer): ?>
                                <?php echo $get_findings_view->f_ulcer; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Calculus
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_calcu): ?>
                                <?php echo $get_findings_view->f_calcu; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Cleft lip/palate
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_cleft): ?>
                                <?php echo $get_findings_view->f_cleft; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Root fragment
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_root): ?>
                                <?php echo $get_findings_view->f_root; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Fluorosis
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_flu): ?>
                                <?php echo $get_findings_view->f_flu; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Other, specify
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_specify): ?>
                                <?php echo $get_findings_view->f_specify; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                    </table>
                </div>



                <h6 class="mt-2 ml-5 font-weight-bold">PERMANENT TEETH</h6>
                <div style="font-size:17px; margin-top:4%; margin-left:5%; margin-bottom:5%; ">
                    <table style="border: 1px solid #C5C5C5; border-collapse: collapse; width:95%; border-color: #E0E0E0; ">
                        <tr>
                            <th style="width:40%; text-align:center; padding: 8px; font-weight:700; border: 1px solid; border-color: #E0E0E0;">
                                Index: D.M.F.T.
                            </th>

                            <th style="width:40%; text-align:center; padding: 8px; font-weight:700; border: 1px solid; border-color: #E0E0E0;">
                                DMFT Index
                            </th>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                No. T/Decayed
                            </td>

                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_decay): ?>
                                <?php echo $get_findings_view->f_decay; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>

                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                No. T/Missing
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view-> f_missing): ?>
                                <?php echo $get_findings_view-> f_missing; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>

                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                No. T/Filled
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_filled): ?>
                                <?php echo $get_findings_view->f_filled; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Total D.M.F.T.
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_total): ?>
                                <?php echo $get_findings_view->f_total; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                Total Sound teeth
                            </td>
                            <td style="width:40%; text-align:center; padding: 8px; border: 1px solid; border-color: #E0E0E0;">
                                <?php if($get_findings_view->f_sound): ?>
                                <?php echo $get_findings_view->f_sound; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="ml-3 mb-0 font-weight-bold text-primary">REFERENCES</h6>
                </div>

                <div class="row mb-5" style="margin-bottom:500%;">
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
                <!-- begin summary -->


                <div class="card-header py-3 mb-4  mt-5 d-flex flex-row align-items-center justify-content-between"
                    style="text-align:center; margin-top:100%;">
                    <h6 class="ml-3 mb-0 font-weight-bold text-primary">SUMMARY REPORT</h6>
                </div>


                <div id="printablearea">
                    <!-- Printable Area -->
                    <div class="head" style="text-align:center; font-size:15px; color:black;">
                        <h style="margin-bottom: none; font-weight:200;">REPUBLIC OF THE PHILIPPINES <br>DEPARTMENT OF
                            EDUCATION <br></h>
                        <h style="margin-top: none; font-weight:600;">HEALTH AND NUTRITION CENTER <br>DIVISION OF
                            VALENZUELA
                            CITY</h>
                    </div>

                    <div class="ss" style="text-align:center;  color:black;">
                        <h style="margin-bottom: none; font-size:19px; font-weight:600;"><br>SCHOOL HEALTH EXAMINATION
                            CARD
                            <br>
                        </h>
                        <h style="margin-top: none; font-size:13.5px; font-weight:200;">Secondary Students</h>
                    </div>

                    <div style="font-size:15px; margin-top:4%; ">
                        <table>
                            <tr>
                                <th style="width:40%; text-align:left; padding: 5px; font-weight:400;">
                                    <?php if($get_findings_view->pr_lname): ?> NAME: &nbsp;&nbsp;
                                    <?php echo $get_findings_view->pr_lname;  ?>, &nbsp;&nbsp;&nbsp;
                                    <?php else: ?>
                                    <p>N/A</p> ?>
                                    <?php endif; ?>
                                    <?php if($get_findings_view->pr_fname): ?>
                                    <?php echo $get_findings_view->pr_fname; ?> &nbsp;&nbsp;&nbsp;
                                    <?php else: ?>

                                    <?php endif; ?>
                                    <?php if($get_findings_view->pr_mname): ?>
                                    <?php echo $get_findings_view->pr_mname;  ?> &nbsp;&nbsp;
                                    <?php else: ?>

                                    <?php endif; ?>

                                    <?php if($get_findings_view->pr_suffix): ?>
                                    <?php echo $get_findings_view->pr_suffix; ?>
                                    <?php else: ?>

                                    <?php endif; ?>


                                </th>

                                <th style="width:40%; text-align:left; padding: 5px; font-weight:400;">
                                    <?php if($get_findings_view->pr_occup): ?>SCHOOL: &nbsp;&nbsp;
                                    <?php echo $get_findings_view->pr_occup; ?>
                                    <?php else: ?>
                                    <p>N/A</p> ?>
                                    <?php endif; ?>
                                </th>
                            </tr>
                            <tr>
                                <td style="width:40%; text-align:left; padding: 5px;">
                                    <?php if($get_findings_view->pr_age): ?> Age: &nbsp;&nbsp;
                                    <?php echo $get_findings_view->pr_age; ?>
                                    <?php else: ?>
                                    <p>N/A</p> ?>
                                    <?php endif; ?>
                                </td>

                                <td style="width:40%; text-align:left; padding: 5px;">
                                    <?php if($get_findings_view->pr_civilstat): ?>Region:
                                    <?php echo $get_findings_view->pr_civilstat; ?>
                                    <?php else: ?>
                                    <p>N/A</p> ?>
                                    <?php endif; ?>
                                </td>

                            </tr>
                            <tr>
                                <td style="width:40%; text-align:left; padding: 5px;">
                                    <?php if($get_findings_view->pr_vaccinestat): ?> Vaccination Status: &nbsp;&nbsp;
                                    <?php echo $get_findings_view->pr_vaccinestat; ?>
                                    <?php else: ?>
                                    <p>N/A</p> ?>
                                    <?php endif; ?>
                                </td>
                                <td style="width:40%; text-align:left; padding: 5px;">
                                    <?php if($get_findings_view->pr_divi): ?>Division:
                                    <?php echo $get_findings_view->pr_divi; ?>
                                    <?php else: ?>
                                    <p>N/A</p> ?>
                                    <?php endif; ?>
                                </td>

                            </tr>
                            <tr>
                                <td style="width:40%; text-align:left; padding: 5px;">
                                    <?php if($get_findings_view->pr_religion): ?> Parent/Guardian: &nbsp;&nbsp;
                                    <?php echo $get_findings_view->pr_religion; ?>
                                    <?php else: ?>
                                    <p>N/A</p> ?>
                                    <?php endif; ?>
                                </td>
                                <td style="width:40%; text-align:left; padding: 5px;">
                                    <?php if($get_findings_view->pr_number): ?>Contact No.:
                                    <?php echo $get_findings_view->pr_number; ?>
                                    <?php else: ?>
                                    <p>N/A</p> ?>
                                    <?php endif; ?>
                                </td>

                            </tr>
                        </table>
                    </div>
                    <div style="font-size:15px; margin-top:1%; margin-left:1%; ">
                        <?php if($get_findings_view->pr_addrs): ?> Address: &nbsp;&nbsp;
                        <?php echo $get_findings_view->pr_addrs; ?>
                        <?php else: ?>
                        <p>N/A</p> ?>
                        <?php endif; ?>

                    </div>
                    <br>
                    <hr>
                    <br>
                    <h style="font-weight:600;">
                        <?php if($get_findings_view->f_historypresentillness): ?>
                        <?php echo $get_findings_view->f_historypresentillness; ?> -- SUMMARY REPORT
                        <?php else: ?>
                        <p>N/A</p> ?>
                        <?php endif; ?>
                    </h>

                    <div style="font-size:15px; margin-top:3%; margin-bottom: 3%; ">
                        <table style="border: 1px solid; border-collapse: collapse; width:100%;">
                            <tr>
                                <th
                                    style="width:40%; text-align:center; padding: 5px; font-weight:600; border: 1px solid;">
                                    VITAL SIGNS
                                </th>

                                <th
                                    style="width:40%; text-align:center; padding: 5px; font-weight:600; border: 1px solid;">
                                    FINDINGS/ INTERVENTION
                                </th>
                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    Blood Pressure
                                </td>

                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view->f_bp): ?>
                                    <?php echo $get_findings_view->f_bp; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>

                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    Pulse Rate
                                </td>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view-> f_pulse): ?>
                                    <?php echo $get_findings_view-> f_pulse; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>

                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    Respiratory Rate
                                </td>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view->f_rr): ?>
                                    <?php echo $get_findings_view->f_rr; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    Nutritional Status
                                </td>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view->f_cr): ?>
                                    <?php echo $get_findings_view->f_cr; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    Physical Examination
                                </td>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view->f_remarks): ?>
                                    <?php echo $get_findings_view->f_remarks; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div style=" text-align:right;">
                        <h style="font-weight:600;"> Attending Physician:
                            <?php if($get_findings_view->f_nameofphysician): ?>
                            <?php echo "Dr. ".$get_findings_view->f_nameofphysician; ?>
                            <?php else: ?>
                            <p>N/A</p>
                            <?php endif; ?>
                        </h>
                    </div>
                    <div style="font-size:15px; margin-top:4%; ">
                        <table style="border: 1px solid; border-collapse: collapse; width:100%;">
                            <tr>
                                <th
                                    style="width:40%; text-align:center; padding: 5px; font-weight:600; border: 1px solid;">
                                    MEDICAL HISTORY
                                </th>

                                <th
                                    style="width:40%; text-align:center; padding: 5px; font-weight:600; border: 1px solid;">
                                    INDICATION
                                </th>
                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    Allergy
                                </td>

                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view->f_allergy): ?>
                                    <?php echo $get_findings_view->f_allergy; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>

                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    Asthma
                                </td>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view-> f_asthma): ?>
                                    <?php echo $get_findings_view-> f_asthma; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>

                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    Anemia
                                </td>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view->f_anemia): ?>
                                    <?php echo $get_findings_view->f_anemia; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    Bleeding Problem
                                </td>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view->f_bleeding): ?>
                                    <?php echo $get_findings_view->f_bleeding; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    Heart Ailment
                                </td>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view->f_hailment): ?>
                                    <?php echo $get_findings_view->f_hailment; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    Diabetes
                                </td>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view->f_diabetes): ?>
                                    <?php echo $get_findings_view->f_diabetes; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    Epilepsy
                                </td>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view->f_epilepsy): ?>
                                    <?php echo $get_findings_view->f_epilepsy; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    Kidney Disease
                                </td>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view->f_kidney): ?>
                                    <?php echo $get_findings_view->f_kidney; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    Convulsion
                                </td>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view->f_convulsion): ?>
                                    <?php echo $get_findings_view->f_convulsion; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    Fainting
                                </td>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view->f_fainting): ?>
                                    <?php echo $get_findings_view->f_fainting; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div style="font-size:15px; margin-top:8%; ">
                        <table style="border: 1px solid; border-collapse: collapse; width:100%;">
                            <tr>
                                <th
                                    style="width:40%; text-align:center; padding: 5px; font-weight:600; border: 1px solid;">

                                </th>

                                <th
                                    style="width:40%; text-align:center; padding: 5px; font-weight:600; border: 1px solid;">
                                    ORAL HEALTH CONDITION
                                </th>
                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    Gingivitis
                                </td>

                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view->f_ging): ?>
                                    <?php echo $get_findings_view->f_ging; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>

                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    Periodontal Disease
                                </td>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view-> f_period): ?>
                                    <?php echo $get_findings_view-> f_period; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>

                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    Malocclusion
                                </td>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view->f_malo): ?>
                                    <?php echo $get_findings_view->f_malo; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    Supernumerary teeth
                                </td>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view->f_super): ?>
                                    <?php echo $get_findings_view->f_super; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    Decubital ulcer
                                </td>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view->f_ulcer): ?>
                                    <?php echo $get_findings_view->f_ulcer; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    Calculus
                                </td>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view->f_calcu): ?>
                                    <?php echo $get_findings_view->f_calcu; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    Cleft lip/palate
                                </td>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view->f_cleft): ?>
                                    <?php echo $get_findings_view->f_cleft; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    Root fragment
                                </td>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view->f_root): ?>
                                    <?php echo $get_findings_view->f_root; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    Fluorosis
                                </td>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view->f_flu): ?>
                                    <?php echo $get_findings_view->f_flu; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    Others, specify
                                </td>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view->f_specify): ?>
                                    <?php echo $get_findings_view->f_specify; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div style="font-size:15px; margin-top:6%; margin-bottom: 3%; ">
                        <table style="border: 1px solid; border-collapse: collapse; width:100%;">
                            <tr>
                                <th
                                    style="width:40%; text-align:center; padding: 5px; font-weight:600; border: 1px solid;">
                                    PERMANENT TEETH D.M.F.T.
                                </th>

                                <th
                                    style="width:40%; text-align:center; padding: 5px; font-weight:600; border: 1px solid;">
                                    DMFT INDEX
                                </th>
                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    No. T/Decayed
                                </td>

                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view->f_decay): ?>
                                    <?php echo $get_findings_view->f_decay; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>

                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    No. T/Missing
                                </td>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view-> f_missing): ?>
                                    <?php echo $get_findings_view-> f_missing; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>

                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    No. T/Filled
                                </td>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view->f_filled): ?>
                                    <?php echo $get_findings_view->f_filled; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    Total D.M.F.T.
                                </td>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view->f_total): ?>
                                    <?php echo $get_findings_view->f_total; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    Total Sound Teeth
                                </td>
                                <td style="width:40%; text-align:center; padding: 5px; border: 1px solid;">
                                    <?php if($get_findings_view->f_sound): ?>
                                    <?php echo $get_findings_view->f_sound; ?>
                                    <?php else: ?>
                                    <p>N/A</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div style=" text-align:right;">
                        <h style="font-weight:600; text-align:right;"> Attending Physician:
                            <?php if($get_findings_view->f_oralphys): ?>
                            <?php echo "Dr. ".$get_findings_view->f_oralphys; ?>
                            <?php else: ?>
                            <p>N/A</p>
                            <?php endif; ?>
                        </h>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- End of Row -->




    <!-- Print Area -->
    <script>
    $(document).ready(function() {
        $('.btn_print').on('click', function(e) {
            $('#printablearea').printThis();
        })
    });
    </script>
</div>