<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bs/css/bootstrap4.min.css" rel="stylesheet">	
<link href="bs/css/font-awesome.min.css" rel="stylesheet">
<script src="bs/js/jquery-1.11.1.min.js"></script>
	<script src="bs/js/bootstrap.min.js"></script>
	
<script type="text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};

    function refreshCaptcha() {
	$("#captcha").attr("src","captcha.php");

}
       

</script>	
	
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    /* background-image:url('images/tower2.jpg') ;
    background-repeat: no-repeat;
    background-color:#29293d; */
    /* background-size: cover;  */
    /* Resize the background image to cover the entire container */
    background-color:#C0C0C0;
    /* background-color:black; */
    background-image:url("images/i8.jpg");

    background-repeat: no-repeat;

    }

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 70%;
  padding: 5px 20px;
  margin: 2px 0;
  margin-left:30px;
  display: inline-block;
  border: 0px solid #ccc;
  box-sizing: border-box;
  
}

/* Set a style for all buttons */



/* Extra styles for the cancel button */



.container {
  padding: 20px;

}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: block; 
  /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  padding-top: 0px;
  /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); */
  /* opacity:0.9; */
}

/* Modal Content/Box */
.modal-content {
  background-color: white;
  /* background-image:url('images/nicb1.jpg') ; */
  margin: 0% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
  box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);

}

/* The Close Button (x) */



/* Add Zoom Animation */

  
}
</style>
</head>
<body >
<!-- <nav class="navbar justify-content-center">
<div class="row">
<div class="col-lg-3"></div>
<div class="col-lg-12">

		<h1 style="text-align:center;color:black;">Auditor Registration and Allocation module</h1>
    </div>
    </div>
</nav> -->
<h1 style="margin-left:580px;margin-top:50px;color:black;">Auditor Registration and Allocation Model</h1>

<!-- <h2>Modal Login Form</h2> -->

<!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button> -->

<!-- <div id="id01" class="modal" style="position:center"> -->

<div id="id01" class="modal" style="margin-left:280px;margin-top:70px">

<!-- <nav class="navbar  navbar-fixed-top" role="navigation" style="background-color:black">
    
    <div class="row">
        <div class="col-lg-1">
                <img style="display:inline;fixed:right" class="" src="images/new.png" width="393" height="55">
        </div>

        <div class="col-lg-1"></div>
        <div class="col-lg-1"></div>


        <div class="col-lg-9">
                <h3 style="float:right;margin-left:180px;color:#1aa3ff;display:inline">NATIONAL INFORMATICS CENTRE</h3>
        </div>

    </div>   

</nav> -->
	

<br>
<br>


    <div class="container"  >

<!-- <h4 style="text-align:center">Ticket Control Panel</h4> -->
  <form class="modal-content" action="" method="POST" name="myform">
  
<div class="row" style="margin-top:10px;">

<img style="display:inline;margin-left:100px;" class="" src="images/ashok.png" width="50" height="70">
<img style="display:inline;margin-left:5px;margin-top:15px;" class="" src="images/nic_black.gif" width="250" height="45">


<div class="col-lg-12">
<h2 style="margin-left:80px;margin-top:20px;color:black;">Login</h2>

<?php
  include('login_validate.php');
  ?>

     <input autofocus class=" " style="margin-left:80px;border-bottom: 1.5px solid black;outline-width: 0;" name="userid" type="text" placeholder="User Id" required autocomplete="off" pattern='^[a-zA-Z0-9_ -]+$'>
</div>

</div>

<div class="row">

<div class="col-lg-12">
  <input class="" name="password" id="password" style="margin-left:80px;border-bottom: 1.5px solid black;outline-width: 0;" type="password" placeholder="Password" name="psw" required autocomplete="off" pattern='^[a-zA-Z0-9_-]+$'>
</div>
</div>


<div class="row">

<div class="col-lg-12">
<a href="#" id="password_error" onClick="refreshCaptcha()"><img src="captcha.php" style="margin-left:80px;margin-top:px;background: transparent;background-color:red" id="captcha"/></a><br>
                    


</div>
</div>


<div class="row">

<div class="col-lg-12">
<h5><input type="text" class="" style="margin-left:80px;border-bottom: 1.5px solid black;outline-width: 0;" name="captcha" placeholder="Captcha" required autocomplete="off" pattern='^[a-zA-Z0-9_-]+$'/><br></h5>
                    <?php
                      if (isset($_POST['login']) && !empty($_POST['userid'])&& !empty($_POST['password'])) 
                        {
                            if($_SESSION['cap_code']==$_POST['captcha'])
                                {
                                    $f2=1;
                                 }
                            else
                                {
                                 echo '<h5 style="color: #ff0000;text-align:center;font-size: 17px">Invalid Captcha</h5>' ;
                                 $f2=0;
                                 }
                            if(isset($_SESSION['permission'])&&$_SESSION['permission']=="allowed"&& ($_SESSION['cap_code']==$_POST['captcha'])&&$_SESSION['isadmin']==1)
                                {
                                 header("Location:home_index.php");             
                                }
                            else if (isset($_SESSION['permission'])&&$_SESSION['permission']=="allowed"&&($_SESSION['cap_code']==$_POST['captcha'])&&$_SESSION['isadmin']==0)
                                    {
                                     header("Location:aud_dashboard.php");             
                                    }
                        }
                        ob_end_flush();
                     ?>



</div>
</div>



<!-- <div class="row">
<div class="col-lg-1">
</div>
<div class="col-lg-11">
<h5>Captcha      <input class="form-control" style="margin-left:20px;"  type="password" placeholder="Enter Captcha" name="" required autocomplete="off"></h5>
</div>
</div> -->

<div class="row">
<div class="col-lg-1"></div>

<div class="col-lg-10 center-block">
<button class="btn btn-primary " style="margin-bottom:10px;width:85%;margin-left:33px"  type="submit" name="login">Login</button>
</div>
<div class="col-lg-1"></div>

</div>
        
      
    </div>

    
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
