
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>img/valnat.png">

  <!-- <img width="52.7%" height="52.7%" style="margin-left:25%; margin-top:none;"
                    src="<?php echo base_url(); ?>img/three.png"> -->

  <title><?php echo $title ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-image:linear-gradient(#0622759d,#1c3c9c83), url('https://valenzuelanhs.weebly.com/uploads/1/0/8/5/108507217/19437492-10209073023371938-6451739843484828435-n_orig.jpg'); background-size: cover; height: 90vh;">
  
  <div id="standard" class="container">

    <div style="margin-left:15%; margin-right:15%;" class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-3 d-none d-lg-block"></div>
          <div class="col-lg-10">
            <div style="margin-left: 20%;" class="p-5">
              <div style="width: 200%;" class="text-left">
                <img width="100" height="100" style="margin-left: 21%;" src="<?php echo base_url(); ?>img/valnat.png"><br><br>
                 <h6 style="margin-left: 8%;"><b>VALENZUELA NATIONAL HIGH SCHOOL</b></h6>
                 <h1 style="margin-right: 10%;" class="h5 text-gray-900 mb-8">Student Health Information Management System</h1>
              </div>     
              <hr>
              <div class="text-center">
                 <h5 class="h5 text-gray-900 mb-1">Teacher Account</h1>
              </div> 
                
            <?php $this->load->view($form); ?>

              <hr>
           
              <div class="text-center">
                <a style="color: black; text-decoration: none;" class="small" href="<?php echo base_url(); ?>">Login to Administrator account</a>
              </div>
            
            </div>
          </div>
           <div class="col-lg-3 d-none d-lg-block"></div>
        </div>
      </div>
    </div>

  </div>



</body>

</html>
