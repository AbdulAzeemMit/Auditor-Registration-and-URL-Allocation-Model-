<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<!-- <div class="container-fluid"> -->
			<div class="navbar-header">
				<img class="" src="images/logo_nic3.png" width="233" height="35">
				<a class=""  style="margin-left:300px;font-size:30px"><span style="margin-left:0px;color:white;font-size:px">&nbsp;</span>Registration and Allocation Panel</a>
				<a href="logout.php" style="margin-left:310px;color:#ff4d4d;font-size:17px" ><span class="glyphicon glyphicon-log-out"></span> Logout</a>
						<!-- </div> -->
			</div><!-- /.container-fluid -->
</nav>
	
	
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<div class="profile-sidebar">
		<div class="profile-userpic">
			<img src="images/user.png" class="img-responsive" alt="">
		</div>
			
		<div class="profile-usertitle">
			<div class="profile-usertitle-name"><?php
				// session_start();
				echo $_SESSION['username'];
				?>
			</div>
				
			<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
		</div>
		
		<div class="clear"></div>
	</div>
		