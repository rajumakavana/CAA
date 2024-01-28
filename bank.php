
<?php
session_start();  

    if(isset($_SESSION['msg']))
    {
        $msg=$_SESSION['msg'];
        echo "<script>alert('$msg');</script>";
        echo "<script>window.location.href='bank.php'</script>";
        session_unset();
    }
    if(isset($_SESSION['success']))
    {
        $msg=$_SESSION['success'];
        echo "<script>alert('$msg');</script>";
        echo "<script>window.location.href='fmatch.php'</script>";
        session_unset();
    }

    $number=$_SESSION['number'];
    $otp=$_SESSION['otp'];
?>
<!doctype html><html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />

<title>Cricket Academy & Association</title>
<link href="css/bank.css" rel="stylesheet" type="text/css"/>

<link href="img/favicon.png" rel="icon">
<link href="img/favicon.ico" rel="icon">


</head>


<body>

<div id="mainContainer" class="row large-centered">

  <div class="text-center"><h2>BANK</h2></div>
  
  <hr class="divider">
  <dl class="mercDetails">
  	<dt>Cricket Academy & Association</dt> 				<dd>Match Ticket</dd>
    <dt>Transaction Amount</dt> 	<dd>INR <?php echo  $_SESSION['amount'];?></dd>
    <dt>Debit Card</dt> 		<dd><?php echo  $number;?></%></dd>
  </dl>
  <hr class="divider">
  
  
<form class="needs-validation" novalidate name="form1" id="form1" method="post" action="complete_payment.php" >
<fieldset class="page2">
<div class="page-heading">
<h6 class="form-heading">Authenticate Payment</h6>
<p class="form-subheading">OTP sent to your email address :<strong><?php echo $_SESSION['user']; ?></strong></p>


</div>

<div class="row formInputSection">
<div class="large-7 columns">
<label>
  Enter One Time Password (OTP)
  <input type="tel" name="enterotp"  class="form-control optPass" id="validationCustom2" value="" maxlength="6" autocomplete="off" required/>
  <div class="invalid-feedback">Please Enter OTP</div>
</label>
</div>
<div class="large-5 columns">
<label>&nbsp;</label><button class="expanded button next" name="payment" onClick="ValidateForm()" >Make Payment</button>
</div>
</div>

<p>

<a class="tryAgain" href="fmatch.php">Go back</a> to Booking Ticket
</p>
</fieldset>



</form>
</div>
<script src="bank/script/jquery-1.9.1.js"></script>
<script>
document.onmousedown = rightclickD; function rightclickD(e) { e = e||event; if (e.button == 2) { alert('Function Disabled...'); return false; } }
function ValidateForm() { 
	var regPin = RegExp("^[0-9]{4,6}$");
	if( document.form1.customerpin.value == "" || !document.form1.customerpin.value.match(regPin) ) {	 
		alert("Please enter a valid digit One Time Password (OTP) receive on your registered Email Address."); document.form1.customerpin.focus(); return false;  
	}
    else
        {
            document.form1.submit();
        }

}
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

</body>
</html>