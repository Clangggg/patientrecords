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

                            <?php echo $get_findings_view->pr_lname; ?>&nbsp&nbsp
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


<div class="row">
    <!-- Begin Row -->

    <!-- First Column -->
    <div class="col-lg-4">

        <!-- Details -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Details
                    <?php echo "<a data-toggle='tooltip' title='Edit' style='margin-left: 225px; text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/patient_edit_option/". $get_findings_view->pr_id ."'>" ?>
                    <i class="fa fa-edit"></i></a>
                </h6>
            </div>
            <div class="card-body">
                <!--Card Body begin tag  -->

                <!-- <?php if($this->session->flashdata('patientrecordoption_updated')): ?>
                <?php echo "<div style='#1cc88a' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><i class='con fa fa-check'></i></h6>".$this->session->flashdata('patientrecordoption_updated') ."</div>" ?>
                <?php endif; ?> -->

                <div style="margin-bottom:17px;">
                    <div class="row no-gutters">
                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Address</div>
                    </div>
                    <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_findings_view->pr_addrs; ?>
                    </div>
                </div>

                <div style="margin-bottom:17px;">
                    <div class="row no-gutters">
                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Age</div>
                    </div>
                    <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_findings_view->pr_age; ?></div>
                </div>

                <div style="margin-bottom:17px;">
                    <div class="row no-gutters">
                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Birthdate</div>
                    </div>
                    <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_findings_view->pr_bdate; ?>
                    </div>
                </div>

                <div style="margin-bottom:17px;">
                    <div class="row no-gutters">
                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Birthplace</div>
                    </div>
                    <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_findings_view->pr_bplace; ?>
                    </div>
                </div>

                <div style="margin-bottom:17px;">
                    <div class="row no-gutters">
                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Vaccination Status
                        </div>
                    </div>
                    <div class="h5 mb-1 font-weight-bold text-gray-800">
                        <?php echo $get_findings_view->pr_vaccinestat; ?></div>
                </div>

                <div style="margin-bottom:17px;">
                    <div class="row no-gutters">
                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Region</div>
                    </div>
                    <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_findings_view->pr_civilstat; ?>
                    </div>
                </div>

                <div style="margin-bottom:17px;">
                    <div class="row no-gutters">
                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Division</div>
                    </div>
                    <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_findings_view->pr_divi; ?></div>
                </div>

                <div style="margin-bottom:17px;">
                    <div class="row no-gutters">
                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Gender</div>
                    </div>
                    <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_findings_view->pr_gen; ?></div>
                </div>

                <div style="margin-bottom:18px;">
                    <div class="row no-gutters">
                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Tel/Mobile No.</div>
                    </div>
                    <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_findings_view->pr_number; ?>
                    </div>
                </div>

                <div style="margin-bottom:18px;">
                    <div class="row no-gutters">
                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Parent/Guardian</div>
                    </div>
                    <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_findings_view->pr_religion; ?>
                    </div>
                </div>

                <div style="margin-bottom:18px;">
                    <div class="row no-gutters">
                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">School</div>
                    </div>
                    <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_findings_view->pr_occup; ?>
                    </div>
                </div>

                <div style="margin-bottom:18px;">
                    <div class="row no-gutters">
                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Date Consulted</div>
                    </div>
                    <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_findings_view->pr_date; ?></div>
                </div>


            </div>
            <!--Card body end tag -->
        </div>

    </div>


    <!-- Findings Box -->
    <div id="findings" class="col-xl-8 col-lg-4">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Physical Examination
                    <?php echo "<a style='margin-left: 300px; 
data-toggle='tooltip' title='Back To Patient Record' text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/patientdataview/". $get_findings_view->pr_id ."#findings'>" ?>
                    <i class="fa 
                   fa-arrow-left"></i></a>
                    <?php echo "<a 
