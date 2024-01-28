<?php

include 'connection.php';

$ads = "SELECT * FROM `photos`WHERE `id`=2";
$qr = mysqli_query($con, $ads);
$fetch = mysqli_fetch_row($qr);

$ad = "SELECT * FROM `photos`WHERE `id`=3";
$qry = mysqli_query($con, $ad);
$fetch2 = mysqli_fetch_row($qry);

$ad2 = "SELECT * FROM `photos`WHERE `id`=4";
$qry1 = mysqli_query($con, $ad2);
$fetch3 = mysqli_fetch_row($qry1);

$ad3 = "SELECT * FROM `photos`WHERE `id`=5";
$qry2 = mysqli_query($con, $ad3);
$fetch4 = mysqli_fetch_row($qry2);

$ad4 = "SELECT * FROM `photos`WHERE `id`=6";
$qry3 = mysqli_query($con, $ad4);
$fetch5 = mysqli_fetch_row($qry3);

$ad5 = "SELECT * FROM `photos`WHERE `id`=7";
$qry6 = mysqli_query($con, $ad5);
$fetch6 = mysqli_fetch_row($qry6);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cricket Academy & Association</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Cricket Website" name="keywords">
    <meta content="Cricket Website" name="description">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">
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
            <a href="index.php" class="navbar-brand">
                <!-- <h3 class="m-0 display-4 font-weight-bold text-uppercase text-white">Cricket </h3>
                <h3 class="m-0 display-5 font-weight-bold text-white">Academy & </h3>
                <h3 class="m-0 display-5 font-weight-bold text-white">Association </h3> -->
                <img src="img/favicon.png" width="105px"> 
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4 bg-secondary">
                    <a href="index.php" class="nav-item nav-link ">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Association</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="management.php" class="dropdown-item">Management</a>
                            <a href="team.php" class="dropdown-item">Team</a>
                            <a href="playerlist.php" class="dropdown-item">Player List</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Academy</a>
                        <div class="dropdown-menu text-capitalize">
                            <ul><a href="#" class="dropdown-item">Player's Corner</a>
                                <ul class="dropdown-item1">
                                    <li><a href="pregistration.php">Registration</a></li>
                                    <li><a href="printp.php">Print Application</a></li>
                                    <li><a href="trial.php">Trial Result</a></li>
                                    <li><a href="pfinal.php">Final Result</a></li>
                                </ul>
                            </ul>
                            <ul><a href="#" class="dropdown-item">Coach's Corner</a>
                                <ul class="dropdown-item1">
                                    <li><a href="cregistration.php">Registration</a></li>
                                    <li><a href="printc.php">Print Application</a></li>
                                    <li><a href="cfinal.php">Selection Result</a></li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Stadium</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="stadiumdetail.php" class="dropdown-item">Stadium Detail</a>
                            <a href="fmatch.php" class="dropdown-item">Future Matches</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">About Us</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="rules.php" class="dropdown-item">Rules</a>
                            <a href="mission.php" class="dropdown-item">Mission & Vision</a>
                            <a href="terms.php" class="dropdown-item">Terms & Condition</a>
                            <a href="privacy.php" class="dropdown-item">Privacy Policy</a>
                            <a href="contactus.php" class="dropdown-item">Contact</a>
                        </div>
                    </div>
                    <a class="nav-item nav-link " data-toggle="modal" data-target="#loginModal" type="submit">Login</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-0">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5"
            style="min-height: 400px">
            <h4 class="display-5 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Information About Our
                Stadium</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Stadium Detail</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Login Form -->
    <div class="modal fade" id="loginModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form method="POST" action="login.php" class="needs-validation" novalidate>
                        <div class="form-group">
                                <input type="email" class="form-control" name="email" id="validationCustom" placeholder="Email" required>
                                <div class="invalid-feedback">
                                    Please Enter Valid Email Address
                                </div>
                        </div> 
                        <div class="form-group">
                            <input type="password" name="password" id="userpass" placeholder="Password" class="form-control" required>
                            <div class="invalid-feedback">
                                Please Enter Valid Password
                            </div>
                        </div>
                        <a href="f_pass/forget_password.php">Forget Password ?</a>
                        <br><br>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" name="loginb" class="btn btn-primary">Login</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">Cricket Academy & Association </div>
            </div>
        </div>
    </div>

    <!-- End Login Form -->


    <!-- Stadium Start -->
    <div class="container pt-4">
        <div class="d-flex flex-column text-center mb-3">
            <h4 class="text-primary font-weight-bold">Cricket Academy & Association Stadium</h4>
            <h4 class="display-5 font-weight-bold">STADIUM</h4>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-0 blog-item">
                <img  src="<?php echo 'admin/'.$fetch[2]; ?>" width="540" height="360" class="img-fluid mb-4" alt="Image">
                <div class="d-flex align-items-center mb-4">

                    <div class="pl-3">
                        <h3 class="font-weight-bold">Ground facts and figures</h3>
                    </div>
                </div>
                <p class="text-dark">
                <ul>
                    <li>Capacity: 10,500</li>
                    <li>Floodlights: Yes</li>
                    <li>Modify Ground for juniors</li>
                    <li>Two Pavilion In Stadium</li>
                    <li>4 Team Dressing Rooms With Associated Facilities</li>
                    <li>PowerPlay Used In Game</li>
                </ul>

                </p>

            </div>
            <div class="col-lg-6 mb-3 blog-item">
                <img  src="<?php echo 'admin/'.$fetch2[2]; ?>" width="540" height="360" alt="Image" class="img-fluid mb-4">
                <div class="d-flex align-items-center mb-4">

                    <div class="pl-3">
                        <h3 class="font-weight-bold">Cricket Pitch</h3>

                    </div>
                </div>
                <p class="text-dark">The dimensions of a turf pitch are 20.12m long (from stump to stump)plus a minimum of 1.22m behind
                    the stumps to accommodate the return crease and bowler approach area. The width of a turf pitch is
                    3.05m.The overall dimensions of a turf wicket will vary according to the level of cricket
                    competition being played.The dimensions of a synthetic cricket pitch range from 25m to 28m long and
                    2.4m to 2.8m wide. A bowling crease, popping crease and two return creases are marked in white at
                    each end of the pitch.
                
                </p>

            </div>
            <div class="col-lg-6 mb-1 blog-item">
                <img src="<?php echo 'admin/'.$fetch3[2]; ?>" width="540" height="360" alt="Image" class="img-fluid mb-4">
                <div class="d-flex align-items-center mb-4">

                    <div class="pl-3">
                        <h3 class="font-weight-bold">Cricket playing ground</h3>

                    </div>
                </div>
                <p class="text-dark">A circular cricket field is considered as the perfect field but generally a cricket pitch is slightly
                    oval. Its diameter varies between 137m and 150m. The ICC Test Match Standard Playing Conditions
                    (October 2014) Law 19.1 defines the playing area as a minimum of 137.16m from boundary to boundary
                    square of the pitch, with the shorter of the two square boundaries a minimum of 59.43m. The straight
                    boundary at both ends of the pitch is a minimum of 64m. Distances are measured from the centre of
                    the pitch.</p>

            </div>
            <div class="col-lg-6 mb-5 blog-item">
                <img class="img-fluid mb-4" src="<?php echo 'admin/'.$fetch4[2]; ?>" width='540' height='360' alt="Image">
                <div class="d-flex align-items-center mb-4">
                    <div class="pl-3">
                        <h3 class="font-weight-bold">Boundary markings</h3>
                    </div>
                </div>
                <p class="text-dark">All boundaries are marked by a rope or similar object as per the ICC rules. The rope has a required
                    minimum distance of 2.74m inside the perimeter fencing or advertising signs. For grounds with a
                    large playing area, the maximum length of boundary should be used before applying the minimum 3
                    yards (2.74m) between the boundary and the fence.

                    
                </p>

            </div>
            <div class="col-lg-6 mb-5 blog-item">
                <img class="img-fluid mb-4" src="<?php echo 'admin/'.$fetch5[2]; ?>" width="540" height="360" alt="Image">
                <div class="d-flex align-items-center mb-4">

                    <div class="pl-3">
                        <h3 class="font-weight-bold">Practice cricket nets</h3>

                    </div>
                </div>
                <p class="text-dark">Generally practice cricket nets are 20m long and 3.6m wide. The back and side walls are 3m high.
                    With multiconstructions the dividing (centre) net must be 21m long. This is a occupational health
                    and safety measure to protect the bowlers in adjacent nets.
                    Peripheral nets require a minimum side fencing length of 11m. It is recommended that all nets have a
                    minimum 21m dividing fence and are 27m long to allow for extended bowler run-ups and bowler
                    protection.
                </p>
            </div>
            <div class="col-lg-6 mb-0 blog-item">
                <img class="img-fluid mb-4" src="<?php echo 'admin/'.$fetch6[2]; ?>"width='540px' height="360px" alt="Image">
                <div class="d-flex align-items-center mb-4">
                    <div class="pl-3">
                        <h3 class="font-weight-bold">Stands</h3>
                    </div>
                </div>
                <p class="text-dark">
                    <ul>
                        <li>Sunil Gavaskar Stand</li>
                        <li>North Stand</li>
                        <li>Sachin Tendulkar Stand</li>
                        <li>MS Dhoni Stand</li>
                        <li>South Stand</li>

                    </ul>                    
                </p>

            </div>

        </div>
    </div>
    <!-- Stadium End -->

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
                    <a class="text-white mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="management.php"><i
                            class="fa fa-angle-right mr-2"></i>Management</a>
                    <a class="text-white mb-2" href="stadiumdetail.php"><i
                            class="fa fa-angle-right mr-2"></i>Stadium</a>
                    <a class="text-white mb-2" href="rules.php"><i class="fa fa-angle-right mr-2"></i>Rules</a>
                    <a class="text-white" href="contactus.php"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Popular Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="mission.php"><i class="fa fa-angle-right mr-2"></i>Mission &
                        Vision</a>
                    <a class="text-white mb-2" href="pregistration.php"><i class="fa fa-angle-right mr-2"></i>Player
                        Registration</a>
                    <a class="text-white mb-2" href="cregistration.php"><i class="fa fa-angle-right mr-2"></i>Coach
                        Registration</a>
                    <a class="text-white mb-2" href="team.php"><i class="fa fa-angle-right mr-2"></i>Team</a>
                    <a class="text-white" href="playerlist.php"><i class="fa fa-angle-right mr-2"></i>Player List</a>
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
                &copy; <a class="text-white font-weight-bold" href="index.php">Cricket Academy & Association</a>. All
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