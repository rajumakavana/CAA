<?php
    include 'connection.php';
    session_start();
    if(isset($_SESSION['role']))
    {
        if($_SESSION['role']!='admin' and $_SESSION['role']!='coach')
        {
            header("location:player/player.php");
        }
        elseif($_SESSION['role']=='admin')
        {
            header("location:admin/adindex.php");
        }
        else
        {
            header("location:coach/coach.php");
        }
    }

$ads = "SELECT * FROM `slide`WHERE `id`=1";
$qr = mysqli_query($con, $ads);
$fetch = mysqli_fetch_row($qr);

$ad2 = "SELECT * FROM `slide`WHERE `id`=2";
$qr2 = mysqli_query($con, $ad2);
$fetch2 = mysqli_fetch_row($qr2);

$ad3 = "SELECT * FROM `slide`WHERE `id`=3";
$qr3 = mysqli_query($con, $ad3);
$fetch3 = mysqli_fetch_row($qr3);

$ad4 = "SELECT * FROM `photos`WHERE `id`=1";
$qr4 = mysqli_query($con, $ad4);
$fetch4 = mysqli_fetch_row($qr4);

$ad5 = "SELECT * FROM `management`WHERE `id`=1";
$qr5 = mysqli_query($con, $ad5);
$fetch5 = mysqli_fetch_row($qr5);

$ad6 = "SELECT * FROM `management`WHERE `id`=2";
$qr6 = mysqli_query($con, $ad6);
$fetch6 = mysqli_fetch_row($qr6);

$ad7 = "SELECT * FROM `management`WHERE `id`=3";
$qr7 = mysqli_query($con, $ad7);
$fetch7 = mysqli_fetch_row($qr7);

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="styleload.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <style>
        /*for Demo Only*/
.demo-row {
  background-color: #333;
  padding: 50px 0;
}


/*Implement*/
.sponsor-feature {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    min-height: 150px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 5px 0;
}

#id-sponsors .carousel {
    margin-bottom: 20px;
}
#id-sponsors .item {
    padding-bottom: 20px;
}
#id-sponsors .carousel-indicators {
    bottom: -50px;
}
    </style>
    
</head>

