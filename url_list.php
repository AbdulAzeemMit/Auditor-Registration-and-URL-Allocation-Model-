<?php
session_start();
if(isset($_SESSION['permission'])&&$_SESSION['permission']=="allowed")
{

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
	<link href="bs/css/bootstrap.min.css" rel="stylesheet">
	<link href="bs/css/font-awesome.min.css" rel="stylesheet">
	<link href="bs/css/datepicker3.css" rel="stylesheet">
	<link href="bs/css/styles.css" rel="stylesheet">
    <script src="bootstrap/jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/test21.js"></script>
    <script src="bootstrap/jquery/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap-table-expandable.css">
    <script src="js/bootstrap-table-expandable.js"></script>
    <script src="js/report.js"></script>


	<style>
        th {
        cursor: pointer;
            }
        .table-responsive {height:350px;}
    </style>
  

	
</head>
<body>
<?php
include('nav_bar.php');
?>

<div class="divider"></div>
		
		<ul class="nav menu">
			<li class=""><a href="home_index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="url.php"><em class="fa fa-pencil fa-fw">&nbsp;</em> Allocate URL</a></li>

<li class="parent "><a data-toggle="collapse" href="#sub-item-1"><em class="fa fa-navicon">&nbsp;</em> Auditor <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="aud_reg.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Auditor Registration
					</a></li>
					<li><a class="" href="aud_view.php">
						<span class="fa fa-arrow-right">&nbsp;</span> View Auditor
					</a></li>
					<li><a class="" href="aud_search.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Edit Auditor
					</a></li>
					
				</ul>
			</li>


			<li class="active" ><a href="url_list.php"><em class="fa fa-bar-chart">&nbsp;</em>View Report</a></li>
			
		</ul>
	</div><!--/.sidebar-->
	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" id="sec_bar" >
		<div class="row" id="heading2">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Report</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
		<div class="col-lg-5" >
		</div>

			<div class="col-lg-4" id="heading">
				<!-- <h2 class="page-header" >Enter URL</h2> -->
			</div>
			<div class="col-lg-3" >
		</div>
		</div><!--/.row-->
		
		<DIV class="product-item float-clear" style="clear:both;">
<form action="" method="post">
<input class="form-control" style="height:35px;width:13%;display:inline;margin-left:px;margin-top:10px;border:1px solid black;" type="text" name="id" placeholder="ID" autocomplete="off" pattern='^[a-zA-Z0-9_ -]+$' />
<input class="form-control" style="height:35px;width:13%;display:inline;margin-left:5px;border:1px solid black;" type="text" name="auditor_name" placeholder="URL"  autocomplete="off"  pattern='^[a-zA-Z0-9_ -]+$'/>
<input class="form-control" style="height:35px;width:13%;display:inline;margin-left:5px;border:1px solid black;" type="text" name="current_auditor" placeholder="Current Auditor"  autocomplete="off"  pattern='^[a-zA-Z0-9_ -]+$'/>

<input type="submit" style="height:35px;" class="btn btn-primary btn-sm " value="search">
<br>
</form>
</DIV>
<?php
include('report_info.php');
?>
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