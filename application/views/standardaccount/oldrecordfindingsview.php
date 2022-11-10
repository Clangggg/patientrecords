<div class="align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 text-center">Student Health Examination</h1>
</div>

<div class="row">
    <!-- Begin of Row -->

    <div class="col-xl-8 col-md-8 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Student NAME</div>
                    </div>
                    <div class="col mr-2">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            &nbsp&nbsp&nbsp&nbsp&nbsp
                            <?php echo $get_patient_data->of_lname ?>,&nbsp&nbsp
                            <?php echo $get_patient_data->of_fname ?>&nbsp&nbsp
                            <?php echo $get_patient_data->of_mname ?>

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
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Examination Date</div>
                    </div>
                    <div class="col mr-2">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <?php echo $get_patient_data->of_date ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- End of Row -->


<div class="row">
    <!-- Begin Row -->



    <!-- Findings Box -->
    <div id="findings" class="col-sm-5 ">


        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $get_patient_data->of_historypresentillness; ?>
                </h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">




                <div class="row">
                    <!-- Begin Row -->

                    <div class="col-sm-4">
                        <p style="font-size:15px; font-weight:600; margin-bottom:27px;"> Vital Signs </p>
                        <div style="margin-bottom:17px;">
                            <div class="row no-gutters">

                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Blood Pressure
                                </div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_patient_data->of_bp): ?>
                                <?php echo $get_patient_data->of_bp; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>


                    </div>
                    <div class="col-sm-4">


                        <div style="margin-bottom:17px; ">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1 mt-5">
                                    Respiratory
                                    Rate</div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_patient_data->of_rr): ?>
                                <?php echo $get_patient_data->of_rr; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>


                    </div>
                    <div class="col-sm-4">


                        <div type="margin-bottom:17px;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1 mt-5">Pulse Rate
                                </div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_patient_data->of_pulse): ?>
                                <?php echo $get_patient_data->of_pulse; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>

                </div><!-- End Row -->

                <div class="row">
                    <!-- Begin Row -->
                    <div class="col-sm-4">

                        <div style="margin-bottom:17px;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Temperature
                                </div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_patient_data->of_temp): ?>
                                <?php echo $get_patient_data->of_temp; ?> ˚C
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>


                    </div>
                    <div class="col-sm-4">
                        <div style="margin-bottom:17px;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Height
                                </div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_patient_data->of_pr): ?>
                                <?php echo $get_patient_data->of_pr; ?> cm
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div style="margin-bottom:17px;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Weight</div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_patient_data->of_wt): ?>
                                <?php echo $get_patient_data->of_wt; ?> kg
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div><!-- End Row -->
                <div class="row">

                    <div class="col-sm-5">
                        <div style="margin-bottom:17px;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Nutritional
                                    Status</div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_patient_data->of_cr): ?>
                                <?php echo $get_patient_data->of_cr; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <p style="font-size:15px; font-weight:600; margin-bottom:27px;"> Physical Examination (Refer below)</p>
                <div class="row">
                    <!-- Begin Row -->
                    <div class="col-sm-5">

                        <div style="margin-bottom:17px;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Visual Acuity
                                </div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_patient_data->of_physicalexam): ?>
                                <?php echo $get_patient_data->of_physicalexam; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>


                    </div>
                    <div class="col-sm-5">
                        <div style="margin-bottom:17px;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Hearing (Tuning
                                    fork)
                                </div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_patient_data->of_diagnosis): ?>
                                <?php echo $get_patient_data->of_diagnosis; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div><!-- End Row -->
                <div class="row">
                    <!-- Begin Row -->
                    <div class="col-sm-5">

                        <div style="margin-bottom:17px;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Skin/Scalp
                                </div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_patient_data->of_medication): ?>
                                <?php echo $get_patient_data->of_medication; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>


                    </div>
                    <div class="col-sm-5">
                        <div style="margin-bottom:17px;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Eyes/Ears/Nose
                                </div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_patient_data->of_complaint): ?>
                                <?php echo $get_patient_data->of_complaint; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div><!-- End Row -->
                <div class="row">
                    <!-- Begin Row -->
                    <div class="col-sm-5">

                        <div style="margin-bottom:17px;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                    Mouth/Neck/Throat
                                </div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_patient_data->of_mouth): ?>
                                <?php echo $get_patient_data->of_mouth; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>


                    </div>
                    <div class="col-sm-5">
                        <div style="margin-bottom:17px;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Lungs/Heart
                                </div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_patient_data->of_lungs): ?>
                                <?php echo $get_patient_data->of_lungs; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div><!-- End Row -->
                <div class="row">
                    <!-- Begin Row -->
                    <div class="col-sm-5">

                        <div style="margin-bottom:17px;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                    Abdomen/Genitalis
                                </div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_patient_data->of_abdo): ?>
                                <?php echo $get_patient_data->of_abdo; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>


                    </div>
                    <div class="col-sm-5">
                        <div style="margin-bottom:17px;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                    Spine/Extremities
                                </div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_patient_data->of_spine): ?>
                                <?php echo $get_patient_data->of_spine; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div><!-- End Row -->
                <div class="row">
                    <!-- Begin Row -->
                    <div class="col-sm-10">

                        <div style="margin-bottom:17px;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                    Remarks/Intervention
                                </div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_patient_data->of_remarks): ?>
                                <?php echo $get_patient_data->of_remarks; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10">
                        <div style="margin-bottom:17px;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Others, specify
                                </div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_patient_data->of_others): ?>
                                <?php echo $get_patient_data->of_others; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div><!-- End Row -->

                <hr>

                <p style="font-size:18px; font-weight:600; margin-bottom:27px; color:blue;"> Reference </p>
                <div class="row">
                    <div class="col-sm-6">
                        <p style="font-size:15px; font-weight:600;margin-bottom:27px;"> Visual Acuity
                            <br>&nbsp&nbsp&nbsp&nbspa. Normal Right <br> &nbsp&nbsp&nbsp&nbspb. Normal Left
                            <br>&nbsp&nbsp&nbsp&nbspc. AbNormal Right <br> &nbsp&nbsp&nbsp&nbspd. AbNormal Left
                        </p>
                        <p style="font-size:15px; font-weight:600; margin-bottom:27px;"> Skin/Scalp
                            <br>&nbsp&nbsp&nbsp&nbspa. Normal <br>&nbsp&nbsp&nbsp&nbspb. Pediculosis
                            <br>&nbsp&nbsp&nbsp&nbspc. Tinea Flava<br>&nbsp&nbsp&nbsp&nbspd.
                            Ringworm<br>&nbsp&nbsp&nbsp&nbspe. Eczema<br>
                            &nbsp&nbsp&nbsp&nbspf. Impetigo/boil <br>&nbsp&nbsp&nbsp&nbspg.
                            Hematoma<br>&nbsp&nbsp&nbsp&nbsph. Bruises<br>&nbsp&nbsp&nbsp&nbspi. Cuts/lacerations<br>
                            &nbsp&nbsp&nbsp&nbspj. Allergy<br>&nbsp&nbsp&nbsp&nbspk. Others, specify
                        </p>
                        <p style="font-size:15px; font-weight:600; margin-bottom:27px;">
                            Mouth/Neck/Throat<br>&nbsp&nbsp&nbsp&nbspa. Normal mouth<br>&nbsp&nbsp&nbsp&nbspb. Normal
                            throat<br>&nbsp&nbsp&nbsp&nbspc. Enlarged tonsils with/w/o
                            exudates<br>&nbsp&nbsp&nbsp&nbspd. Lip lesion<br>&nbsp&nbsp&nbsp&nbspe. Enlarged tonsils
                            with/w/o exudates<br>&nbsp&nbsp&nbsp&nbspf. Inflamed pharynx with/w/o
                            exudates<br>&nbsp&nbsp&nbsp&nbspg. Enlarged thyroid gland <br>&nbsp&nbsp&nbsp&nbsph. Speech
                            defect<br>&nbsp&nbsp&nbsp&nbspi. Dental problem<br>&nbsp&nbsp&nbsp&nbspj. Others, specify
                        </p>
                        <p style="font-size:15px; font-weight:600; margin-bottom:27px;">
                            Abdomen/Genitalia<br>&nbsp&nbsp&nbsp&nbspa. Normal abdomen<br>&nbsp&nbsp&nbsp&nbspb. Normal
                            genitalia<br>&nbsp&nbsp&nbsp&nbspc. Mass<br>&nbsp&nbsp&nbsp&nbspd.
                            Hemorrhoids<br>&nbsp&nbsp&nbsp&nbspe. Tenderness<br>&nbsp&nbsp&nbsp&nbspf. Genital
                            discharge<br>&nbsp&nbsp&nbsp&nbspg. Hernia<br>&nbsp&nbsp&nbsp&nbsph. Others, specify</p>
                    </div>
                    <div class="col-sm-6">
                        <p style="font-size:15px; font-weight:600;margin-bottom:27px;"> Hearing (Tuning fork)
                            <br>&nbsp&nbsp&nbsp&nbspa. Normal Right <br> &nbsp&nbsp&nbsp&nbspb. Normal Left
                            <br>&nbsp&nbsp&nbsp&nbspc. AbNormal Right <br> &nbsp&nbsp&nbsp&nbspd. AbNormal Left
                        </p>
                        <p style="font-size:15px; font-weight:600; margin-bottom:50px;">
                            Eyes/Ears/Nose<br>&nbsp&nbsp&nbsp&nbspa. Normal eyes<br>&nbsp&nbsp&nbsp&nbspb. Normal
                            ears<br>&nbsp&nbsp&nbsp&nbspc. Normal nose
                            <br>&nbsp&nbsp&nbsp&nbspd. Squinting<br>&nbsp&nbsp&nbsp&nbspe. Pale
                            conjunctivae<br>&nbsp&nbsp&nbsp&nbspf. Ear discharge<br>&nbsp&nbsp&nbsp&nbspg. Impacted
                            cerumen
                            <br>&nbsp&nbsp&nbsp&nbsph. Septal deviation<br>&nbsp&nbsp&nbsp&nbspi. Nasal
                            discharge<br>&nbsp&nbsp&nbsp&nbspj. Others, specify
                        </p>
                        <p style="font-size:15px; font-weight:600; margin-bottom:50px;">
                            Spine/Extremities<br>&nbsp&nbsp&nbsp&nbspa. Normal spine<br>&nbsp&nbsp&nbsp&nbspb. N upper
                            extremities<br>&nbsp&nbsp&nbsp&nbspc. N lower extremities
                            <br>&nbsp&nbsp&nbsp&nbspd. Scoliosis<br>&nbsp&nbsp&nbsp&nbspe.
                            Lordosis<br>&nbsp&nbsp&nbsp&nbspf. Kyphosis<br>&nbsp&nbsp&nbsp&nbspg. Bowlegs/knock knees
                            <br>&nbsp&nbsp&nbsp&nbsph. Flat foot<br>&nbsp&nbsp&nbsp&nbspi. Club
                            foot<br>&nbsp&nbsp&nbsp&nbspj. Others, specify
                        </p>
                        <p style="font-size:15px; font-weight:600;"> Lungs/Heart<br>&nbsp&nbsp&nbsp&nbspa. Normal
                            lungs<br>&nbsp&nbsp&nbsp&nbspb. Normal heart<br>&nbsp&nbsp&nbsp&nbspc. Rales
                            <br>&nbsp&nbsp&nbsp&nbspd. Wheeze<br>&nbsp&nbsp&nbsp&nbspe. Murmur<br>&nbsp&nbsp&nbsp&nbspf.
                            Deformed chest<br>&nbsp&nbsp&nbsp&nbspg. Distant heart sounds<br>&nbsp&nbsp&nbsp&nbsph.
                            Irregular heart rate
                            <br>&nbsp&nbsp&nbsp&nbspi. Others, specify
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ///// -->
    <div id="findings" class="col-sm-7 ">

        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"> Oral Health Examination </h6>

            </div>
            <!-- Card Body -->
            <div class="card-body">
            <p style="font-size:15px; font-weight:600; margin-bottom:27px;"> Medical History </p>
                <div style="margin-left:20%;" class="row">
                    <div class="col-sm-3">
                        <div style="margin-bottom:17px;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Allergy
                                </div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_patient_data->of_allergy): ?>
                                <?php echo $get_patient_data->of_allergy; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div style="margin-bottom:17px; margin-left:64%;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Asthma</div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_patient_data->of_asthma): ?>
                                <?php echo $get_patient_data->of_asthma; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-left:20%;" class="row">
                    <div class="col-sm-3">
                        <div style="margin-bottom:17px;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Anemia
                                </div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_patient_data->of_anemia): ?>
                                <?php echo $get_patient_data->of_anemia; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-6">
                        <div style="margin-bottom:17px; margin-left:40%;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Bleeding Problem
                                </div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_patient_data->of_bleeding): ?>
                                <?php echo $get_patient_data->of_bleeding; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-left:20%;"  class="row">
                    <div class="col-sm-3">
                        <div style="margin-bottom:17px;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Heart Ailment
                                </div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_patient_data->of_hailment): ?>
                                <?php echo $get_patient_data->of_hailment; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div style="margin-bottom:17px;  margin-left:50%;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Diabetes
                                </div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_patient_data->of_diabetes): ?>
                                <?php echo $get_patient_data->of_diabetes; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-left:20%;" class="row">
                    <div class="col-sm-3">
                        <div style="margin-bottom:17px;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Epilepsy
                                </div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_patient_data->of_epilepsy): ?>
                                <?php echo $get_patient_data->of_epilepsy; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div style="margin-bottom:17px;  margin-left:41%;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Kidney disease
                                </div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_patient_data->of_kidney): ?>
                                <?php echo $get_patient_data->of_kidney; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-left:20%;" class="row">
                    <div class="col-sm-3">
                        <div style="margin-bottom:17px;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Convulsion
                                </div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_patient_data->of_convulsion): ?>
                                <?php echo $get_patient_data->of_convulsion; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div style="margin-bottom:17px;  margin-left:65%;">
                            <div class="row no-gutters">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Fainting
                                </div>
                            </div>
                            <div class="h5 mb-1 font-weight-bold text-gray-800">
                                <?php if($get_patient_data->of_fainting): ?>
                                <?php echo $get_patient_data->of_fainting; ?>
                                <?php else: ?>
                                <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

        </div>

    </div>





</div><!-- End of Row -->