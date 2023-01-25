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
                <div class="card-body">

                    <div class="table">

                        <table class="table table-bordered" cellspacing="0">

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

                <h6 class="mt-5 ml-5 mb-3 font-weight-bold">CONDITION AND TREATMENT NEEDS</h6>
                <p style="font-size:13px; color:black; font-weight:700; margin-left:8%; margin-bottom:none;">
                    (Check the references below) </p>
                <div class="frame-12-NT9"
                    style="align-items: center; display: flex;  height: 3.9rem; font-size: 1rem; width: 100%; ">
                    <p style="font-size:11px; color:blue; font-weight:700; margin-left:25%; margin-bottom:none;">
                        CONDITION </p>
                    <div class="frame-1-hVR" style="align-items: center; border: solid 0.1rem #000000; box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem;  font-weight: 600; height: 55%; justify-content: center;  width: 2.3rem; 
                         margin-left:3%" id="2:47">
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
                        width: 2.2rem;" id="2:63">
                        <?php if($get_findings_view->f_conditionfi): ?>
                        <?php echo $get_findings_view->f_conditionfi; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                    <div class="frame-10-ejR" style="align-items: center;  border: solid 0.1rem #000000;  box-sizing: border-box; color: #000000;
                         display: flex; font-size: 0.8rem; font-weight: 600; height: 55%; justify-content: center;
                         width: 2.1rem;" id="2:65">
                        <?php if($get_findings_view->f_conditionfj): ?>
                        <?php echo $get_findings_view->f_conditionfj; ?>
                        <?php else: ?>
                        <p>&#x2713; </p>
                        <?php endif; ?>
                    </div>
                </div>

                <img width="50%" height="50%" style="margin-left:24.1%; margin-top:none;"
                    src="<?php echo base_url(); ?>img/one.png">

                <div class="frame-12-NT9"
                    style="align-items: center; display: flex;  height: 3.9rem; font-size: 1rem; width: 100%; ">
                    <p style="font-size:11px; color:blue; font-weight:700; margin-left:14.7%; margin-bottom:none;">
                        CONDITION </p>
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
                        width: 2.2rem;" id="2:63">
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
                    <p style="font-size:11px; color:blue; font-weight:700; margin-left:14.4%; margin-bottom:none;">
                        TREATMENT<br>NEEDS</p>
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


                <img width="58%" height="58%" style="margin-left:21.4%; margin-top:none;"
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
                         width: 2.3rem;" id="2:65">
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
                         width: 2.3rem;" id="2:65">
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
                    <p style="font-size:11px; color:blue; font-weight:700; margin-left:25.1%; margin-bottom:none;">
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
                                    <td class="text-center">DATE</td>
                                    <?php if($get_findings_view->f_oraldate): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_oraldate; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                    <td class="text-center">---</td>
                                </tr>
                                <tr>
                                    <td class="text-center">Examination</td>
                                    <?php if($get_findings_view->f_mouthexam): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_mouthexam; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                    <?php if($get_findings_view->f_rmouthexam): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_rmouthexam; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">Sealant (G.I.)</td>
                                    <?php if($get_findings_view->f_seal): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_seal; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                    <?php if($get_findings_view->f_rseal): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_rseal; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">Gum Treatment</td>
                                    <?php if($get_findings_view->f_gum): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_gum; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                    <?php if($get_findings_view->f_rgum): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_rgum; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">Permanent filling</td>
                                    <?php if($get_findings_view->f_perm): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_perm; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                    <?php if($get_findings_view->f_rperm): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_rperm; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">ART</td>
                                    <?php if($get_findings_view->f_art): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_art; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                    <?php if($get_findings_view->f_rart): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_rart; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">Extraction</td>
                                    <?php if($get_findings_view->f_extra): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_extra; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                    <?php if($get_findings_view->f_rextra): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_rextra; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">Oral prohylaxis</td>
                                    <?php if($get_findings_view->f_prohy): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_prohy; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                    <?php if($get_findings_view->f_rprohy): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_rprohy; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">Referral</td>
                                    <?php if($get_findings_view->f_refer): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_refer; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                    <?php if($get_findings_view->f_rrefer): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_rrefer; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">Other oral treatment</td>
                                    <?php if($get_findings_view->f_otheroral): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_otheroral; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                    <?php if($get_findings_view->f_rotheroral): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_rotheroral; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">Examined by</td>
                                    <?php if($get_findings_view->f_oralphys): ?>
                                    <?php echo "<td class='text-center'>" .$get_findings_view->f_oralphys; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
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
                                    <?php if($get_findings_view->f_ging): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_ging; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">Periodontal Disease</td>
                                    <?php if($get_findings_view->f_period): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_period; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">Malocclussion</td>
                                    <?php if($get_findings_view->f_malo): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_malo; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">Supernumerary teeth</td>
                                    <?php if($get_findings_view->f_super): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_super; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">Decubital ulcer</td>
                                    <?php if($get_findings_view->f_ulcer): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_ulcer; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">Calculus</td>
                                    <?php if($get_findings_view->f_calcu): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_calcu; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                <tr>
                                    <td class="text-center">Cleft lip/palate</td>
                                    <?php if($get_findings_view->f_cleft): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_cleft; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">Root fragment</td>
                                    <?php if($get_findings_view->f_root): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_root; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">Fluorosis</td>
                                    <?php if($get_findings_view->f_flu): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_flu; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">Others, specify</td>
                                    <?php if($get_findings_view->f_specify): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_specify; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
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
                                    <?php if($get_findings_view->f_decay): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_decay; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">No. T/Missing</td>
                                    <?php if($get_findings_view->f_missing): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_missing; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">No. T/Filled</td>
                                    <?php if($get_findings_view->f_filled): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_filled; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">Total D.M.F.T</td>
                                    <?php if($get_findings_view->f_total): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_total; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">Total Sound teeth</td>
                                    <?php if($get_findings_view->f_sound): ?>
                                    <?php echo "<td class='text-center'>".$get_findings_view->f_sound; ?>
                                    <?php else:  ?>
                                    <?php endif; ?></td>
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
    <!-- End of Row -->




    <!-- Print Area -->
    <script>
    $(document).ready(function() {
        $('.btn_print').on('click', function(e) {
            $('#printablearea').printThis();
        })
    });
    </script>