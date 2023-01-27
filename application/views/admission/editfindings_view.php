<div class="align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 text-center">Student Record</h1>
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
                            <?php echo $get_findings_view->pr_lname ?>,&nbsp&nbsp
                            <?php echo $get_findings_view->pr_fname ?>&nbsp&nbsp
                            <?php echo $get_findings_view->pr_mname ?>&nbsp&nbsp
                            <?php echo $get_findings_view->pr_suffix ?>

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
                            <?php echo "".$get_findings_view->pr_id ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div><!-- End of Row -->



    <!-- Begin Row -->






    <!-- Findings Box -->
    <div id="findings" class="col-xl-12 col-lg-4">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Student Health Examination
                    <?php echo "<a style='margin-left: 750px; text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/findingsview/". $get_findings_view->findings_id ."#findings'>" ?>
                    <i class="fa 
                   fa-arrow-left"></i></a>
                </h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">

                <?php $this->load->view($edit_findings); ?>

            </div>
        </div>





</div><!-- End of Row -->