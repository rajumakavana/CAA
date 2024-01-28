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
  if ($_SESSION['role'] == 'coach') {
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

  <title>Ticket Booking</title>
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

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="adindex.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo2.png" alt="Cricket Academy & Association">
        <span class="d-none d-lg-block">Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="search" placeholder="Search" value="<?php if(isset($_POST['find'])){ $val=$_POST['search'];echo "$val"; } ?>" title="Enter search keyword">
        <button type="submit" title="Search" name="find"><i class="bi bi-search"></i></button>
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
        <a class="nav-link" href="adindex.php">
          <i class="bi bi-grid-fill"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-house-door-fill"></i>
          <span>Home</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
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
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
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
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
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
              <i class="bi bi-circle"></i><span>Player Team</span>
            </a>
          </li>
          <li>
            <a href="playermatch.php">
              <i class="bi bi-circle"></i><span>Player Matches</span>
            </a>
          </li>
          <li>
            <a href="report.php">
              <i class="bi bi-circle"></i><span>Player Reports</span>
            </a>
          </li>
          <li>
            <a href="playerpractice.php">
              <i class="bi bi-circle"></i><span>Practice Time</span>
            </a>
          </li>
          <li>
            <a href="pgym.php">
              <i class="bi bi-circle"></i><span>Gym Time</span>
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
        <ul id="forms-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
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
            <a href="coachteam.php">
              <i class="bi bi-circle"></i><span>Coach Team </span>
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
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="featurem.php">
              <i class="bi bi-circle"></i><span>Feature Matches</span>
            </a>
          </li>

        </ul>
      </li><!-- End Charts Nav -->

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
        <a class="nav-link collapsed" href="users-profile.php">
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
      <h1>Ticket Report</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="adindex.php">Dashboard</a></li>
          <li class="breadcrumb-item active">Online Booking Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

           

      <div><h4>Booking List</h4></div>  
    <div class="table-responsive">
     <table class="table table-hover table-bordered table-success">
        <thead class="table-dark">
          <tr>
          <th scope="col">Booking Id</th>
            <th scope="col">Match No</th>
            <th scope="col">Format</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Team 1</th>
            <th scope="col">Team 2</th>
            <th scope="col">Email</th>
            <th scope="col">Seat</th>
            <th scope="col">Price</th>
            <th scope="col">Delete</th>
            
          </tr>
        </thead>
        
        <tbody>
        <?php
              if(isset($_POST['find']))
              {
                  $filter=$_POST['search'];
                  $sql="SELECT * FROM `ticket` WHERE `bkg_id` like '%$filter%' or `match_no` LIKE '%$filter%' or `format` LIKE '%$filter%' or `match_date` LIKE '%$filter%' or `match_time` LIKE '%$filter%' or `team1` LIKE '%$filter%' or `team2` LIKE '%$filter%' or `email` LIKE '%$filter%' or `total_seat` LIKE '%$filter%' or `price` LIKE '%$filter%';";
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
                  echo "<td><a class='btn btn-danger' href='delbook.php?id=$row[0]'><i class='bi bi-trash'></a></td>";
                  echo "</tr>";
                      }
                    }
                    else
                    {
                      echo "<td align='center' colspan='11'>No Record Found</td>";
                  echo "</tr>";
                    }
                  }
                  else
                  {
              $data = " SELECT * FROM `ticket` ";
              $qry = mysqli_query($con, $data);
              $result=mysqli_num_rows($qry);
              
    
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
                  echo "<td><a class='btn btn-danger' href='delbook.php?id=$row[0]'><i class='bi bi-trash'></i></a></td>";
                  echo "</tr>";
                } 
                  }
              ?>
            </tbody>
    </table>
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