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
          if($_SESSION['role']=='coach')
          {
            header("location:../coach/coach.php");
          }
      }  
?>
<?php
$ads = "SELECT * FROM `admin`";
$qr = mysqli_query($con, $ads);
$adrec = mysqli_fetch_row($qr);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Users / Profile - Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon1.png" rel="icon">
  <link href="assets/img/logo2.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">



</head>

<body>
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="adindex.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo2.png" alt="">
        <span class="d-none d-lg-block">Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">5</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Player Query</h4>
                <p></p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Match Not Complete</h4>
                <p></p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Player Add Success</h4>
                <p></p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Coach Query</h4>
                <p></p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->



        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?php echo $adrec[16]; ?>" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $adrec[1]; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $adrec[1]; ?></h6>
              <span><?php echo $adrec[5]; ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>


            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="adindex.php">
        <i class="bi bi-grid-fill"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-house-door-fill"></i> 
        <span>Home</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="slide.php">
              <i class="bi bi-circle"></i><span>Slide</span>
            </a>
          </li>
          <li>
            <a href="photo.php">
              <i class="bi bi-circle"></i><span>Photos</span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-people-fill"></i> 
        <span>Association</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="managementad.php">
              <i class="bi bi-circle"></i><span>Management</span>
            </a>
          </li>
          <li>
            <a href="adteam.php">
              <i class="bi bi-circle"></i><span>Team</span>
            </a>
          </li>
          <li>
            <a href="playerlist1.php">
              <i class="bi bi-circle"></i><span>Player List</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person-bounding-box"></i>  
        <span>Player</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="registerplayer.php">
              <i class="bi bi-circle"></i><span>Player Registration</span>
            </a>
          </li>
          <li>
            <a href="playertrial.php">
              <i class="bi bi-circle"></i><span>Trial Result</span>
            </a>
          </li>
          <li>
            <a href="finalp.php">
              <i class="bi bi-circle"></i><span>Final Result</span>
            </a>
          </li>
          <li>
            <a href="pteam.php">
              <i class="bi bi-circle"></i><span>Player Team </span>
            </a>
          </li>
          <li>
            <a href="playermatch.php">
              <i class="bi bi-circle"></i><span>Player Matches</span>
            </a>
          </li>
          <li>
            <a href="report.php">
              <i class="bi bi-circle"></i><span>Player Report </span>
            </a>
          </li>
          <li>
            <a href="playerpractice.php">
              <i class="bi bi-circle"></i><span>Practice Time </span>
            </a>
          </li>
          <li>
            <a href="pgym.php">
              <i class="bi bi-circle"></i><span>Gym Time </span>
            </a>
          </li>
          <li>
            <a href="pquery.php">
              <i class="bi bi-circle"></i><span>Player Query</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Player -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav1" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person-square"></i>  
        <span>Coach</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav1" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="coachreg.php">
              <i class="bi bi-circle"></i><span>Coach Registration</span>
            </a>
          </li>
          <li>
            <a href="coachfinal.php">
              <i class="bi bi-circle"></i><span>Final List</span>
            </a>
          </li>
          <li>
            <a href="coachlist.php">
              <i class="bi bi-circle"></i><span>Coach List</span>
            </a>
          </li>
          <li>
            <a href="cp.php">
              <i class="bi bi-circle"></i><span>Coach-Player List</span>
            </a>
          </li>
          <li>
            <a href="coachpractice.php">
              <i class="bi bi-circle"></i><span>Coach Practice </span>
            </a>
          </li>
          <li>
            <a href="coachmatches.php">
              <i class="bi bi-circle"></i><span>Coach Matches</span>
            </a>
          </li>
          <li>
            <a href="coachplayer.php">
              <i class="bi bi-circle"></i><span>Player List</span>
            </a>
          </li>
          <li>
            <a href="coachquery.php">
              <i class="bi bi-circle"></i><span>Coach Query</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-record-circle-fill"></i> 
        <span>Stadium</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="featurem.php">
              <i class="bi bi-circle"></i><span>Feature Matches</span>
            </a>
          </li>

        </ul>
      </li><!-- End Stadium Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-messenger"></i> 
        <span>Contact</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="contact.php">
              <i class="bi bi-circle"></i><span>Contact</span>
            </a>
          </li>

        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link " href="users-profile.php" class="active">
          <i class="bi bi-person-fill"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.php">
          <i class="bi bi-dash-circle-fill"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="adindex.php">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
              <img src="<?php echo $adrec[16]; ?>" height="120" width="120" alt="Profile" class="rounded-circle" />
              <h2><?php echo $adrec[1]; ?></h2>
              <h3><?php echo $adrec[5]; ?></h3>
              <div class="social-links mt-2">
                <a href="<?php echo $adrec[9]; ?>" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="<?php echo $adrec[10]; ?>" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="<?php echo $adrec[11]; ?>" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="<?php echo $adrec[12]; ?>" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">About</h5>
                  <p class="small fst-italic"><u style="color:#007BFF;"><?php echo $adrec[2]; ?></u></p>

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $adrec[1]; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Company</div>
                    <div class="col-lg-9 col-md-8"><?php echo $adrec[4]; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Job</div>
                    <div class="col-lg-9 col-md-8"><?php echo $adrec[5]; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Country</div>
                    <div class="col-lg-9 col-md-8"><?php echo $adrec[6]; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8"><?php echo $adrec[7]; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8"><?php echo $adrec[8]; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $adrec[3]; ?></div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                  <!-- Add Modal -->
                  <?php
                  
                  if (isset($_POST['update'])) {
                    $i_name = $_FILES['image']['name'];
                    $img_path = "photo/" . $i_name;
                    move_uploaded_file($_FILES['image']['tmp_name'], $img_path);

                    $sq = "UPDATE `admin` SET `photo` = '$img_path' WHERE `admin`.`id` = 1;";
                    $qry = mysqli_query($con, $sq);
                    if ($qry) {
                      echo "<script>alert('Profile Update Success');</script>";
                      echo "<script>window.location.href='users-profile.php';</script>";
                    }
                  }

                  ?>

                  <div class="modal fade" id="slideModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
                          <button type="button" class="close btn btn-warning" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                              <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                            </div><br>
                            <div class="text-center">
                              <button type="submit" name="update" class="btn btn-success">Save</button>&nbsp;&nbsp;&nbsp;
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Profile Edit Form -->
                  <form method="post">
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="<?php echo $adrec[16]; ?>" height="120" width="120" class="rounded-circle" />
                        <div class="pt-2">

                          <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#slideModal" title="Upload new profile image"><i class="bi bi-upload"></i></a>

                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fullName" type="text" class="form-control" id="fullName" value="<?php echo $adrec[1]; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="about" class="form-control" id="about" style="height: 100px"><?php echo $adrec[2]; ?></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="company" type="text" class="form-control" id="company" value="<?php echo $adrec[4]; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="job" type="text" class="form-control" id="Job" value="<?php echo $adrec[5]; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="country" type="text" class="form-control" id="Country" value="<?php echo $adrec[6]; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="text" class="form-control" id="Address" name="add" value="<?php echo $adrec[7]; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="<?php echo $adrec[8]; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="<?php echo $adrec[3]; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="twitter" type="text" class="form-control" id="Twitter" value="<?php echo $adrec[9]; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="text" class="form-control" id="Facebook" name='fb' value="<?php echo $adrec[10]; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="text" class="form-control" id="Instagram" name='insta' value="<?php echo $adrec[11]; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="text" class="form-control" id="Linkedin" name='linkin' value="<?php echo $adrec[12]; ?>">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" name='save'>Save Changes</button>
                    </div>


                  </form><!-- End Profile Edit Form -->

                </div>
                <?php

                if (isset($_POST['save'])) {
                  $name = $_POST['fullName'];
                  $about = $_POST['about'];
                  $company = $_POST['company'];
                  $job = $_POST['job'];
                  $country = $_POST['country'];
                  $add = $_POST['add'];
                  $email = $_POST['email'];
                  $twitter = $_POST['twitter'];
                  $fb = $_POST['fb'];
                  $insta = $_POST['insta'];
                  $link = $_POST['linkin'];
                  $phone = $_POST['phone'];

                  $sq = "UPDATE `admin` SET `name` = '$name', `about` = '$about', `email` = '$email', `company` = '$company', `job` = '$job', `country` = '$country', `address` = '$add', `phone` = '$phone', `twiter` = '$twitter', `fb` = '$fb', `insta` = '$insta', `linkin` = '$link' WHERE `admin`.`id` = 1;";
                  $qry = mysqli_query($con, $sq);
                  if ($qry) {
                    echo "<script>alert('Admin Data Update Sucessfully');</script>";
                    echo "<script>window.location.href='users-profile.php';</script>";
                  }
                }



                ?>


                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->

                  <?php
                  if (isset($_POST['change'])) {
                   
                    $pass = md5($_POST['password']);

                    $psq = "SELECT * FROM `admin` WHERE password='$pass';";
                    $pqy = mysqli_query($con, $psq);
                    $data = mysqli_fetch_array($pqy);
                    $password = $data[13];
                    $newpass = md5($_POST['newpassword']);
                    $renewpass = md5($_POST['renewpassword']);

                    if ($password == $pass) {
                      if ($newpass != $renewpass) {
                        //echo "<h5>New Password and Re-enter Password Not Match</h5>";
                        echo "<script>alert('New Password and Re-enter Password Not Match');</script>";
                      } else {
                        $sqp = "UPDATE `admin` SET `password` = '$renewpass', `newpass` = '$renewpass', `re_pass` = '$renewpass' WHERE `admin`.`id` = 1;";
                        $qr = mysqli_query($con, $sqp);
                        if ($qr) {
                          echo "<script>alert('Password Change Sucessfully');</script>";
                          echo "<script>window.location.href='users-profile.php';</script>";
                        }
                      }
                    } else {
                      echo "<script>alert('Incorrect Current Password');</script>";
                    }
                  }

                  ?>

                  <form method="post">

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword" required>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" name="change">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->



  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Cricket Academy & Association</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!--  Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>