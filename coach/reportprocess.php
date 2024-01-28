<?php
session_start();
include '../connection.php';
if (!isset($_SESSION['role'])) {
    header("location:../index.php");
}
if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 'player') {
        header("location:../player/player.php");
    }
    if ($_SESSION['role'] == 'admin') {
        header("location:../admin/adindex.php");
    }
}

$pid=$_GET['id'];


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

    <script>
      
      function Calculate()
      {     
          const prun= parseFloat(document.getElementById('run').value);
          const pout =parseFloat(document.getElementById('out').value);
          const psr= parseFloat(document.getElementById('ball').value);
        
          const pavg=parseFloat(prun/pout).toFixed(2);
      
          document.getElementById('avg').value = pavg ;
         
          document.getElementById('p_strike').value= parseFloat((prun * 100)/psr).toFixed(2);  
      }
      function Calculate2()
      {
          const brun = parseFloat(document.getElementById('b_run').value);
          const bwkt = parseFloat(document.getElementById('wkt').value);
          const bballs = parseFloat(document.getElementById('balls').value);
          const bover = parseFloat(document.getElementById('over').value);
  
          document.getElementById('bsrk').value=  parseFloat(bballs/bwkt).toFixed(2);
          document.getElementById('economy').value=parseFloat(brun/bover).toFixed(2);
          document.getElementById('avg2').value=   parseFloat(brun/bwkt).toFixed(2);

      }
      function overf()
      {
        const over= parseFloat(document.getElementById('over').value);        
        const ball=parseFloat(over*6);
      
          document.getElementById('balls').value =ball;
      }
  
  
   </script>   
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
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Academy</a>
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
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Stadium</a>
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

    <?php
    $pr="SELECT * FROM `finalplist` where `id`=$pid;";
    $qry = mysqli_query($con, $pr);
    $result = mysqli_num_rows($qry);


    while ($row = mysqli_fetch_array($qry)) {
      
      $fname=$row[1];
      $lname=$row[2];
     }  
    
    ?>
    



    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h4 class="display-5 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Coach Corner</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" title="Please Check Report Monthly">Report</a></p>

            </div>
        </div>
    </div>

    <!-- Page Header End -->
    <a href="preport.php">&nbsp<button class="btn btn-danger"><i class="fa fa-arrow-left"></i></button></a>
    <form class="needs-validation" method="POST" action="record.php" novalidate>
        
        <div class="modal-header">
        <h3 class="modal-title">Player Report</h3>
        </div>
        <div class="modal-body">
            <div class="col-lg-12">
                    <div class="row">
            
            <div class="col-md-6">
                                <B>
                                <label>Select Format :</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="validationFormCheck1" name="format" value="T20" required>
                                    <label class="form-check-label" for="validationFormCheck1">T20</label>&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <input type="radio" class="form-check-input" id="validationFormCheck2" name="format" value="ODI" required>
                                    <label class="form-check-label" for="validationFormCheck2">ODI</label>&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <input type="radio" class="form-check-input" id="validationFormCheck3" name="format" value="TEST" required>
                                    <label class="form-check-label" for="validationFormCheck3">TEST</label>
                                    <div class="invalid-feedback">Please Select Valid Format</div>
                                </div>
                                </B>
                            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Select Report Date :</label>
                    <input type="date" class="form-control" name="r_date" value="" required/>
                    <div class="invalid-feedback">Please Select Report Date</div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Player ID :</label>
                    <input type="hidden" value="<?php echo $row['id'] ?>" name="p_id" />
                    <input type="text" class="form-control" value="<?php echo $pid; ?>" name="p_id" required="required" readonly />
                    <label>Player Name:</label>
                    <input type="text" class="form-control" value="<?php echo $fname;
                                                                    echo ' ';
                                                                    echo $lname; ?>" name="p_name" readonly />
                    <label>Enter Matches:</label>
                    <input type="number" class="form-control" name="match" value="<?php  ?>" required />
                    <div class="invalid-feedback">Please Enter Player Matches</div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <h3><label>Batting Data :</label></h3>
                    <label>Enter Runs:</label>
                    <input type="number" class="form-control" name="p_runs" id="run" value="<?php  ?>" onkeyup="Calculate()" required />
                    <div class="invalid-feedback">Please Enter Player Runs</div>
                    <label>Enter No. of 100:</label>
                    <input type="number" class="form-control" name="100"  value="<?php  ?>" onkeyup="Calculate()" required />
                    <div class="invalid-feedback">Please Enter Player 100</div>
                    <label>Enter No. of 50:</label>
                    <input type="number" class="form-control" name="half"  value="<?php  ?>" onkeyup="Calculate()" required />
                    <div class="invalid-feedback">Please Enter Player 50</div>
                    <label>Enter No. of Out:</label>
                    <input type="number" class="form-control" name="p_nout" id="out" onkeyup="Calculate()" required />
                    <div class="invalid-feedback">Please Enter No. of Out   </div>
                    <label>Enter Balls Faced:</label>
                    <input type="number" class="form-control" name="p_ballf" id="ball" onkeyup="Calculate()" value="" required />
                    <div class="invalid-feedback">Please Enter Balls Faced</div>
                    <label>Enter Best Score:</label>
                    <input type="text" class="form-control" name="bat_best" onkeyup="Calculate()" value="<?php  ?>" required />
                    <div class="invalid-feedback">Please Enter Player Best Score</div>
                    
                    <label>Strike Rate:</label>
                    <input type="number" class="form-control" name="p_strike" id="p_strike" value="0.00" required readonly />
                    <label>Avarage :</label>
                    <input type="number" class="form-control" name="avg" id="avg" value="0.00" required readonly />
                </div>
            </div>
                <div class="col-md-6">
                <div class="form-group">
                    <h3><label>Bawling Data :</label></h3>
                    <label>Enter Runs Concended:</label>
                    <input type="number" class="form-control" name="p_brun" id="b_run" onkeyup="Calculate2();" required />
                    <div class="invalid-feedback">Please Enter Runs Concended</div>
                    <label>Enter No. Wickets Taken:</label>
                    <input type="number" class="form-control" name="p_wk" id="wkt" onkeyup="Calculate2();" value="<?php  ?>" required />
                    <div class="invalid-feedback">Please Enter No. of Wickets</div>
                    <label>Enter Bowled Overs:</label>
                    <input type="number" class="form-control" name="p_over" id="over" onkeyup="overf(0)" onblur="overf(0);" onkeyup="Calculate2();" required/>
                    <div class="invalid-feedback">Please Enter Player Over</div>
                    <label>Enter Balls Bowled:</label>
                    <input type="number" class="form-control" name="p_balls" id="balls" onkeyup="Calculate2();" required readonly/>
                    <div class="invalid-feedback">Please Enter Over First</div>
                    <label>Enter Best Bowling:</label>
                    <input type="text" class="form-control" name="best_ball" onkeyup="Calculate2();" value="<?php  ?>" required />
                    <div class="invalid-feedback">Please Enter Best Bowling</div>
                    <label>Strike Rate:</label>
                    <input type="number" class="form-control" name="p_bstrike" id="bsrk" value="0.00" required readonly />
                    <label>Economy Rate:</label>
                    <input type="number" class="form-control" name="p_econo" id="economy" value="0.00" required readonly />
                    <label>Avarage :</label>
                    <input type="number" class="form-control" name="p_bavg" id="avg2" value="0.00" required readonly />
                </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                    <h3><label>Catching Data :</label></h3>
                    <label>Enter No. of Catches:</label>
                    <input type="number" class="form-control" name="p_catch" value="<?php  ?>" required />
                </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                    <h3><label>Run Out Data :</label></h3>
                    <label>Enter No. of RunOut:</label>
                    <input type="number" class="form-control" name="p_runout" value="<?php  ?>" required />
                </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                    <h3><label>Total Performance:</label></h3>
                    <label>Enter Total Performance(%):</label>
                    <input type="text" class="form-control" name="p_perform" value="<?php  ?>" required />
                </div>
                    </div>


            </div>
        </div>
        <br style="clear:both;" />
        <div class="col-md-12">
        <div class="modal-footer">     
            <button class="btn btn-success" name="donert"><span class="glyphicon glyphicon-save"></span><i class="fa fa-save"></i></button>    
        </div>
    </div>
            </div>
</div>
    </form>
    

    <!-- Footer Start -->
    <div class="footer container-fluid mt-5 py-5 px-sm-3 px-md-5 text-white">

        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Cricket Academy & Association</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+91 6355208127</p>
                <p><i class="fa fa-envelope mr-2"></i>crickteamofficial@gmail.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
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
    <script>
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>

</html>