<body class="bg-white" >
    <div id="preloader"></div>
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
                    <a href="index.php" class="nav-item nav-link active">Home</a>
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
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">About Us</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="rules.php" class="dropdown-item">Rules</a>
                            <a href="mission.php" class="dropdown-item">Mission & Vision</a>
                            <a href="terms.php" class="dropdown-item">Terms & Condition</a>
                            <a href="privacy.php" class="dropdown-item">Privacy Policy</a>
                            <a href="contactus.php" class="dropdown-item">Contact</a>
                        </div>
                    </div>
                   
                        <a class="nav-item nav-link " data-toggle="modal" data-target="#loginModal"
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

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="blog-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?php echo 'admin/'.$fetch[3]; ?>" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h3 class="text-primary text-capitalize m-0">Start Your Cricket Journey</h3>
                        <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">Best Cricket
                            Academy in Town</h2>
                        <a href="pregistration.php" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Register Now</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <video autoplay loop muted width="100%"><source  src="img/video.mp4" type="video/mp4"></video>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h3 class="text-primary text-capitalize m-0"></h3>
                        <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize"></h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?php echo 'admin/'.$fetch2[3]; ?>" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h3 class="text-primary text-capitalize m-0"></h3>
                        <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize"></h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <video autoplay loop muted width="100%"><source  src="img/video2.mp4" type="video/mp4"></video>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h3 class="text-primary text-capitalize m-0"></h3>
                        <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize"></h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?php echo 'admin/'.$fetch3[3]; ?>" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h3 class="text-primary text-capitalize m-0"></h3>
                        <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize"></h2>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Association & Academy Class Start -->
    <div class="container gym-class mb-5">
        <div class="row px-3">
            <div class="col-md-6 p-0">
                <div
                    class="gym-class-box d-flex flex-column align-items-end justify-content-center bg-primary text-right text-white py-5 px-5">
                    <!-- <i><img src="img/cricket.png"></i> -->
                    <h3 class="display-4 mb-3 text-white font-weight-bold">Why This Cricket Association ?</h3>
                    <p>
                        Cricket Academy & Association formed by Mr.Makavana chairman of non profitable organization.
                        We focus on each and every individual player to develop their sporting skill and aptitude.
                        Association Provide Multiple Facility Like Stadium,Gym,Nets,Tournamate etc.
                    </p>

                </div>
            </div>
            <div class="col-md-6 p-0">
                <div
                    class="gym-class-box d-flex flex-column align-items-start justify-content-center bg-secondary text-left text-white py-5 px-5">
                    <!-- <i><img src="img/cricket2.jpg"></i> -->
                    <h3 class="display-4 mb-3 text-white font-weight-bold">Why This Cricket Academy ?</h3>
                    <p>
                        It is the best plateform only for really telented players,who could become future of cricket, which is considered as god of all games in our nation.The players, who play in this Cricket Academy & Association, regularly participate in state level cricket tournament,
                        it means, a quality practice and competition will be provided to players.
                    </p>

                </div>
            </div>
        </div>
    </div>
    <!-- Association & Academy Class End -->


    <!-- About Start -->
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img class="img-fluid mb-4 mb-lg-0" src="<?php echo 'admin/'.$fetch4[2]; ?>" alt="Image">
            </div>
            <div class="col-lg-6">
                <h2 class="display-4 font-weight-bold mb-4">25 Years Experience</h2>
                <p>Cricket Academy & Association has the motto of giving opportunities to passionate players and has a considerable contribution in increasing level of players.
                </p>
                <div class="row py-2">
                    <div class="col-sm-6">
                        <i class="fa-sharp fa-solid fa-cricket-bat-ball"></i>
                        <i class="flaticon-barbell display-2 text-primary"></i>
                        <h4 class="font-weight-bold">Certified Academy Gym</h4>
                        <p>This Association Provide Gym For Every Players.</p>
                    </div>
                    <div class="col-sm-6">
                        <i class="flaticon-medal display-2 text-primary"></i>
                        <h4 class="font-weight-bold">Multiple Tournamate & Award</h4>
                        <p>Cricket Academy & Association Arrange The Multiple Tournamate for Players.</p>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-lg-4 p-0">
                <div class="d-flex align-items-center bg-secondary text-white px-5" style="min-height: 300px;">
                    <i class="flaticon-training display-3 text-primary mr-3"></i>
                    <div class="">
                        <h2 class="text-white mb-3">Progression</h2>
                        <p>Reporting Every Player Progress,Skills,Monthly.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="d-flex align-items-center bg-primary text-white px-5" style="min-height: 300px;">
                    <i class="flaticon-weightlifting display-3 text-secondary mr-3"></i>
                    <div class="">
                        <h2 class="text-white mb-3">Workout</h2>
                        <p>Physical fitness & strengh develep in gym.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="d-flex align-items-center bg-secondary text-white px-5" style="min-height: 300px;">
                    <i class="flaticon-t-shirt display-3 text-primary mr-3"></i>
                    <div class="">
                        <h2 class="text-white mb-3">Maditation</h2>
                        <p>Maditation Important for Every in game it effect on mind and cricket career.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Academy Feature Start -->
    <div class="container feature pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Why Choose Us?</h4>
            <h4 class="display-4 font-weight-bold">Benifits of Joining Our Academy</h4>
        </div>
        <div class="row">
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="img/feature-1.jpeg" alt="Image">
                        
                        <i class="flaticon-barbell"></i> 
                        
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">Videos Instruction</h4>
                        <p>In This Academy Provide Video Analysis And Increase Cricket Knowledge using Video. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="img/feature-2.jpeg" alt="Image">
                        <i class="flaticon-training"></i>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">Training Calendar</h4>
                        <p>Cricket Academy & Association has Proper Training Calendar. Training Provide By Experience Coaches.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="img/feature-3.jpg" alt="Image">
                        <i class="flaticon-trends"></i>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">Player Progess Report</h4>
                        <p>In This Academy Provide Every Player Progess Report Monthly.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="img/feature-4.jpg" alt="Image">
                        <i class="flaticon-support"></i>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">Community Support</h4>
                        <p>Player share Experience,Dressing room,it create comfortable environment.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Academy Feature End -->


    


   

    <!-- Testimonial Start -->
    <div class="container-fluid position-relative testimonial my-5">
        <div class="container">
            <div class="row px-3 align-items-center">
                <div class="col-md-6 bg-secondary">
                    <div class="d-flex align-items-center px-3" style="min-height: 450px;">
                        <div id="carouselId" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselId" data-slide-to="1"></li>
                                <li data-target="#carouselId" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="d-flex align-items-center mb-4 text-white">
                                        <img width="80" height="80" class="rounded-circle bg-dark p-2"
                                            src="<?php echo 'admin/'.$fetch5[4]; ?>" alt="Image">
                                        <div class="pl-4">
                                            <h4 class="text-primary"><?php echo $fetch5[1]; echo '&nbsp';?><?php echo $fetch5[2]; ?></h4>
                                            <p class="m-0"><?php echo $fetch5[3]; ?></p>
                                        </div>
                                    </div>
                                    <div class="testimonial-text position-relative border bg-dark text-white mb-5 p-4">
                                        You don’t play for the crowd, you play for the country.Enjoy the game & Chase your dreams. Dreams do come true.
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex align-items-center mb-4 text-white">
                                        <img width="80" height="80" class="rounded-circle bg-dark p-2"
                                            src="<?php echo 'admin/'.$fetch6[4]; ?>" alt="Image">
                                        <div class="pl-4">
                                            <h4 class="text-primary"><?php echo $fetch6[1]; echo '&nbsp';?><?php echo $fetch6[2]; ?></h4>
                                            <p class="m-0"><?php echo $fetch6[3]; ?></p>
                                        </div>
                                    </div>
                                    <div class="testimonial-text position-relative border bg-dark text-white mb-5 p-4">
                                        If you want to do something, achieve something, you can’t be thinking all the time of what you don’t have.Cricket is the only sport in the world where you are absolutely horrible at something and you still need to go out and do it. 
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex align-items-center mb-4 text-white">
                                        <img width="80" height="80" class="rounded-circle bg-dark p-2"
                                            src="<?php echo 'admin/'.$fetch7[4]; ?>" alt="Image">
                                        <div class="pl-4">
                                            <h4 class="text-primary"><?php echo $fetch7[1]; echo '&nbsp';?><?php echo $fetch7[2]; ?></h4>
                                            <p class="m-0"><?php echo $fetch7[3]; ?></p>
                                        </div>
                                    </div>
                                    <div class="testimonial-text position-relative border bg-dark text-white mb-5 p-4">
                                        Nobody goes undefeated all the time. If you can pick up after a crushing defeat, and go on to win again, you are going to be a champion some day.Nothing is easy in cricket. Maybe when you watch it on TV, it looks easy. But it is not. You have to use your brain and time the ball.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pl-md-3 d-none d-md-block">
                        <!-- <h4 class="text-primary">Testimonial</h4> -->
                        <h4 class="display-4 mb-4 text-white font-weight-bold">What Our Management Say?</h4>
                        <p class="m-0 text-white">We Are Provide Our 100% Effort For Develop Cricket And Our Aim To There Are Our Multiple Player Can Play In International Level.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Sponsor Panel -->
    <div class="demo-row">
        <div class="container" id="id-sponsors">
            <div class="text-center">
                <h2 style="margin:5px 0;color:#fff; margin-top:-30px;">Our Sponsors</h2>
            </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="row">
        <div class="col-sm-3 col-xs-6">
          <div class="sponsor-feature"><img alt="" src="img/sabaka_achar.png" style="width: 200px;" /></div>
        </div>
        <div class="col-sm-3 col-xs-6">
          <div class="sponsor-feature"><img alt="" src="img/sagar_sound.jpg" style="width: 100px;" /></div>
        </div>
        <div class="col-sm-3 col-xs-6">
          <div class="sponsor-feature"><img alt="" src="img/sadhana_logo.jpg" style="width: 155px;" /></div>
        </div>
        <div class="col-sm-3 col-xs-6">
          <div class="sponsor-feature"><img alt="" src="img/sky2.png" style="width: 180px;" /></div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
      <div class="col-sm-3 col-xs-6">
          <div class="sponsor-feature"><img alt="" src="img/sk_programing.jpg" style="width: 100px;" /></div>
        </div>
        <div class="col-sm-3 col-xs-6">
          <div class="sponsor-feature"><img alt="" src="img/sky.jpg" style="width: 160px;" /></div>
        </div>
        <div class="col-sm-3 col-xs-6">
          <div class="sponsor-feature"><img alt="" src="img/rk.png" style="width: 100px;" /></div>
        </div>
        <div class="col-sm-3 col-xs-6">
          <div class="sponsor-feature"><img alt="" src="img/sagar_sound.jpg" style="width: 100px;" /></div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>


    <!-- Footer Start -->
    <div class="footer container-fluid mt-5 py-5 px-sm-3 px-md-5 text-white">

        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Cricket Academy & Association</p>
                <p><i class="fa fa-phone mr-2"></i>+91 6355208127</p>
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
   
    <script>
        $('#carouselExampleIndicators').carousel({
  interval: 3000,
  cycle: true;
}); 
</script>

    <script>
        var loader = document.getElementById("preloader");
        window.addEventListener("load",function(){
        loader.style.display = "none";
        })
    </script>
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
    

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>

    
    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!--  Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
