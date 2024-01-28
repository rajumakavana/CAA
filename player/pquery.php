<?php
  session_start();
  include '../connection.php';
  if(!isset($_SESSION['role']))
  {
      header("location:../index.php");
  }
  if(isset($_SESSION['role']))
  {
      
      if($_SESSION['role']=='admin')
      {
        header("location:../admin/adindex.php");
      }
      if($_SESSION['role']=='coach')
      {
          header("location:../coach/coach.php");
      }
  }
  $id=$_SESSION['p_id'];
  $name1=$_SESSION['firstname'];
  $name2=$_SESSION['lastname'];
  $email=$_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cricket Academy & Association</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Cricket Website" name="keywords">
    <meta content="Cricket Website" name="description">
    <meta http-equiv="refresh" content="900; url=logout.php">


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
            <a href="player.php" class="navbar-brand">
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
                    <a href="player.php" class="nav-item nav-link">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Association</a>
                            <div class="dropdown-menu text-capitalize">
                                <a href="pquery.php" class="dropdown-item">Report Query</a>
                            </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Academy</a>
                        <div class="dropdown-menu text-capitalize">
                            <ul><a href="#" class="dropdown-item">Player's Corner</a>
                                <ul class="dropdown-item1">
                                    <li><a href="mycoach.php">My Coach</a></li>
                                    <li><a href="myteam.php">My Team</a></li>
                                    <li><a href="mymatch.php">Matches</a></li>
                                    <li><a href="myreport.php">My Report</a></li>
                                    <li><a href="password.php">Change Password</a></li>
                                </ul>
                            </ul>
                           
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Stadium</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="practice.php" class="dropdown-item">Practice Time</a>
                            <a href="gym.php" class="dropdown-item">Gym Time</a>
                        </div>
                    </div>
                    <a href="logout.php" class="nav-item nav-link">Log Out</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


      <!-- Page Header Start -->
      <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5"
            style="min-height: 400px">
            <h4 class="display-5 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Player Corner</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white">Query</a></p>
                
            </div>
        </div>
    </div>

     <!-- Page Header End -->

     <?php
$today=date(" jS-F-Y");

if(isset($_POST['sendr']))
{
    $pid=$_POST['pid'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $date=$_POST['date'];
    $sub=$_POST['subject'];
    $message=$_POST['message'];

    $sq="INSERT INTO `pquery` (`player_id`, `name`, `email`, `report_date`, `subject`, `message`) VALUES ('$pid', '$name', '$email', '$date', '$sub', '$message');";
    $qry=mysqli_query($con,$sq);
    if($qry)
    {
        echo "<script>alert('Your Query Report Submited We Will Contact Soon...');</script>";
        echo "<script>window.location.href='player.php';</script>";
    }

}

?>

    <div class="col-md-6 pb-5">
        <div class="contact-form">
            <div id="success"></div>
            <form class="needs-validation" name="sentMessage" id="contactForm"  method="post" novalidate>
              <div class="control-group">
                    <input type="text" class="form-control" id="id" name="pid" value="<?php echo $id;?>"  data-validation-required-message="Please enter your name" style="border-radius: 10px;" readonly/>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $name1; echo ' '; echo $name2;?>"  data-validation-required-message="Please enter your name" style="border-radius: 10px;" readonly/>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email;?>"  data-validation-required-message="Please enter your email" style="border-radius: 10px;" readonly/>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="text" class="form-control" id="date" name="date" value="<?php echo $today;?>"  data-validation-required-message="Today Date" style="border-radius: 10px;" readonly/>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject"  data-validation-required-message="Please enter a subject" style="border-radius: 10px;" required/>
                    <div class="invalid-feedback">Please Enter Your Subject</div>
                </div>
                <br>
                <div class="control-group">
                    <textarea class="form-control" rows="4" id="message" name="message" placeholder="Message"  data-validation-required-message="Please enter your message" style="border-radius: 10px;" required></textarea>
                    <div class="invalid-feedback">Please Enter Your Message</div>
                </div>
                <br>
                <div>
                    <button class="btn btn-outline-primary" type="submit" name="sendr" id="sendMessageButton" style="border-radius: 15px;">Report</button>
                </div>
            </form>
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
                    <a class="text-white mb-2" href="player.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="mycoach.php"><i class="fa fa-angle-right mr-2"></i>My Coach</a>
                    <a class="text-white mb-2" href="myteam.php"><i class="fa fa-angle-right mr-2"></i>My Team</a>
                    <a class="text-white mb-2" href="myreport.php"><i class="fa fa-angle-right mr-2"></i>My Report</a>
                  
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Popular Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    
                    <a class="text-white mb-2" href="practice.php"><i class="fa fa-angle-right mr-2"></i>Practice Time</a>
                    <a class="text-white mb-2" href="mymatch.php"><i class="fa fa-angle-right mr-2"></i>My Matches</a>
                    <a class="text-white mb-2" href="query.php"><i class="fa fa-angle-right mr-2"></i>Report Query</a>
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
                &copy; <a class="text-white font-weight-bold" href="player.php">Cricket Academy & Association</a>. All
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