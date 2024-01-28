<?php
    session_start();
    include '../connection.php';
    if(!isset($_SESSION['role']))
    {
      header("location:../index.php");
    }
    if(isset($_SESSION['role']))
    {
      if($_SESSION['role']=='player')
      {
          header("location:../player/player.php");
      }
      if($_SESSION['role']=='admin')
      {
        header("location:../admin/adindex.php");
      }
    
    }
    $id=$_SESSION['c_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cricket Academy & Association</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Cricket Website" name="keywords">
    <meta content="Cricket Website" name="description">
    <meta http-equiv="refresh" content="1800; url=logout.php">


    <!-- Favicon -->
    <link href="../img/favicon.png" rel="icon">
    <link href="img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="bg-white">
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="coach.php" class="navbar-brand">
                <!-- <h3 class="m-0 display-4 font-weight-bold text-uppercase text-white">Cricket </h3>
                <h3 class="m-0 display-5 font-weight-bold text-white">Academy & </h3>
                <h3 class="m-0 display-5 font-weight-bold text-white">Association </h3> -->
                <img src="../img/favicon.png" width="105px">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4 bg-secondary">
                    <a href="coach.php" class="nav-item nav-link ">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Association</a>
                            <div class="dropdown-menu text-capitalize">
                                 <a href="cquery.php" class="dropdown-item">Report Query</a>
                            </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Academy</a>
                        <div class="dropdown-menu text-capitalize">
                            <ul><a href="#" class="dropdown-item">Coach's Corner</a>
                                <ul class="dropdown-item1">
                                    <li><a href="addplayer.php">Add Player</a></li>
                                    <li><a href="removep.php">Remove Player</a></li>
                                    <li><a href="plist.php">Player List</a></li>
                                    <li><a href="preport.php">Player Report</a></li>
                                    <li><a href="cteam.php">Team</a></li>
                                    <li><a href="cmatch.php">Matches</a></li>
                                    <li><a href="password.php">Change Password</a></li>
                                </ul>
                            </ul>
                           
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Stadium</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="cpractice.php" class="dropdown-item">Practice Time</a>
                            
                        </div>
                    </div>
                    <a href="logout.php" class="nav-item nav-link">Log Out</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

      <!-- Page Header Start -->
      <div class="container-fluid page-header mb-3">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5"
            style="min-height: 400px">
            <h4 class="display-5 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Stadium</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" title="Please Check Report Monthly">Practice Time</a></p>
                
            </div>
        </div>
    </div>

     <!-- Page Header End -->

     <?php
            $query = mysqli_query($con, "SELECT practice_time FROM `finalclist` WHERE id='$id';");
            while($rec=mysqli_fetch_array($query))
            {
                  $time=$rec['practice_time'];
            }
            if($time=='')
            {
                $time="<h4>Practice Time Will Be Provide Shortly Please Wait...</h4>";
            }
    ?>

            
           <center><h3><b>Your Practice Time</b></h3><hh class="display-4 mb-1 mt-0 mt-lg-5 text-black text-uppercase font-weight-bold"><?php echo $time;?></h4></center>

           <div class="container py-1">
        <div class="row">
            <div class="col-12">
                
                <div class="d-flex align-items-center mb-2">
                    <div class="pl-3">
                        <h1 class="font-weight-bold mb-1">Please Read This Intructions Carefully</h1>
                    </div>
                </div>

                
                        <ul class="text-dark">
                            <li>This Time Follow 24 Hours Format</li>
                            <li>Coaches Reach Ground Before 15 Min At Allocated Time</li>
                            <li>Coaches Responsible For Player Practice Session And Progression.</li>
                            <li>When Coach Leave/Late At Ground That Report Submit In Query Report.</li>
                            <li>If Some Condition  Cricket Academy & Association Change Your Time  So,You Need To Check Your Time</li>
                        </ul>
                        
            </div>
        </div>
    </div>

     <!-- Footer Start -->
     <div class="footer container-fluid mt-5 py-5 px-sm-3 px-md-5 text-white">

        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Cricket Academy & Association</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+91 6355208127</p>
                <p><i class="fa fa-envelope mr-2"></i>crickteamofficial@gmail.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                        style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                        style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                        style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                        style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="coach.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="addplayer.php"><i class="fa fa-angle-right mr-2"></i>Add Player</a>
                    <a class="text-white mb-2" href="removep.php"><i class="fa fa-angle-right mr-2"></i>Remove Player</a>
                    <a class="text-white mb-2" href="plist.php"><i class="fa fa-angle-right mr-2"></i>Player List</a>
                  
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Popular Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    
                    <a class="text-white mb-2" href="cpractice.php"><i class="fa fa-angle-right mr-2"></i>Practice Time</a>
                    <a class="text-white mb-2" href="cmatch.php"><i class="fa fa-angle-right mr-2"></i>Matches</a>
                    <a class="text-white mb-2" href="cquery.php"><i class="fa fa-angle-right mr-2"></i>Report Query</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Opening Hours</h4>
                <h5 class="text-white">Monday - Friday</h5>
                <p>6.00 AM - 8.00 PM</p>
                <h5 class="text-white">Saturday - Sunday</h5>
                <p>7.00 AM - 10.00 PM</p>
            </div>
        </div>
        <div class="container border-top border-dark pt-5">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-white font-weight-bold" href="coach.php">Cricket Academy & Association</a>. All
                Rights Reserved.
            </p>
        </div>
    </div>
    <!-- Footer End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>