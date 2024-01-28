<?php
    include 'connection.php';
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
    <script>
    function Calculate()
      {     
          const seat= parseFloat(document.getElementById('seat').value);
                  
          const price=parseFloat(seat * 200).toFixed(2);
      
          document.getElementById('price').value = price ;
         
      }

      
    </script>
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
    <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">BOOKING TICKET</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white px-2">Future Matches</p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Book Ticket</p>
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

    <!-- Contact Start -->
    <div class="col-lg-12">
    <center><h1><b>BOOKING PROCESS</b></h1></center>
        <div class="card">
            <div class="card-body">
                <div class="user-profile">
                    <div class="row">
                            <?php
                                    $matchno=$_GET['id'];
                                    $query = mysqli_query($con, "SELECT * FROM `fmatches` where `matchno`=$matchno;");
                                    while ($fetch = mysqli_fetch_array($query)) 
                                    {
                                         $format = $fetch[1];
                                         $date = $fetch[2];
                                         $time = $fetch[3];
                                         $team1 = $fetch[4];
                                         $team2 = $fetch[5];
                                    }
                                   
                            ?>
                        <form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" action="book_proccess.php" novalidate>
                            <div class="col-md-4">
                                <label  class="form-label">Match No</label>
                                <input type="text" class="form-control" name="mno" value="<?php echo $matchno;?>" required readonly>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Format</label>
                                <input type="text" class="form-control" name="mformat" value="<?php echo $format;?>" required readonly>

                            </div>
                            <div class="col-md-4">
                                <label  class="form-label">Match Date</label>
                                <div class="input-group has-validation">
                                    <input type="text" class="form-control"  name="mdate" value="<?php echo $date; ?>" required readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label  class="form-label">Time</label>
                                <input type="text" class="form-control" name="mtime" value="<?php echo $time; ?>" required readonly>
                                
                            </div>
                            <div class="col-md-4">
                                <label  class="form-label">Team 1</label>
                                <input type="text" class="form-control"  name="t1" value="<?php echo $team1; ?>" required readonly>
                            </div>
                            <div class="col-md-4">
                                <label  class="form-label">Team 2</label>
                                <input type="text" class="form-control" name="t2" value="<?php echo $team2; ?>" required readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom06" class="form-label">Email</label>
                                <div class="input-group has-validation">
                                    <input type="email" class="form-control" id="validationCustom06" name="email" required>
                                    <div class="invalid-feedback">
                                        Please Enter Valid Email Address
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="cname" class="form-label">Card Name</label>
                                <input type="text" class="form-control" id="cname" name="district" required>
                                <div class="invalid-feedback">
                                    Please Enter Valid Card Name
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="cnumber" class="form-label">Card Number</label>
                                <input type="text" class="form-control creditCardText" placeholder="XXXX-XXXX-XXXX-XXXX" id="cnumber" name="cnumber" maxlength="19" onkeypress="return onlyNumberKey(event)" required>
                                <div class="invalid-feedback">
                                    Please Enter Valid Card Number
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="cvv" class="form-label">CVV</label>
                                <input type="number" class="form-control" id="cvv" name="cvv" placeholder="" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="3" required>
                                <div class="invalid-feedback">
                                    Please Enter Card CVV Number
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <label for="expdate" class="form-label">Expiry Date</label>
                                <div class="input-group has-validation">
                                    <input type="date" class="form-control" id="expdate" name="expdate" required>
                                    <div class="invalid-feedback">
                                        Please Enter Card Expiry Date
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="seat" class="form-label">Total Seat</label>
                                <input type="number" class="form-control" id="seat" name="seat" onclick="Calculate(0);" onkeyup="Calculate(0);" onblur="Calculate(0);" value="1" required>
                                <div class="invalid-feedback">
                                    Please Enter Number Of Seat
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" class="form-control" id="price" name="price" value="200.00" required readonly>
                            </div>
                            <br><br>
                            <br><br>
                            <div class="col-md-12">
                                            <center>
                                            <input class="btn btn-success" type="submit" name="book" value="BOOK" />
                                            <a href="fmatch.php" input class="btn btn-danger" name="cancel" value="CANCEL"><i class="fa fa-times"></i> </a>
                                            <!-- <input class="btn btn-danger" type="cancel" value="CANCEL" /> -->
                                            </center>
                                        </div>
                                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    
    <!-- Contact End -->

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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

        $('.creditCardText').keyup(function() {
        var foo = $(this).val().split("-").join(""); // remove hyphens
        if (foo.length > 0) {
        foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
    }
    $(this).val(foo);
    }
    );
    </script>

<script>
        function onlyNumberKey(evt) {
              
            // Only ASCII character in that range allowed
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }
    </script>

</body>

</html>