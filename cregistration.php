<?php

include('connection.php');
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
    <link rel="stylesheet" href="css/style112.css">
    <link href="css/style10.css" rel="stylesheet">



    <script type="text/javascript">
        function formatDate(date) {
            var d = new Date(date),
                month = '' + (d.getMonth() + 1),
                day = '' + d.getDate(),
                year = d.getFullYear();

            if (month.length < 2) month = '0' + month;
            if (day.length < 2) day = '0' + day;

            return [year, month, day].join('-');

        }

        function getAge(dateString) {
            var birthdate = new Date().getTime();
            if (typeof dateString === 'undefined' || dateString === null || (String(dateString) === 'NaN')) {
                // variable is undefined or null value
                birthdate = new Date().getTime();
            }
            birthdate = new Date(dateString).getTime();
            var now = new Date().getTime();
            // now find the difference between now and the birthdate
            var n = (now - birthdate) / 1000;
            if (n < 604800) { // less than a week
                var day_n = Math.floor(n / 86400);
                if (typeof day_n === 'undefined' || day_n === null || (String(day_n) === 'NaN')) {
                    // variable is undefined or null
                    return '';
                } else {
                    return day_n + (day_n > 1 ? '' : '');
                }
            } else if (n < 2629743) { // less than a month
                var week_n = Math.floor(n / 604800);
                if (typeof week_n === 'undefined' || week_n === null || (String(week_n) === 'NaN')) {
                    return '';
                } else {
                    return week_n + (week_n > 1 ? '' : '');
                }
            } else if (n < 31562417) { // less than 24 months
                var month_n = Math.floor(n / 2629743);
                if (typeof month_n === 'undefined' || month_n === null || (String(month_n) === 'NaN')) {
                    return '';
                } else {
                    return month_n + (month_n > 1 ? '' : '');
                }
            } else {
                var year_n = Math.floor(n / 31556926);
                if (typeof year_n === 'undefined' || year_n === null || (String(year_n) === 'NaN')) {
                    return year_n = '';
                } else {
                    return year_n + (year_n > 1 ? '' : '');
                }
            }
        }

        function getAgeVal(pid) {
            var birthdate = formatDate(document.getElementById("dob").value);
            var count = document.getElementById("dob").value.length;
            if (count == '10') {
                var age = getAge(birthdate);
                var str = age;
                var res = str.substring(0, 1);
                if (res == '-' || res == '0') {
                    document.getElementById("dob").value = "";
                    document.getElementById("age").value = "";
                    $('#dob').focus();
                    return false;
                } else {
                    document.getElementById("age").value = age;
                }
            } else {
                document.getElementById("age").value = "";
                return false;
            }
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
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Academy</a>
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
            <h4 class="display-5 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Coach Registration</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="index.php">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white px-2">Coach Corner</p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white px-2">Registration</p>

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

    <!-- Registration Form -->

    <div class="col-lg-12">
        <center>
            <h1><b>Coach Registration Form</b></h1>
        </center>
        <div class="card">
            <div class="card-body">
                <div class="user-profile">
                    <div class="row">

                        <form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" novalidate>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="validationCustom01" name="firstname" required>
                                <div class="invalid-feedback">
                                    Please Enter Valid First Name
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="validationCustom02" name="lastname" required>

                                <div class="invalid-feedback">
                                    Please Enter Valid Last Name
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom03" class="form-label">Father Name</label>
                                <div class="input-group has-validation">
                                    <input type="text" class="form-control" id="validationCustom03" name="fname" required>
                                    <div class="invalid-feedback">
                                        Please Enter Valid Father Name
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom05" class="form-label">Contact Number :</label>
                                <input type="number" class="form-control" id="validationCustom05" name="mobile" required>

                                <div class="invalid-feedback">
                                    Please Enter Valid Conatct Number
                                </div>
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
                                <label for="validationTextarea" class="form-label">Enter Address</label>
                                <textarea class="form-control" id="validationTextarea" required rows="1" name="address"></textarea>
                                <div class="invalid-feedback">
                                    Please Enter Your Addresss
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom07" class="form-label">Disrict</label>
                                <input type="text" class="form-control" id="validationCustom07" name="district" required>
                                <div class="invalid-feedback">
                                    Please Enter Valid District
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom08" class="form-label">Pin Code</label>
                                <input type="number" class="form-control" id="validationCustom08" name="pincode" required>
                                <div class="invalid-feedback">
                                    Please Enter Valid Pincode
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>State </label>
                                <select class="form-control" required aria-label="select example" name="state">
                                    <option selected disabled value="">Select State</option>
                                    <option>Gujarat</option>
                                    <option>Andhra Pradesh</option>
                                    <option>Arunachal Pradesh</option>
                                    <option>Assam</option>
                                    <option>Bihar</option>
                                    <option>Chhattisgarh</option>
                                    <option>Goa</option>
                                    <option>Gujarat</option>
                                    <option>Haryana</option>
                                    <option>Himachal Pradesh</option>
                                    <option>Jharkhand</option>
                                    <option>Karnataka</option>
                                    <option>Kerala</option>
                                    <option>Madhya Pradesh</option>
                                    <option>Maharashtra</option>
                                    <option>Manipur</option>
                                    <option>Meghalaya</option>
                                    <option>Mizoram</option>
                                    <option>Nagaland</option>
                                    <option>Odisha</option>
                                    <option>Punjab</option>
                                    <option>Rajasthan</option>
                                    <option>Sikkim</option>
                                    <option>Tamil Nadu</option>
                                    <option>Telangana</option>
                                    <option>Tripura</option>
                                    <option>Uttar Pradesh</option>
                                    <option>Uttarakhand</option>
                                    <option>West Bengal</option>
                                    <option>Other</option>
                                </select>
                                <div class="invalid-feedback">Please Select Your State</div>
                            </div>

                            <div class="col-md-4">
                                <label>Country </label>
                                <select class="form-control" required aria-label="select country" name="country">
                                    <option selected disabled value="">Select a Country</option>
                                    <option>India</option>
                                    <option>Sri-lanka</option>
                                    <option>Australia</option>
                                    <option>England</option>
                                    <option>New Zeland</option>
                                    <option>South Africa</option>

                                </select>
                                <div class="invalid-feedback">Please Select Your Country</div>
                            </div>
                            <div class="col-md-4">
                                <label>Select Coaching Level</label>
                                <select class="form-control" required aria-label="select level" name="level">
                                    <option selected disabled value="">Select Level</option>
                                    <option>Club Level</option>
                                    <option>School Level</option>
                                    <option>District Level</option>
                                    <option>First Class(Ranji)</option>

                                </select>
                                <div class="invalid-feedback">Please Select Your Coaching Level</div>
                            </div>
                            <div class="col-md-6">
                                <label for="dob" class="form-label">Date Of Birth</label>
                                <input type="date" class="form-control" name="dob" id="dob" onkeyup="getAgeVal(0)" onblur="getAgeVal(0);" required>
                                <div class="invalid-feedback">
                                    Please Enter Valid Date of Birth
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" class="form-control" name="agedata" id="age" required placeholder="Please Select Date Of Birth" readonly required>
                                <div class="invalid-feedback">
                                    Please Enter DOB
                                </div>
                            </div>
                            <div class="col-md-8">
                                <br>
                                <label>Gender :&nbsp</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="validationFormCheck1" name="gn" value="Male" required>
                                    <label class="form-check-label" for="validationFormCheck1">Male</label>&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <input type="radio" class="form-check-input" id="validationFormCheck2" name="gn" value="Female" required>
                                    <label class="form-check-label" for="validationFormCheck2">Female</label>
                                    <div class="invalid-feedback">Please Select Valid Gender</div>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <br>
                                <label>Coach Type :</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="validationFormCheck19" name="coacht" value="Head Coach" required>
                                    <label class="form-check-label" for="validationFormCheck19">Head Coach</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" class="form-check-input" id="validationFormCheck20" name="coacht" value="Assistant Coach" required>
                                    <label class="form-check-label" for="validationFormCheck20">Assistant Coach</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                                    <input type="radio" class="form-check-input" id="validationFormCheck21" name="coacht" value="Batting Coach" required>
                                    <label class="form-check-label" for="validationFormCheck21">Batting Coach</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" class="form-check-input" id="validationFormCheck22" name="coacht" value="Bowling Coach" required>
                                    <label class="form-check-label" for="validationFormCheck22">Bowling Coach</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                                    <input type="radio" class="form-check-input" id="validationFormCheck23" name="coacht" value="Fielding Coach" required>
                                    <label class="form-check-label" for="validationFormCheck23">Fielding Coach</label>
                                    <div class="invalid-feedback">Please Choose Coaching Type</div>
                                </div>
                                <br>
                            </div>

                            <div class="col-md-6">
                                <label for="validationCustom26" class="form-label">Password</label>
                                <div class="input-group has-validation">
                                    <input type="password" class="form-control" id="validationCustom26" name="password" required>
                                    <div class="invalid-feedback">
                                        Please Enter Password
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom27" class="form-label">Comform Password</label>
                                <input type="password" class="form-control" id="validationCustom27" name="password1" required>
                                <div class="invalid-feedback">
                                    Please Enter Conform password
                                </div>
                            </div>
                            <div class="col-md-5">
                                <br>
                                <label class="form">Upload Photo</label>
                                <input type="file" class="form-control" aria-label="file" name="photo" required>
                                <label class="note">*Note :Photo Shoud Be JPG & Size Less Then 100kb</label>
                                <div class="invalid-feedback">
                                    Please Upload Photo
                                </div>
                            </div>
                            <br><br>
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        I Agree With All Terms and Conditions
                                    </label>
                                    <div class="invalid-feedback">
                                        You Must Agree Before Submitting.
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        I Read All Rules & Regulation
                                    </label>
                                    <div class="invalid-feedback">
                                        You Must Read All Rules Before Submitting.
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="col-md-12">
                                <center>
                                    <input class="btn btn-success" type="submit" name="register" value="Register" />
                                    <input class="btn btn-danger" type="reset" value="Reset" />
                                    <a class="btn btn-warning" data-toggle="modal" data-target="#loginModal" type="submit">Login</a>
                                </center>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src='https://use.fontawesome.com/4ecc3dbb0b.js'></script>

    <!-- End Registration Form -->

    <!-- Register In Database -->

    <?php


    if (isset($_POST['register'])) {
        $fname1 = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $father = $_POST['fname'];
        $mobile = $_POST['mobile'];
        $gn = $_POST['gn'];
        $dob = $_POST['dob'];
        $age = $_POST['agedata'];
        $email = $_POST['email'];
        $add = $_POST['address'];
        $dist = $_POST['district'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        $pin = $_POST['pincode'];
        $level = $_POST['level'];
        $c_type = $_POST['coacht'];
        $p=$_POST['password'];
        $p2=$_POST['password1'];
        $pass = md5($p);
        $re_pass = md5($p2);

        $img_up = true;

        $i_name = $_FILES['photo']['name'];

        if ($_FILES['photo']['size'] > 100000) {
            echo "<script>alert('Photo Size More Than 100kb');</script>";
            $img_up = false;
        }

        if (!($_FILES['photo']['type'] == "image/jpg" or $_FILES['photo']['type'] == "image/jpeg")) {
            echo "<script>alert('Photo Can Be JPG or JPEG Format');</script>";
            $img_up = false;
        }

        $img_path = "img_up/coach_img/" . $i_name;


        if ($img_up == true) {
            if (move_uploaded_file($_FILES['photo']['tmp_name'], $img_path)) {
                echo " ";
            } else {
                echo "<script>alert('Failed To Upload Photo Please Contact Site Admin');</script>";
                $img_up = false;
            }
        }

        // $pass = password_hash($password, PASSWORD_BCRYPT);
        // $re_pass = password_hash($re_password, PASSWORD_BCRYPT);
        $query = " SELECT * FROM `regcoach` WHERE email='$email';";
        $q = mysqli_query($con, $query);

        if ($r = mysqli_num_rows($q) > 0) {
            echo "<script>alert('Coach Already Register');</script>";
        } else {
            if ($img_up == false) {
                echo "<script>alert('Registration Cancel Please Try Later');</script>";
            } else {
                if ($pass == $re_pass) {
                    if (mysqli_query($con, "INSERT INTO `regcoach`(`first_name`, `last_name`, `father_name`, `mobile`, `gender`, `dob`, `age`, `email`, `address`, `district`, `state`, `country`, `pincode`, `coach_level`, `coach_type`, `pass`, `re_pass`, `photo`) VALUES ('$fname1','$lname','$father','$mobile','$gn','$dob','$age','$email','$add','$dist','$state','$country','$pin','$level','$c_type','$pass','$re_pass','$img_path')")) {
                        echo "<script>alert('Registration Successfully Please Submit The Form in Academy Thank You');</script>";
                    }
                } else {
                    echo "<script>alert('Password And Re-Type Password Doesn't Match');</script>";
                }
            }
        }
    }

    ?>

    <!-- End Register In Database -->

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