data-toggle='tooltip' title='Edit' style='margin-left: 30px; text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/edit_findings/". $get_findings_view->findings_id ."#findings'>" ?>
                    <i class="fa 
                   fa-edit"></i></a>
                    <?php echo "<a data-toggle='tooltip' title='Add Record to Doctor Account' style='margin-left: 30px; text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/addfindingsdataview/". $get_findings_view->findings_id ."#findings'>" ?>
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

                    <?php if($this->session->flashdata('add_to_doctor_success')): ?>
                    <?php echo "<div style='#1cc88a' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><i class='con fa fa-check'></i></h6>".$this->session->flashdata('add_to_doctor_success') ."</div>" ?>
                    <?php endif; ?>



                    <div class="row ">
                        <!-- ROW 1 -->
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <h5 class="text-center"><b>PHYSICAL EXAMINATION</b></h5>
                            <hr>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>

                    <div style="margin-bottom:17px;">
                        <div class="row no-gutters">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">LRN</div>
                        </div>
                        <div class="h4 mb-1 font-weight-bold text-gray-800">
                            <?php if($get_findings_view->pr_id): ?>
                            <?php echo "".$get_findings_view->pr_id; ?>
                            <?php else: ?>
                            <p>N/A</p> ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div style="margin-bottom:17px;">
                        <div class="row no-gutters">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Student Name</div>
                        </div>
                        <div class="h3 mb-1 font-weight-bold text-gray-800">
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

                    <div style="margin-left: 5px;" class="row">


                        <div style="margin-bottom:17px;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Examination
                                    Details</div>
                            </div>
                            <div class="h4 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_findings_view->f_historypresentillness): ?>
                                <?php echo $get_findings_view->f_historypresentillness; ?>
                                <?php else: ?>
                                <p>N/A</p> ?>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="ml-auto" style="margin-bottom:17px; margin-right: 20px;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Date of
                                    Examination</div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php echo $get_findings_view->f_date; ?></div>
                        </div>

                    </div>

                    <div class="row">
                        <!-- Begin Row -->
                        <div class="col-sm-4">

                            <div style="margin-bottom:17px;">
                                <div class="row no-gutters">
                                    <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Blood
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
                        <div class="col-sm-4 ml-4">


                            <div style="margin-bottom:17px;">
                                <div class="row no-gutters">
                                    <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Respiratory
                                        Rate</div>
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

                        <div class="col-sm-4">

                            <div style="margin-bottom:17px;">
                                <div class="row no-gutters">
                                    <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Pulse Rate
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

                        <div class="col-sm-4 ml-4">


                            <div type="margin-bottom:17px;">
                                <div class="row no-gutters">
                                    <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Nutritional
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
                                    <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Temperature
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

                    <div class="row">
                        <!-- Begin Row -->

                        <div class="col-sm-4">

                            <div style="margin-bottom:17px;">
                                <div class="row no-gutters">
                                    <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Height
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

                        <div class="col-sm-4 ml-4">

                            <div style="margin-bottom:17px;">
                                <div class="row no-gutters">
                                    <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1 ml-1">Weight
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
                                    <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Visual
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

                            <div class="col-sm-5 ml-2" style="margin-bottom:17px;">
                                <div class="row no-gutters">
                                    <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Hearing
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
                                    <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Skin/Scalp
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

                            <div class="col-sm-4 ml-2" style="margin-bottom:17px;">
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
                            <div class="col-sm-5" style="margin-bottom:17px;">
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

                            <div class="col-sm-5 ml-4" style="margin-bottom:17px;">
                                <div class="row no-gutters">
                                    <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Lungs/Heart
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

                            <div class="col-sm-5" style="margin-bottom:17px; ">
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


                            <div class="col-sm-4 ml-4" style="margin-bottom:17px;">
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

                        <div class="col-sm-12" style="margin-bottom:17px; margin-left:1%;">
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

                        <div class="col-sm-12" style="margin-bottom:17px; margin-left:1%;">
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


                        <div class="col-sm-12" style="margin-bottom:17px; margin-right:70px">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Examined by
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


                </div><!-- Card Body End tag -->

            </div>


        </div>


        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="ml-3 mb-0 font-weight-bold text-primary">Medical History</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="col-sm-12">

                </div>
                <div class="table">

                    <table class="table table-bordered" id="dataTable" cellspacing="0">

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
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?></td>

                            </tr>
                            <tr>
                                <td class="text-center">Asthma</td>
                                <?php if($get_findings_view->f_asthma): ?>
                                <?php echo "<td class='text-center'>".$get_findings_view->f_asthma; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?></td>
                            </tr>
                            <tr>
                                <td class="text-center">Anemia</td>
                                <?php if($get_findings_view->f_anemia): ?>
                                <?php echo "<td class='text-center'>".$get_findings_view->f_anemia; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?></td>
                            </tr>
                            <tr>
                                <td class="text-center">Bleeding Problem</td>
                                <?php if($get_findings_view->f_bleeding): ?>
                                <?php echo "<td class='text-center'>".$get_findings_view->f_bleeding; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?></td>
                            </tr>
                            <tr>
                                <td class="text-center">Heart Ailment</td>

                                <?php if($get_findings_view->f_hailment): ?>
                                <?php echo "<td class='text-center'>".$get_findings_view->f_hailment; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?></td>
                            </tr>
                            <tr>
                                <td class="text-center">Diabetes</td>

                                <?php if($get_findings_view->f_diabetes): ?>
                                <?php echo "<td class='text-center'>".$get_findings_view->f_diabetes; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?></td>
                            </tr>
                            <tr>
                                <td class="text-center">Epilepsy</td>
                                <?php if($get_findings_view->f_epilepsy): ?>
                                <?php echo  "<td class='text-center'>".$get_findings_view->f_epilepsy; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?></td>
                            </tr>
                            <tr>
                                <td class="text-center">Kidney Disease</td>

                                <?php if($get_findings_view->f_kidney): ?>
                                <?php echo "<td class='text-center'>".$get_findings_view->f_kidney; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?></td>
                            </tr>
                            <tr>
                                <td class="text-center">Convulsion</td>

                                <?php if($get_findings_view->f_convulsion): ?>
                                <?php echo "<td class='text-center'>".$get_findings_view->f_convulsion; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?></td>
                            </tr>
                            <tr>
                                <td class="text-center">Fainting</td>

                                <?php if($get_findings_view->f_fainting): ?>
                                <?php echo "<td class='text-center'>".$get_findings_view->f_fainting; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?></td>
                            </tr>


                        </tbody>
                    </table>
                </div>

            </div>
        </div>


    </div><!-- End of Row -->




    <!-- Print Area -->
    <script>
    $(document).ready(function() {
        $('.btn_print').on('click', function(e) {
            $('#printablearea').printThis();
        })
    });
    </script>