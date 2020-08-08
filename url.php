<?php
ob_start();
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
	<link href="css1/home_index.css" rel="stylesheet">
	<script src="jquery/jquery.min.js"></script>

	
	<script src="bootstrap/jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="js/test3.js"></script> -->
    <script>
    function is_url(str)
   {
     regexp =  /^(?:(?:):\/\/)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/\S*)?$/;
           if (regexp.test(str))
           {
             return 1;
           }
           else
           {
             return 0;
           }
   }
   
   
   $(document).ready(function()
   {
     $("#add").click(function(){
       
       var count=0;
       var lines = $('textarea').val().split('\n');
   
       for(var j=0;j<lines.length;j++)
         {
           if(is_url(lines[j])==1)
           {
               count=1;
           }
        }
        if(count==1)
         {
          
          $("textarea").slideToggle();
          $("#add").slideToggle();
          $("#heading").slideToggle();
          $("#heading2").slideToggle();

         $("<div>").load("company_name.php", function() {
			$("#test").append('');
           $("#test").append('<h3 style="display:inline ;float:left;margin-left:130px">'+' URL</h3><h3 style="display:inline;float:left;margin-left:225px;">'+' CONDITION</h3><h3 style="display:inline;float:left;margin-left:60px;">'+' COMPANY</h3><h3 style="float:left;margin-left:60px;">'+' AUDITOR</h3>'+'<h3 style="float:left;margin-left:80px;">'+' REMARKS</h3>');
           for(var i=0;i<lines.length;i++)
             {
                 var x=lines[i];
                 if(is_url(x)==1)
                 {
   
                 $("#test").append('<input type="text" class="input form-control"'+'style="display:inline;width:33%;margin-left:0px;margin-top:10px;height:33px"'+' name="tb[]" '+
                      'value=' + x + ' readonly/>');
                 $("#test").append('<select class="form-control"'+'id="job"'+' style="display: inline;width:15%;margin-left:10px;margin-top:0px;"'+''+'name="vulnerablity[]" required>'+ ' '+'<option value="" hidden>Select</option><option value="Critical">'+ ' '+'Critical</option><option value="More_Critical">'+ ' '+'More_Critical</option><option value="General">'+ ' '+'General</option><option value="Urgennt">'+ ' '+'Urgent</option><option value="Third_Party">'+ ' '+'Third_Party</option></select>');
                   $("#test").append($(this).html());
                   $("#test").append('<input type="text" class="input form-control"'+'style="margin-left:20px;margin-top:0px;display: inline;width:15%;height:33px"'+' name="rm[]"'+'pattern="[a-zA-Z0-9_ ]+"'+'autocomplete="off" >');
                 
                 }
               }
               $("#test").append('<br><input type="submit" style="margin-left:px;margin-top:30px;"'+' class="btn btn-success center-block"' + 
                'id=btSubmit value="Submit" name="url_submit" />');



                $("#sec_bar").prepend('<ol class="breadcrumb">'+
				'<li><a href="url.php"'+'style="color:#ff4d4d;">'+
					'<em class="fa fa-home"'+'style="color:#ff4d4d;"></em>'+
				'</li>'+
				'<li >Cancel</li></a>'+
			'</ol>');
             });
             
           }
           else
        {
                     alert('all urls are invalid');
   
        }
           });
   });
   
    
    </script>
</head>
<body>
<?php
include('nav_bar.php');
?>
	<div class="divider"></div>
		<ul class="nav menu">
			<li ><a href="home_index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="active"><a href="#"><em class="fa fa-pencil fa-fw">&nbsp;</em> Allocate URL</a></li>
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
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" id="sec_bar" >
	
		<div class="row" id="heading2">
			<ol class="breadcrumb">
				<li><a href="url.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Allocate URL</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-5" ></div>
			<div class="col-lg-4" id="heading">
 <?php
if(isset($_POST['url_submit']))
{

	include('connect.php');
	$J=0; 
	
	while(!empty($_POST['tb'][$J])){
	$URL=$_POST['tb'][$J];
	$vulnerablity=$_POST['vulnerablity'][$J];
	$aud=$_POST['aud'][$J];
	$remarks=$_POST['rm'][$J];
	
	mysqli_query($conn,"INSERT INTO `assignment` (`id`,`url`, `critical_code`, `auditor_code`, `date`, `remarks`) VALUES (NULL,'$URL', '$vulnerablity', '$aud', CURRENT_TIMESTAMP, '$remarks')");
	$J++;
	}
	echo ('<h2 style="">URLs are saved<h2>');
	echo "</pre>";
	header("Location:url.php");             
$_SESSION['url_save']="URL(s) assigned";
	die();
}

?>


				<h2 class="page-header" >Enter URL</h2>
			</div>

			<div class="col-lg-3" ></div>
		</div><!--/.row-->
	
	
	    <div class="row" >
			<form action="" method="post"  id="">
				<div class="col-lg-12 " id="test"></div>
					<div class="col-lg-0" ></div>
				</div>
				
				<div class="container form-group" >
					<div class="row" >
						<div class="col-lg-1"></div>
						<div class="col-lg-9" >
							<textarea class="form-control" rows="4"  id="comment" style="margin-top:15px;border:1.5px solid black;"></textarea>
						</div>
						<div class="col-lg-4"></div>
					</div>

                    <div class="row">
						
						<div class="col-lg-1"></div>
						<div class="col-lg-8">
							<input  type="button" class="btn btn-info center-block" style="margin-top:10px;margin-left:390px;color:black;" id="add" value="Add URL">
							<?php
	if(isset($_SESSION['url_save'])&& $_SESSION['url_save']!="")
	{
		echo '<h4 style="color:green;margin-left:0px;">'.$_SESSION["url_save"].'<h4>';
		$_SESSION['url_save']="";
	}

    ob_end_flush();

	?>
						</div>
	
						<div class="col-lg-3"></div>
					</div>
				</div>
			</form>
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