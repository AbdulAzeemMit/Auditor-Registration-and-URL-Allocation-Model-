<?php
session_start();
if(isset($_SESSION['permission'])&&$_SESSION['permission']=="allowed")
{

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="bs/css/bootstrap.min.css" rel="stylesheet">
	<link href="bs/css/font-awesome.min.css" rel="stylesheet">
	<link href="bs/css/styles.css" rel="stylesheet">
	<script src="bs/js/jquery-1.11.1.min.js"></script>
	<script src="bs/js/bootstrap.min.js"></script>
	<script src="bs/js/custom.js"></script>
	
</head>
<body>
<?php
include('nav_bar.php');
?>
<div class="divider"></div>
		
		<ul class="nav menu">
			<li class="active"><a href="#"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="url.php"><em class="fa fa-pencil fa-fw">&nbsp;</em> Allocate URL</a></li>

			<li class="parent ">
				<a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Auditor 
				<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right">
				<em class="fa fa-plus"></em></span>
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


			<li ><a href="url_list.php"><em class="fa fa-bar-chart">&nbsp;</em>View Report</a></li>
			
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">Summary</h2>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-blue"></em>
							<div class="large"><?php
							include 'connect.php';
							$result = mysqli_query($conn,"SELECT COUNT(*) FROM auditor");
							$row = mysqli_fetch_row($result);	
							echo $row[0];					
							?></div>
							<div class="text-muted">Auditors</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-university fa-2x color-orange"></em>
							<div class="large">
							<?php
							include 'connect.php';
							$result = mysqli_query($conn,"SELECT COUNT(DISTINCT company_name) FROM auditor");
							$row = mysqli_fetch_row($result);	
							echo $row[0];	
							?>
							
							</div>
							
							<div class="text-muted">Companies</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-paper-plane fa-2x color-teal"></em>
							<div class="large">
							<?php
							include 'connect.php';
							// $result = mysqli_query($conn,"SELECT COUNT(url) FROM assignment WHERE status='c'");
							// $row = mysqli_fetch_row($result);	
							// echo $row[0];	
							echo '0';
							?>
							
							</div>
							<div class="text-muted">Completed Tickets</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-exclamation-triangle fa-2x color-red"></em>
							<div class="large">
							<?php
							include 'connect.php';
							// $result = mysqli_query($conn,"SELECT COUNT( url) FROM assignment WHERE status='p'");
							// $row = mysqli_fetch_row($result);	
							// echo $row[0];
							echo '0';	
							?>
							</div>
							<div class="text-muted">Pending Tickets</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>
		

		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Critical</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="
						<?php
						include 'connect.php';
						$result = mysqli_query($conn,"SELECT COUNT( url) FROM assignment");
						$result1 = mysqli_query($conn,"SELECT COUNT( url) FROM assignment WHERE critical_code='Critical'");
						$row = mysqli_fetch_row($result);	
						$row1 = mysqli_fetch_row($result1);	
						$percentage= $row1[0]/$row[0]*100;	
						echo floor($percentage);
						?>


						
						
						" ><span class="percent"> <?php
						 echo floor($percentage).'%';
						// echo '0';
						 ?></span></div>
					</div>
				</div>
			</div>
			
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