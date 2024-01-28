<?php
include 'connection.php';
error_reporting(0);
session_start();
if (isset($_POST['loginb'])) {
    $emailer = $_POST['email'];
    $passworder = $_POST['password'];

    $email=mysqli_real_escape_string($con,$emailer);
    $password=mysqli_real_escape_string($con,$passworder);

    $enc_pass=md5($password);
    $adsq = "SELECT * FROM `admin` WHERE `email`='$email' and re_pass='$enc_pass';";
    $adqr = mysqli_query($con, $adsq);

    if (mysqli_num_rows($adqr) > 0) 
    {
        while ($admin = mysqli_fetch_array($adqr))
         {

            $ademail =$admin[3]; 
            $adpass = $admin[15];
         }
    }

    if ($email == $ademail && $enc_pass == $adpass) {
        $_SESSION['role'] = 'admin';
        header("location:admin/adindex.php");
    }
    else
    {
        echo "<script>alert('Email And Password Incorrect');</script>";
        echo "<script>window.location.href='index.php';</script>";
    }
    if ($email)
    {
        $enc_pass=md5($password);
        $pqr = "SELECT * FROM `finalplist` WHERE `email`='$email' and re_pass='$enc_pass';";
        $p = mysqli_query($con, $pqr);

        if (mysqli_num_rows($p) > 0) 
        {
            while ($row = mysqli_fetch_array($p))
             {
                $_SESSION['role']='player'; 
                $_SESSION['p_id'] = $row['id']; 
                $_SESSION['firstname'] = $row['first_name'];
                $_SESSION['lastname'] = $row['last_name'];
                $_SESSION['f_name'] = $row['father_name'];
                $_SESSION['m_name'] = $row['mother_name'];
                $_SESSION['gn'] = $row['gender'];
                $_SESSION['p_dob'] = $row['dob'];
                $_SESSION['p_age'] = $row['age'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['mobile'] = $row['mobile'];
                $_SESSION['add'] = $row['address'];
                $_SESSION['dist'] = $row['district'];
                $_SESSION['p_state'] = $row['state'];
                $_SESSION['p_country'] = $row['country'];
                $_SESSION['pin'] = $row['pincode'];
                $_SESSION['t_size'] = $row['tshirt_size'];
                $_SESSION['p_level'] = $row['level'];
                $_SESSION['bat'] = $row['batting'];
                $_SESSION['p_wk'] = $row['wk'];
                $_SESSION['bowl_arm'] = $row['bowling_arm'];
                $_SESSION['bowl_pace'] = $row['bowling_pace'];
                $_SESSION['pf'] = $row['first_pref'];
                $_SESSION['cap_exp'] = $row['captain_exp'];
                $_SESSION['p_photo'] = $row['photo'];

                header("location:player/player.php");
            }
        } 
        else
         {
            $enc_pass=md5($password);
            $cqr = "SELECT * FROM `finalclist` WHERE `email`='$email' and re_pass='$enc_pass';";
            $coach = mysqli_query($con, $cqr);

            if (mysqli_num_rows($coach) > 0) 
            {
                while ($row1 = mysqli_fetch_array($coach)) 
                {
                    $_SESSION['role']='coach';
                    $_SESSION['c_id'] = $row1['id']; 
                    $_SESSION['firstname'] = $row1['first_name'];
                    $_SESSION['lastname'] = $row1['last_name'];
                    $_SESSION['f_name'] = $row1['father_name'];
                    $_SESSION['gn'] = $row1['gender'];
                    $_SESSION['c_dob'] = $row1['dob'];
                    $_SESSION['c_age'] = $row1['age'];
                    $_SESSION['email'] = $row1['email'];
                    $_SESSION['mobile'] = $row1['mobile'];
                    $_SESSION['add'] = $row1['address'];
                    $_SESSION['dist'] = $row1['district'];
                    $_SESSION['c_state'] = $row1['state'];
                    $_SESSION['c_country'] = $row1['country'];
                    $_SESSION['pin'] = $row1['pincode'];
                    $_SESSION['c_level'] = $row1['coach_level'];
                    $_SESSION['c_type'] = $row1['coach_type'];
                    $_SESSION['c_photo'] = $row1['photo'];

                    header("location:coach/coach.php");
                }
            }
        }
    }
    else 
    {
        echo "<script>alert('Password Incorrect');</script>";
        echo "<script>window.location.href='index.php';</script>";
    }
}
