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
  <link href="css/styleprofile.css" rel="stylesheet">

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
          <a href="player.php" class="nav-item nav-link active">Home</a>
          <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Association</a>
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
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
      <h4 class="display-5 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Welcome To Cricket Academy & Association</h4>
      <div class="d-inline-flex">
        <p class="m-0 text-white"><a class="text-white"><?php echo $_SESSION['firstname']; echo '&nbsp'; ?><?php echo $_SESSION['lastname']; ?></a></p>
      </div>
    </div>
  </div>

  <!-- Page Header End -->

  <!-- profile update -->
  <?php
                  if (isset($_POST['update'])) {
                    $i_name = $_FILES['image']['name'];
                    $img_path = "img_up/player_img/" . $i_name;
                    move_uploaded_file($_FILES['image']['tmp_name'], $img_path);

                    $sq = "UPDATE `finalplist` SET `photo` = '$img_path' WHERE `finalplist`.`id` = '$id';";
                    $qry = mysqli_query($con, $sq);
                    if ($qry) {
                      echo "<script>alert('Profile Update Success Please Login Again');</script>";
                      echo "<script>window.location.href='player.php';</script>";
                    }
                  }

  ?>
           <div class="modal fade" id="profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
                          <button type="button" class="close btn btn-warning" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form class="needs-validation" method="POST" enctype="multipart/form-data" novalidate>
                            <div class="form-group">
                              <input type="file" name="image" class="form-control-file" id="validation1" required>
                              <div class="invalid-feedback">Please Choose Profile Photo</div>
                            </div>
                            <div class="text-center">
                              <button type="submit" name="update" class="btn btn-success"><i class="fa fa-upload"></i></button>&nbsp;&nbsp;&nbsp;
                              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i></button>
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                        </div>
                      </div>
                    </div>
                  </div>
  <!-- End profile update -->
    
  <!-- /# row -->
  <div class="table-responsive">
    <div class="profile">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="user-profile">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="user-photo m-b-30">
                      <img class="img-fluid" src="<?php echo "../" . $_SESSION['p_photo']; ?>" width="200" height="200" alt="Profile Image" />
                      <div class="pt-2">
                          <a href="" class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#profile" title="Upload New Profile Image" style="border-radius: 5px 10px;"><i class="fa fa-upload"></i></a>
                      </div>
                      <br>
                    </div>
                    <div class="user-profile-name"><?php echo $_SESSION['firstname']; echo '&nbsp'; ?><?php echo $_SESSION['lastname']; ?></div>
                    <div class="user-Location">
                      <i class="fa fa-map-marker-alt mr-2"></i> In Cricket Academy & Association
                    </div>
                    <div class="user-work"><br>
                      <h4>Basic information</h4>
                      <div class="birthday-content">
                        <span class="contact-title">Player ID:</span>
                        <span class="birth-date"><?php echo $_SESSION['p_id']; ?></span>
                      </div>
                      <div class="birthday-content">
                        <span class="contact-title">Player Name:</span>
                        <span class="birth-date"><?php echo $_SESSION['firstname'];
                                                  echo '&nbsp'; ?><?php echo $_SESSION['lastname']; ?></span>
                      </div>
                      <div class="birthday-content">
                        <span class="contact-title">Father Name:</span>
                        <span class="birth-date"><?php echo $_SESSION['f_name']; ?></span>
                      </div>
                      <div class="birthday-content">
                        <span class="contact-title">Mother Name:</span>
                        <span class="birth-date"><?php echo $_SESSION['m_name']; ?></span>
                      </div>
                      <div class="birthday-content">
                        <span class="contact-title">Birthday:</span>
                        <span class="birth-date"><?php echo $_SESSION['p_dob']; ?></span>
                      </div>
                      <div class="gender-content">
                        <span class="contact-title">Gender:</span>
                        <span class="gender"><?php echo $_SESSION['gn']; ?></span>
                      </div>
                      <div class="gender-content">
                        <span class="contact-title">Age:</span>
                        <span class="gender"><?php echo $_SESSION['p_age']; ?></span>
                      </div>


                    </div>
                  </div>
                  <div class="col-lg-8">
                    <div class="custom-tab user-profile-tab">
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                          <h6>Cricket Information</h6>
                        </li>
                      </ul>
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="1">
                          <div class="contact-information">
                            <div class="phone-content">
                              <span class="contact-title">Cricket Level:</span>
                              <span class="phone-number"><?php echo $_SESSION['p_level']; ?></span>
                            </div>
                            <div class="address-content">
                              <span class="contact-title">Batting Arm:</span>
                              <span class="mail-address"><?php echo $_SESSION['bat']; ?></span>
                            </div>
                            <div class="email-content">
                              <span class="contact-title">Wicket Keeper:</span>
                              <span class="contact-email"><?php echo $_SESSION['p_wk']; ?></span>
                            </div>
                            <div class="website-content">
                              <span class="contact-title">Bowling Arm:</span>
                              <span class="contact-website"><?php echo $_SESSION['bowl_arm']; ?></span>
                            </div>
                            <div class="skype-content">
                              <span class="contact-title">Bowling Pace:</span>
                              <span class="contact-skype"><?php echo $_SESSION['bowl_pace']; ?></span>
                            </div>
                            <div class="skype-content">
                              <span class="contact-title">First Preference:</span>
                              <span class="contact-skype"><?php echo $_SESSION['pf']; ?></span>
                            </div>
                            <div class="skype-content">
                              <span class="contact-title">Captaion Experience:</span>
                              <span class="contact-skype"><?php echo $_SESSION['cap_exp']; ?></span>
                            </div>
                          </div>
                          <div class="basic-information">
                            <ul class="nav nav-tabs" role="tablist">
                              <li role="presentation" class="active">
                                <h6>Contact Information</h6>
                              </li>
                            </ul>
                            <div class="phone-content">
                              <span class="contact-title">Phone:</span>
                              <span class="phone-number"><?php echo $_SESSION['mobile']; ?></span>
                            </div>
                            <div class="address-content">
                              <span class="contact-title">Email:</span>
                              <span class="mail-address"><?php echo $_SESSION['email']; ?></span>
                            </div>
                            <div class="email-content">
                              <span class="contact-title">Address:</span>
                              <span class="contact-email"><?php echo $_SESSION['add']; ?></span>
                            </div>
                            <div class="website-content">
                              <span class="contact-title">District:</span>
                              <span class="contact-website"><?php echo $_SESSION['dist']; ?></span>
                            </div>
                            <div class="skype-content">
                              <span class="contact-title">State:</span>
                              <span class="contact-skype"><?php echo $_SESSION['p_state']; ?></span>
                            </div>
                            <div class="skype-content">
                              <span class="contact-title">Country:</span>
                              <span class="contact-skype"><?php echo $_SESSION['p_country']; ?></span>
                            </div>
                            <div class="skype-content">
                              <span class="contact-title">Pin Code:</span>
                              <span class="contact-skype"><?php echo $_SESSION['pin']; ?></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="1">
                        <div class="contact-information">
                          <div class="user-send-message">
                            <button class="btn btn-outline-warning" style="height: 40px; width: 80px;" data-toggle="modal" data-target="#edit" type="button">
                              <i class="fa fa-edit"></i></button>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- /# row -->
  
  <!-- Edit Form -->
                
  <?php
                  if (isset($_POST['editdone'])) {
                   
                    $firstn=$_POST['firstname'];
                    $lastn=$_POST['lastname'];
                    $fname=$_POST['father'];
                    $mname=$_POST['mother'];
                    $gn=$_POST['gn'];
                    $date=$_POST['dob'];
                    $age=$_POST['agedata'];
                    $add=$_POST['add'];
                    $dist=$_POST['dist'];
                    $state=$_POST['state'];
                    $coun=$_POST['country'];
                    $pin=$_POST['pin'];
                    $mobile=$_POST['mobile'];
                    $email=$_POST['email'];

                    $sq = "UPDATE `finalplist` SET `first_name`='$firstn',`last_name`='$lastn',`father_name`='$fname',`mother_name`='$mname',`mobile`='$mobile',`gender`='$gn',`dob`='$date',`age`='$age',`email`='$email',`address`='$add',`district`='$dist',`state`='$state',`country`='$coun',`pincode`='$pin' WHERE `id` = '$id';";
                    $qry = mysqli_query($con, $sq);
                    if ($qry) {
                      echo "<script>alert('Update Success Please Login Again');</script>";
                      echo "<script>window.location.href='player.php';</script>";
                    }
                  }

  ?>

  <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">EDIT PROFILE</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form class="needs-validation" method="POST" novalidate>
            <div class="form-row">
              <div class="col">
                <label>&nbsp First Name :</label>
                <input type="text" name="firstname" id="validation2" class="form-control" placeholder="First name" value="<?php echo $_SESSION['firstname']; ?>" required>
                <div class="invalid-feedback">Please Enter First Name</div>
              </div>
              <div class="col">
                <label>&nbsp Last Name :</label>
                <input type="text" name="lastname" id="validation3" class="form-control" value="<?php echo $_SESSION['lastname']; ?>" required>
                <div class="invalid-feedback">Please Enter Last Name</div>
              </div>
            </div>
            <br>
            <div class="form-row">
              <div class="col">
                <label>&nbsp Father Name :</label>
                <input type="text" name="father" id="validation4" class="form-control" value="<?php echo $_SESSION['f_name']; ?>" required>
                <div class="invalid-feedback">Please Enter Father Name</div>
              </div>
              <div class="col">
                <label>&nbsp Mother Name :</label>
                <input type="text" name="mother" id="validation5" class="form-control" value="<?php echo $_SESSION['m_name']; ?>" required>
                <div class="invalid-feedback">Please Enter Mother Name</div>
              </div>
            </div>
            <br>
            <div class="form-row text-center">
            <label>Gender :</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="validationFormCheck1" name="gn" value="Male" required>
                                    <label class="form-check-label" for="validationFormCheck1">Male</label>&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <input type="radio" class="form-check-input" id="validationFormCheck2" name="gn" value="Female" required>
                                    <label class="form-check-label" for="validationFormCheck2">Female</label>
                                    <div class="invalid-feedback">Please Select Valid Gender</div>
                                </div>
              
            </div>
            <br>
            <div class="form-row">
              <div class="col">
                <label>&nbsp Date of Birth :</label>
                <input type="date" name="dob" id="dob" class="form-control" value="<?php echo $_SESSION['p_dob']; ?>" placeholder="DOB" onkeyup="getAgeVal(0)" onblur="getAgeVal(0);" required>
                <div class="invalid-feedback">Please Select Valid Dob</div>
              </div>
              <div class="col">
                <label>&nbsp Age :</label>
                <input type="text" name="agedata" id="age" class="form-control" placeholder="SELECT DOB " value="<?php echo $_SESSION['p_age']; ?>" required readonly>
                <div class="invalid-feedback">Please Select DOB</div>
              </div>
            </div>
            <br>
            <div class="form-row">
              <div class="col">
                <label>&nbsp Address :</label>
                <textarea id="validation6" name="add" rows="1" cols="27" class="form-control"  required><?php echo $_SESSION['add']; ?></textarea>
                <div class="invalid-feedback">Please Enter Valid Address</div>
              </div>
              <div class="col">
                <label>&nbsp District :</label>
                <input type="text" name="dist" class="form-control" value="<?php echo $_SESSION['dist']; ?>" placeholder="District" required>
                <div class="invalid-feedback">Please Enter Valid District</div>
              </div>
            </div>
            <br>
            <div class="form-row">

              <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" name="state" class="form-control" value="<?php echo $_SESSION['p_state']; ?>" required>
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
                <div class="invalid-feedback">Please Select State</div>
              </div>
              <div class="form-group col-md-4">
                <label for="incountry">Country</label>
                <select id="incountry" name="country" class="form-control" value="<?php echo $_SESSION['p_country']; ?>" required>
                  <option>India</option>
                  <option>Sri Lanka</option>
                  <option>Australia</option>
                  <option>England</option>
                  <option>New Zeland</option>
                  <option>Bangladesh</option>
                  <option>Afghanistan</option>
                  <option>Other</option>
                </select>
                <div class="invalid-feedback">Please Select Country</div>
              </div>
              <div class="form-group col-md-3">
                <label for="inputZip">Pin Code</label>
                <input type="text" name="pin" class="form-control" id="inputZip" value="<?php echo $_SESSION['pin']; ?>" required>
                <div class="invalid-feedback">Please Enter Pincode</div>
              </div>
            </div>
            <br>
            <div class="form-row">
              <div class="col">
                <label>&nbsp Mobile :</label>
                <input type="mobile" id="validation8" name="mobile" class="form-control" value="<?php echo $_SESSION['mobile']; ?>" required>
                <div class="invalid-feedback">Please Enter Valid Mobile</div>
              </div>
              <div class="col">
                <label>&nbsp Email :</label>
                <input type="email" id="validation9" name="email" class="form-control" value="<?php echo $_SESSION['email']; ?>" required>
                <div class="invalid-feedback">Please Enter Valid Email</div>
              </div>
            </div>
            <br>
            
            <div class="form-row text-center">
              <div class="col">
                <button type="submit" name="editdone" class="btn btn-outline-success"><i class="fa fa-edit"></i></button>
              </div>
              <div class="col">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-times"></i></button>
              </div>
            </div>

          </form>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
  </div>

  <!-- End Edit Form -->


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

  <!--  Javascript -->
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