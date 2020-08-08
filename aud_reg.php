<?php

session_start();
if(isset($_SESSION['permission'])&&$_SESSION['permission']=="allowed")
{
include('aud_and_user_insertion.php');

?>



<!DOCTYPE html>
<html>
<head>

<title>Admin Dashboard</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="bs/css/bootstrap.min.css" rel="stylesheet">
	<link href="bs/css/font-awesome.min.css" rel="stylesheet">
	<link href="bs/css/datepicker3.css" rel="stylesheet">
	<link href="bs/css/styles.css" rel="stylesheet">

	<script src="bootstrap/jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/aud_and_user_reg.js"></script>
</head>
<body>
<?php
include('nav_bar.php');
?>
	<!-- <div class="divider"> -->
		
		<ul class="nav menu">
			<li ><a href="home_index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li ><a href="url.php"><em class="fa fa-pencil fa-fw">&nbsp;</em> Allocate URL</a></li>
			<li class="parent active"><a data-toggle="collapse" href="#sub-item-1"><em class="fa fa-navicon">&nbsp;</em> Auditor <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span></a>
				<ul class="children collapse" id="sub-item-1">
					<li class="active"><a class="" href="#"><span class="fa fa-arrow-right">&nbsp;</span> Auditor Registration</a></li>
					<li><a class="" href="aud_view.php"><span class="fa fa-arrow-right">&nbsp;</span> View Auditors</a></li>
					<li><a class="" href="aud_search.php"><span class="fa fa-arrow-right">&nbsp;</span> Edit Auditor</a></li>
				</ul>
			<li ><a href="url_list.php"><em class="fa fa-bar-chart">&nbsp;</em>View Report</a></li>
			
		</ul>
	</div>
	<!--/.sidebar-->


	<div class="row " id="heading2">
  		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" id="sec_bar" >
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Auditor Registration</li>
			</ol>
		</div><!--/.row-->
	</div>

		
	
		
<div class="container form-group offset" >
	<FORM name="frmProduct" method="post" action="" id="form">
		<DIV id="outer">
			<DIV id="header">
				<DIV class="float-left">&nbsp;</DIV>
				<div class="container ">
					<div class="row">
						<div class="col-lg-2"></div>
							<div class="col-lg-10">
								<h3 style="margin-left:40px;color:black;float:left;" >Auditor Name</h3>
								<h3 style="margin-left:70px;color:black;float:left;" >E-mail</h3>
								<h3 style="margin-left:60px;color:black;float:left;" >Company Name</h3>
								<h3 style="margin-left:55px;color:black;float:left;" >Role</h3>
								<h3 style="margin-left:120px;color:black;float:left;" >Remarks</h3>
							</div>
					</div>
					
					<div class="row">
						<div class="col-lg-2"></div>
							<div class="col-lg-10">

							<div class="container form-group" id="product">
	<?php require_once("aud_reg_input.php"); 
	?>
</div>

<DIV class="btn-action float-clear">
	<div class="container ">
		<input type="button" class="btn btn-success btn-sm" style="margin-left:30px;" name="add_item" id="add_item" onClick="addMore();" value="Add More"/>
			<input type="button" class="btn btn-warning btn-sm " name="del_item" value="Delete"  onClick="deleteRow();"/>
				<span class="success" id="final">
 					<?php  
 					if(isset($_POST['save'])) 
 						{
  						 if($entry<=1)
   							{
	  						 echo $entry.' Auditor registered&nbsp&nbsp&nbsp&nbsp';
   							}
  						 else
   							{
							echo $entry.' Auditors registered&nbsp&nbsp&nbsp&nbsp';

  							 }
   						if($duplicate>1)
   							{
   							 echo $duplicate.' Auditors already exist '; 

  							 }
   						else if ($duplicate==1)
   								{
	  							 echo '1 Auditor already exist';
   								}
						}
 					?> 
 
 				</span>
	</div>
</DIV>

<DIV class="footer">
	<div class="row">
		<div class="col-lg-0"></div>
		<div class="col-lg-11">
			<input style="margin-top:10px;margin-left:45px;width:95%" class="center-block btn btn-primary btn-md btn-block" type="submit" name="save" value="Save" id="save" />
		</div>
		<div class="col-lg-1"></div>

	</div>
</DIV>
</div>
</div>
</DIV>
</DIV>
</DIV>
</form>
</div>

</body>
</html>
<?php
}
else {
    echo '<h3 style="text-align:center;">you are logout</h3>';
    //print_r($_SESSION); 
    echo '<br><h4 style="text-align:center"><a style="color:blue;" href = "login.php" tite = "Login">Click here to Login</a><h4>';
    
  
}
?> 