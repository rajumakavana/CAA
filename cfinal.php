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
    <link rel="stylesheet" href="css/style111.css">
    <link href="css/style10.css" rel="stylesheet">



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
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Academy</a>
                        <div class="dropdown-menu text-capitalize">
                            <ul><a href="#" class="dropdown-item">Player's Corner</a>
                                <ul class="dropdown-item1">
                                    <li><a href="pregistration.php">Registration</a></li>
                                    <li><a href="trial.php">Print Application</a></li>
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
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">About Us</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="#" class="dropdown-item">Rules</a>
                            <a href="#" class="dropdown-item">Mission & Vision</a>
                            <a href="#" class="dropdown-item">Terms & Condition</a>
                            <a href="#" class="dropdown-item">Privacy Policy</a>
                            <a href="contact.php" class="dropdown-item">Contact</a>
                        </div>
                    </div>
                    <a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#loginModal"
                        type="submit">Login</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

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




    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5"
            style="min-height: 400px">
            <h4 class="display-5 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Final Result</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="index.php">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white px-2">Coach Corner</p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white px-2">Final List</p>

            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Start Final Result -->
    <div class="col-12">
      <form class="" method="POST" action="#">
        <input type="text" name="search" placeholder="Search" title="Enter search keyword" value="<?php if(isset($_POST['find'])){ $val=$_POST['search'];echo "$val"; } ?>">
        <button type="submit" class="btn-outline-success" name="find">Search<i class="bi bi-search"></i></button>
      </form>
    </div>
      <!-- Start Final Result -->
    <h2 align=center>Selected Coach List   </h2>
     <div class="table-responsive">
     <table class="table">
        <thead class="thead-dark">
          <tr>
          <th scope="col">Id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Father Name</th>
            <th scope="col">Mobile</th>
            <th scope="col">Gender</th>
            <th scope="col">Birth Date</th>
            <th scope="col">Age</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">District</th>
            <th scope="col">State</th>
            <th scope="col">Country</th>
            <th scope="col">Pincode</th>
            <th scope="col">Coach_Level</th>
            <th scope="col">Coach_type</th>
            <th scope="col">Photo</th>
          </tr>
        </thead>
        
        <tbody>
        <?php
              if(isset($_POST['find']))
              {
                  $filter=$_POST['search'];
                  $sql="SELECT * FROM `finalclist` WHERE `id` like '%$filter%' or `first_name` LIKE '%$filter%' or `last_name` LIKE '%$filter%' or `father_name` LIKE '%$filter%' or  `mobile` LIKE '%$filter%' or `email` LIKE '%$filter%' or `district` LIKE '%$filter%' or `state` LIKE '%$filter%' or `country` LIKE '%$filter%';";
                  $res=mysqli_query($con,$sql);
                  if(mysqli_num_rows($res)>0)
                  {
                      while($row=mysqli_fetch_array($res))
                      {
                        echo "<tr>";
                    echo "<td> $row[0]</td>";
                    echo "<td> $row[1]</td>";
                    echo "<td> $row[2]</td>";
                    echo "<td> $row[3]</td>";
                    echo "<td> $row[4]</td>";
                    echo "<td> $row[5]</td>";
                    echo "<td> $row[6]</td>";
                    echo "<td> $row[7]</td>";
                    echo "<td> $row[8]</td>";
                    echo "<td> $row[9]</td>";
                    echo "<td> $row[10]</td>";
                    echo "<td> $row[11]</td>";
                    echo "<td> $row[12]</td>";
                    echo "<td> $row[13]</td>";
                    echo "<td> $row[14]</td>";
                    echo "<td> $row[15]</td>";
                    echo "<td><img src='$row[18]' width='50px' heigh='50px'></td>";
                    echo "</tr>";
                      }
                    }
                    else
                    {
                        echo "<td align='center' colspan='17'>No Record Found</td>";
                    echo "</tr>";
                    }
                }
                else{
              $data = " SELECT * FROM `finalclist` ";
              $qry = mysqli_query($con, $data);
              $result=mysqli_num_rows($qry);
              if($result==0)
              {
                echo "<tr>";
                echo  "<td colspan='17' align='center'><h1>Result Declare Soon...</td>";
                echo "</tr>";
              }
              else
              {
                while ($row = mysqli_fetch_array($qry)) {
                    echo "<tr>";
                    echo "<td> $row[0]</td>";
                    echo "<td> $row[1]</td>";
                    echo "<td> $row[2]</td>";
                    echo "<td> $row[3]</td>";
                    echo "<td> $row[4]</td>";
                    echo "<td> $row[5]</td>";
                    echo "<td> $row[6]</td>";
                    echo "<td> $row[7]</td>";
                    echo "<td> $row[8]</td>";
                    echo "<td> $row[9]</td>";
                    echo "<td> $row[10]</td>";
                    echo "<td> $row[11]</td>";
                    echo "<td> $row[12]</td>";
                    echo "<td> $row[13]</td>";
                    echo "<td> $row[14]</td>";
                    echo "<td> $row[15]</td>";
                    echo "<td><img src='$row[18]' width='50px' heigh='50px'></td>";
                    echo "</tr>";
                } 
              }
                }
              ?>
            </tbody>
    </table>
    </div>
    

    <!-- End Final Result -->
    

    <!-- End Final Result -->


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