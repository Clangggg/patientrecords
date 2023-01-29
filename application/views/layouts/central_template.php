<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>img/valnat.png" />

    <title><?php echo $title ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/jquery-3.3.1.min.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/loader.css">

    <?php require 'application/views/users/script.php'?>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>


    <script src="<?php echo base_url(); ?>assets/js/scripts/jquery.canvasjs.min.js"></script>


    <style>
    .sidenav {
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #111;


    }


    .main {
        margin-left: 225px;
        /* Same as the width of the sidenav */

    }

    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav a {
            font-size: 18px;
        }
    }
    </style>



</head>


<body id="page-top">


    <?php if($this->session->userdata('logged_in')): ?>


    <?php if($this->session->flashdata('login_success')): ?>
    <?php echo "<div style='#4e73df' class='alert-success text-center'>".$this->session->flashdata('login_success')."</div>"  ?>
    <?php endif; ?>
    </div>



    <?php if($this->session->flashdata('sec_pass')): ?>
    <?php echo "<div style='#4e73df' Sclass='alert-success text-center'>".$this->session->flashdata('sec_pass')."</div>"  ?>
    <?php endif; ?>
    </div>


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class=" navbar-nav bg-primary bg-opacity-20 sidenav sidebar sidebar-dark accordion " id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-0">
                    <i class="fas fa-folder-open"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Student Records</div>
            </a>


            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link">
                    <i class="fas fa-user"></i>
                    <span>Admin</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - for Patient Records Table (link for specific page)-->
            <li class="nav-item active">
                <!-- Nav Item - Tables -->
                <a class="nav-link collapsed " href="<?php echo base_url(); ?>admissioncontrol/admitdatatable">
                    <i class="fas fa-fw fa-table "></i>
                    <span>Student Records Table</span></a>
            </li>

            <!-- Nav Item - for Insert Multiple Record (link for specific page) -->
            <li class="nav-item active">
                <!-- Nav Item - Tables -->
                <a class="nav-link collapsed " href="<?php echo base_url(); ?>multiplerecordcontrol/multiplerecordview">
                    <i class="fas fa-fw fa-list-alt "></i>
                    <span>Add Records</span></a>
            </li>

            <!-- Nav Item - for Add Users (link for specific page)-->
            <li class="nav-item active">
                <!-- Nav Item - Tables -->
                <a class="nav-link collapsed " href="<?php echo base_url(); ?>addusercontrol/adduserview">
                    <i class="fas fa-fw fa-user-plus "></i>
                    <span>Add Users</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">

            <!-- <li class="nav-item active">
         Nav Item - Tables -->
            <!-- <a class="nav-link collapsed " href="<?php echo base_url(); ?>logscontrol/logsview">
          <i class="fas fa-fw  fa-users "></i>
          <span>User Logs</span></a>
      </li> -->

            <!-- Divider -->
            <div>
              
            <div class="datetime" style="font-size: 8px;
  padding: 8px;
  width: 200px;
  font-weight: 700; margin-left:4%; ">
          <div class="date" style="margin-top: 12px;
  font-size: 1.9em; color: white;"></div>
          <div class="time" style="font-size: 2em;
  color: white; margin-left:25%;"></div>
          
          </div>
<script>

const timeElement = document.querySelector(".time");
const dateElement = document.querySelector(".date");

/**
 * @param {Date} date
 */
function formatTime(date) {
  const hours12 = date.getHours() % 12 || 12;
  const minutes = date.getMinutes();
  const isAm = date.getHours() < 12;

  return `${hours12.toString().padStart(2, "0")}:${minutes
    .toString()
    .padStart(2, "0")} ${isAm ? "AM" : "PM"}`;
}

/**
 * @param {Date} date
 */
function formatDate(date) {
  const DAYS = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday"
  ];
  const MONTHS = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
  ];

  return `${DAYS[date.getDay()]}, ${
    MONTHS[date.getMonth()]
  } ${date.getDate()} ${date.getFullYear()}`;
}

setInterval(() => {
  const now = new Date();

  timeElement.textContent = formatTime(now);
  dateElement.textContent = formatDate(now);
}, 200);
</script>



            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="main d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php $this->load->view($topbar); ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <?php $this->load->view($main_view); ?>
                </div>

            </div>
            <!-- End of Main Content -->
            <br><br><br><br><br><br><br><br><br><br>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; ValNat SHIMS 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary mb1 bg-blue" href="<?php echo base_url(); ?>usercontrol/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <?php endif; ?>



    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url(); ?>assets/js/demo/datatables-demo.js"></script>


    <!-- jQuery library -->
    <script src="<?php echo base_url(); ?>assets/printarea/jquery-print-plugin-master/lib/jquery.printThis.js"></script>



</body>

</html>