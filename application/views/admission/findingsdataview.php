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
                            <?php echo $get_findings_view->pr_mname; ?>


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
        <h6 class="m-0 font-weight-bold text-primary">Physical Examination<h6>
            <?php echo "<a style='margin-left: 390px; 
                    data-toggle='tooltip' title='Back To Patient Record' text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/patientdataview/". $get_findings_view->pr_id ."#findings'>" ?>
            <i class="fa 
                                    fa-arrow-left"></i></a>
            <?php echo "<a 
                    data-toggle='tooltip' title='Edit' style='margin-left: 30px; text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/edit_findings/". $get_findings_view->findings_id ."#findings'>" ?>
            <i class="fa 
                                    fa-edit"></i></a>
            <?php echo "<a data-toggle='tooltip' title='Add Record to Teacher Account' style='margin-left: 30px; text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/addfindingsdataview/". $get_findings_view->findings_id ."#findings'>" ?>
            <i class="fa 
                                    fa-user-md"></i></a>
            <a data-toggle='tooltip' title='Print' style='margin-left: 20px; margin-right: 21px;'
                class="btn_print text-secondary"><i class="fa 
                                    fa-print"></i></a>
        </div>
        <!-- Card Body -->
        <div class="card-body">

            <div id="printablearea">
                <!-- Printable Area -->


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



                    <div class="row ">
                        <!-- ROW 1 -->
                        <div class="col-sm-2"></div>
                    </div>
                    <div style="margin-left: 5px;" class="row">
                        <div style="margin-bottom:17px; margin-left:18px;margin-top:20px;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">LRN</div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_findings_view->pr_id): ?>
                                <?php echo $get_findings_view->pr_id; ?>
                                <?php else: ?>
                                <p>N/A</p> ?>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="ml-auto" style="margin-bottom:17px; margin-right: 70px; margin-top:20px;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Date of
                                    Examination</div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php echo $get_findings_view->f_date; ?></div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div style="margin-bottom:17px; margin-left:20px;">
                                <div class="row no-gutters">
                                    <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Student
                                        Name
                                    </div>
                                </div>
                                <div class="h5 mb-1 font-weight-bold text-gray-800">
                                    <?php if($get_findings_view->pr_fname): ?>
                                    <?php echo $get_findings_view->pr_fname; ?>
                                    <?php else: ?>
                                    <p>N/A</p> ?>
                                    <?php endif; ?>
                                    <?php if($get_findings_view->pr_mname): ?>
                                    <?php echo $get_findings_view->pr_mname;  ?>
                                    <?php else: ?>
                                    <p>N/A</p> ?>
                                    <?php endif; ?>
                                    <?php if($get_findings_view->pr_lname): ?>
                                    <?php echo $get_findings_view->pr_lname; ?>
                                    <?php else: ?>
                                    <p>N/A</p> ?>
                                    <?php endif; ?>

                                </div>
                            </div>




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
                                                <div
                                                    class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
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
                                                <div
                                                    class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
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
                                                <div
                                                    class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
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
                                                <div
                                                    class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
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
                                                <div
                                                    class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
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
                                                <div
                                                    class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
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
                                                <div
                                                    class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
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
                                                <div
                                                    class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
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
                                                <div
                                                    class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
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
                                                <div
                                                    class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
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
                                                <div
                                                    class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
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
                                                <div
                                                    class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
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
                                                <div
                                                    class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
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
                                                <div
                                                    class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
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
                        <div class="card-body">

                            <div class="table">

                                <table class="table table-bordered"  cellspacing="0">

                                    <thead>
                                        <tr>
                                            <th class="text-center">Health Conditions</th>
                                            <th class="text-center">Indication</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td class="text-center">Allergy</td>

                                            <?php if($get_findings_view->f_allergy): ?>
                                            <?php echo "<td class='text-center'>".$get_findings_view->f_allergy; ?>
                                            <?php else:  ?>
                                                
                                            <?php endif; ?></td>

                                        </tr>
                                        <tr>
                                            <td class="text-center">Asthma</td>
                                            <?php if($get_findings_view->f_asthma): ?>
                                            <?php echo "<td class='text-center'>".$get_findings_view->f_asthma; ?>
                                            <?php else: ?>
                                           
                                            <?php endif; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Anemia</td>
                                            <?php if($get_findings_view->f_anemia): ?>
                                            <?php echo "<td class='text-center'>".$get_findings_view->f_anemia; ?>
                                            <?php else: ?>
                                          
                                            <?php endif; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Bleeding Problem</td>
                                            <?php if($get_findings_view->f_bleeding): ?>
                                            <?php echo "<td class='text-center'>".$get_findings_view->f_bleeding; ?>
                                            <?php else: ?>
                                            
                                            <?php endif; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Heart Ailment</td>

                                            <?php if($get_findings_view->f_hailment): ?>
                                            <?php echo "<td class='text-center'>".$get_findings_view->f_hailment; ?>
                                            <?php else: ?>
                                           
                                            <?php endif; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Diabetes</td>

                                            <?php if($get_findings_view->f_diabetes): ?>
                                            <?php echo "<td class='text-center'>".$get_findings_view->f_diabetes; ?>
                                            <?php else: ?>
                                        
                                            <?php endif; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Epilepsy</td>
                                            <?php if($get_findings_view->f_epilepsy): ?>
                                            <?php echo  "<td class='text-center'>".$get_findings_view->f_epilepsy; ?>
                                            <?php else: ?>
                                            
                                            <?php endif; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Kidney Disease</td>

                                            <?php if($get_findings_view->f_kidney): ?>
                                            <?php echo "<td class='text-center'>".$get_findings_view->f_kidney; ?>
                                            <?php else: ?>
                                            
                                            <?php endif; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Convulsion</td>

                                            <?php if($get_findings_view->f_convulsion): ?>
                                            <?php echo "<td class='text-center'>".$get_findings_view->f_convulsion; ?>
                                            <?php else: ?>
                                           
                                            <?php endif; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Fainting</td>

                                            <?php if($get_findings_view->f_fainting): ?>
                                            <?php echo "<td class='text-center'>".$get_findings_view->f_fainting; ?>
                                            <?php else: ?>
                                         
                                            <?php endif; ?></td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>

                        </div>
                    


                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="ml-3 mb-0 font-weight-bold text-primary">Oral Health Examination</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">

                        <div class="table">

                            <table class="table table-bordered"  cellspacing="0">

                                <thead>
                                    <tr>
                                        <th class="text-center">Dental Procedures</th>
                                        <th class="text-center">Oral Health Condition</th>
                                        <th class="text-center">Condition and Treatment Needs</th>
                                    </tr>
                                </thead>
                                <tbody>


                                </tbody>
                            </table>
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