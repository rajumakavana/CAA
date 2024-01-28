<?php
include 'connection.php';

$ads = "SELECT * FROM `photos`WHERE `id`=8";
$qr = mysqli_query($con, $ads);
$fetch = mysqli_fetch_row($qr);

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
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Stadium</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="stadiumdetail.php" class="dropdown-item">Stadium Detail</a>
                            <a href="fmatch.php" class="dropdown-item">Future Matches</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">About Us</a>
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
            <h4 class="display-5 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Rules & REGULATIONS</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="index.php">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white px-2">About Us</p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white px-2">Rules</p>

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
                <div class="modal-footer">Cricket Academy & Association     </div>
            </div>
        </div>
    </div>

    <!-- End Login Form -->

    <!-- Rules Start -->

    <div class="container py-0">
        <div class="row">
            <div class="col-12">
                <!-- <img class="img-fluid mb-4" src="<?php echo 'admin/'.$fetch[2]; ?>" width="500" height="450"  alt="Image"> -->
                <div class="d-flex align-items-center mb-0">
                    <div class="pl-3">
                        <h3 class="display-5 mb-3 mt-0 mt-lg-5 text-dark text-uppercase font-weight-bold">Player Rules & Ragulations</h3>
                    </div>
                </div>

                <ol class="text-dark">
                    <li>Safety Rules and Regulations</li>
                        <ul>
                            <li>Sports, fitness training, and any physical activity come with their risks. As qualified coaches and staff try to minimize this risk, parents, guardians, users, and participants acknowledge that they are responsible for their actions and safety.</li>
                            <li>You understand that your's and your children’s behaviours will be exemplary at all times for the safe conduct of the event and the safety and well-being of other participants, our staff, and coaches.</li>
                            <li>If the supervisor/coach considers your child is jeopardizing others’ safety and disrupting the event, he/she may have to stop participating until further notice.Cricket Academy staff will contact parents/guardians to provide a full report of the incident.</li>
                            <li>It is the responsibility of individual users, parents, and guardians of children using our facilities to use the facility and equipment with the utmost care and be required to make good of any damages caused by their actions.</li>
                            <li>Cricket Academy & Association may provide store credit for any sessions, programs that got cancelled due to extreme weather conditions or unforeseen circumstances (example, COVID-19 lockdowns)</li>
                            <li>Cricket Academy & Association will endeavour to provide a nut-free environment; however, we cannot 100% guarantee that. Users must bring any medical treatment required in an emergency if they suffer from nuts or any other type of allergies.</li>
                        </ul>
                    <li> Each player will be selected in the annual scheme which will be of one year.</li>
                    <li>The academy will monitor the progress of the players in physical fitness, technical grasping,
                        attendance, match performance and over all focus of the player.</li>
                    <li>If the player satisfies the management in all these aspects, he/she will be retained for the
                        next year.</li>
                    <li>After joining the Academy in the annual scheme, if the player leaves the Academy mid-way due to
                        any reason (may it be due to medical reasons or any domestic problem), there will be no refund
                        of annual fee amount.</li>
                    <li>The parents must make note of all these facts so that their wards remain in the Academy for
                        regular training throughout the year.</li>
                    <li>If the player is retained for the 2nd year he/she will be informed about the annual fee one
                        month prior to the completion of his /her term.</li>
                    <li>The second year fee will consist of monthly fee for next 12 months and Annual Technical
                        Advancement Charges.</li>
                    <li>All the players will have to bring their own kit bag.If players will not own kit bag it provide
                        by Academy. </li>
                    <li>The Academy will issue one identity card And Provide Unique ID Number It Id Number Valid Until Player In Academy.</li>
                    <li>For all local tournaments, state tournaments or International tournaments, a fixed amount will
                        be charged separately.The players who pay will be allowed to participate.</li>
                    <li>However, the academy will also organise few sponsored tournaments for which selected players
                        will not have to pay any match fee.</li>
                    <li>In case of any leave due to illness, examinations etc., the candidate or the parents have to
                        inform in Online to the Academy Website.</li>
                    <li>The payment of the annual fee can be made through Crossed Cheque / Cash.</li>
                    <li>Progress report of each player will be given on monthly basis, so that the parents can know
                        about their ward’s development.</li>
                    <li>The parents should pick and drop their wards at the Academy on time.</li>
                    <li>Consumption of tobacco in any form or alcohol in and out of the academy is strictly prohibited.
                        In case of violation of the norms, the candidate may not be further retained in the academy and
                        the enrolment fee will be forfeited.</li>
                    <li>All the players must maintain discipline during the training session and if the management finds
                        any individual breaking the rules, then the individual will be debarred from the Academy with
                        immediate effect.</li>
                    <li>All trainees will have to adhere to the scheduled timings.</li>
                    <li>No player is allowed to carry any valuable ornament, mobile phones, in to the filed and in case
                        any loss of valuable, management will not be responsible.</li>
                    <li>The cricket academy / coaching season organizer shall not be responsible for any injury / death
                        that may occur during the duration of coaches or matches.</li>
                    <li>Management will reserve the right to change the rules and regulation at anytime without prior
                        notice.</li>
                </ol>
            </div>
        </div>
    </div>

    <!-- Rules End -->


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
                    <a class="text-white mb-2" href="management.php"><i class="fa fa-angle-right mr-2"></i>Management</a>
                    <a class="text-white mb-2" href="stadiumdetail.php"><i class="fa fa-angle-right mr-2"></i>Stadium</a>
                    <a class="text-white mb-2" href="rules.php"><i class="fa fa-angle-right mr-2"></i>Rules</a>
                    <a class="text-white" href="contactus.php"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Popular Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="mission.php"><i class="fa fa-angle-right mr-2"></i>Mission & Vision</a>
                    <a class="text-white mb-2" href="pregistration.php"><i class="fa fa-angle-right mr-2"></i>Player Registration</a>
                    <a class="text-white mb-2" href="cregistration.php"><i class="fa fa-angle-right mr-2"></i>Coach Registration</a>
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