<?php
include 'connection.php';

$ads = "SELECT * FROM `team`WHERE `id`=1";
$qr = mysqli_query($con, $ads);
$fetch = mysqli_fetch_row($qr);

$ad2 = "SELECT * FROM `team`WHERE `id`=2";
$qr2 = mysqli_query($con, $ad2);
$fetch2 = mysqli_fetch_row($qr2);

$ad3 = "SELECT * FROM `team`WHERE `id`=3";
$qr3 = mysqli_query($con, $ad3);
$fetch3 = mysqli_fetch_row($qr3);

$ad4 = "SELECT * FROM `team`WHERE `id`=4";
$qr4 = mysqli_query($con, $ad4);
$fetch4 = mysqli_fetch_row($qr4);

$ad5 = "SELECT * FROM `team`WHERE `id`=5";
$qr5 = mysqli_query($con, $ad5);
$fetch5 = mysqli_fetch_row($qr5);

$ad6 = "SELECT * FROM `team`WHERE `id`=6";
$qr6 = mysqli_query($con, $ad6);
$fetch6 = mysqli_fetch_row($qr6);

$ad7 = "SELECT * FROM `team`WHERE `id`=7";
$qr7 = mysqli_query($con, $ad7);
$fetch7 = mysqli_fetch_row($qr7);

$ad8 = "SELECT * FROM `team`WHERE `id`=8";
$qr8 = mysqli_query($con, $ad8);
$fetch8 = mysqli_fetch_row($qr8);

$ad9 = "SELECT * FROM `team`WHERE `id`=9";
$qr9 = mysqli_query($con, $ad9);
$fetch9 = mysqli_fetch_row($qr9);

$ad10 = "SELECT * FROM `team`WHERE `id`=10";
$qr10 = mysqli_query($con, $ad10);
$fetch10 = mysqli_fetch_row($qr10);

$ad11 = "SELECT * FROM `team`WHERE `id`=11";
$qr11 = mysqli_query($con, $ad11);
$fetch11 = mysqli_fetch_row($qr11);

$ad12 = "SELECT * FROM `team`WHERE `id`=12";
$qr12 = mysqli_query($con, $ad12);
$fetch12 = mysqli_fetch_row($qr12);

$ad13 = "SELECT * FROM `team`WHERE `id`=13";
$qr13 = mysqli_query($con, $ad13);
$fetch13 = mysqli_fetch_row($qr13);

$ad14 = "SELECT * FROM `team`WHERE `id`=14";
$qr14 = mysqli_query($con, $ad14);
$fetch14 = mysqli_fetch_row($qr14);

$ad15 = "SELECT * FROM `team`WHERE `id`=15";
$qr15 = mysqli_query($con, $ad15);
$fetch15 = mysqli_fetch_row($qr15);

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
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Association</a>
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
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">About Us</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="rules.php" class="dropdown-item">Rules</a>
                            <a href="mission.php" class="dropdown-item">Mission & Vision</a>
                            <a href="terms.php" class="dropdown-item">Terms & Condition</a>
                            <a href="privacy.php" class="dropdown-item">Privacy Policy</a>
                            <a href="contact.php" class="dropdown-item">Contact</a>
                        </div>
                    </div>
                    <a class="nav-item nav-link " data-toggle="modal" data-target="#loginModal"
                        type="submit">Login</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

     <!-- Page Header Start -->
     <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5"
            style="min-height: 400px">
            <h4 class="display-5 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Cricket Team</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white px-2">Association</p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Team</p>
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
                <div class="modal-footer">Cricket Academy & Association</div>
            </div>
        </div>
    </div>

    <!-- End Login Form -->

    <!-- Cricket Team Start -->
    <div class="container pt-5 team">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Cricket Academy & Association </h4>
            <h4 class="display-4 font-weight-bold">Our Cricket Team (15 Man Squad)</h4>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="<?php echo 'admin/'.$fetch[4]; ?>" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary"><?php echo $fetch[1]; echo '&nbsp';?><?php echo $fetch[2]; ?></h4>
                        <p class="card-text">Batsman (C)</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="<?php echo 'admin/'.$fetch2[4]; ?>" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary"><?php echo $fetch2[1]; echo '&nbsp';?><?php echo $fetch2[2]; ?></h4>
                        <p class="card-text">Batsman</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="<?php echo 'admin/'.$fetch3[4]; ?>" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary"><?php echo $fetch3[1]; echo '&nbsp';?><?php echo $fetch3[2]; ?></h4>
                        <p class="card-text">Batsman</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="<?php echo 'admin/'.$fetch4[4]; ?>" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary"><?php echo $fetch4[1]; echo '&nbsp';?><?php echo $fetch4[2]; ?></h4>
                        <p class="card-text">Wicket Keeper</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-5 team">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="<?php echo 'admin/'.$fetch5[4]; ?>" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary"><?php echo $fetch5[1]; echo '&nbsp';?><?php echo $fetch5[2]; ?></h4>
                        <p class="card-text">All Rounder</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="<?php echo 'admin/'.$fetch6[4]; ?>" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary"><?php echo $fetch6[1]; echo '&nbsp';?><?php echo $fetch6[2]; ?></h4>
                        <p class="card-text">Leg Spinner</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="<?php echo 'admin/'.$fetch7[4]; ?>" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary"><?php echo $fetch7[1]; echo '&nbsp';?><?php echo $fetch7[2]; ?></h4>
                        <p class="card-text">Medium Pacer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="<?php echo 'admin/'.$fetch8[4]; ?>" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary"><?php echo $fetch8[1]; echo '&nbsp';?><?php echo $fetch8[2]; ?></h4>
                        <p class="card-text">Fast Bolwer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-5 team">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="<?php echo 'admin/'.$fetch9[4]; ?>" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary"><?php echo $fetch9[1]; echo '&nbsp';?><?php echo $fetch9[2]; ?></h4>
                        <p class="card-text">Medium Fast</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="<?php echo 'admin/'.$fetch10[4]; ?>" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary"><?php echo $fetch10[1]; echo '&nbsp';?><?php echo $fetch10[2]; ?></h4>
                        <p class="card-text">Wicket Keeper</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="<?php echo 'admin/'.$fetch11[4]; ?>" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary"><?php echo $fetch11[1]; echo '&nbsp';?><?php echo $fetch11[2]; ?></h4>
                        <p class="card-text">All Rounder</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="<?php echo 'admin/'.$fetch12[4]; ?>" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary"><?php echo $fetch12[1]; echo '&nbsp';?><?php echo $fetch12[2]; ?></h4>
                        <p class="card-text">Off Spinner</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-5 team">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="<?php echo 'admin/'.$fetch13[4]; ?>" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary"><?php echo $fetch13[1]; echo '&nbsp';?><?php echo $fetch13[2]; ?></h4>
                        <p class="card-text">Off Break</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="<?php echo 'admin/'.$fetch14[4]; ?>" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary"><?php echo $fetch14[1]; echo '&nbsp';?><?php echo $fetch14[2]; ?></h4>
                        <p class="card-text">Batsman</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="<?php echo 'admin/'.$fetch15[4]; ?>" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary"><?php echo $fetch15[1]; echo '&nbsp';?><?php echo $fetch15[2]; ?></h4>
                        <p class="card-text">Medium Pacer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
     <!-- Cricket Team End-->
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
