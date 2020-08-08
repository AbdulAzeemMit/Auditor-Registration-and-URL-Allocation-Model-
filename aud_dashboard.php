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
	<title>Auditor Dashboard</title>
	<link href="bs/css/bootstrap.min.css" rel="stylesheet">
	<link href="bs/css/font-awesome.min.css" rel="stylesheet">
	<link href="bs/css/datepicker3.css" rel="stylesheet">
	<link href="bs/css/styles.css" rel="stylesheet">

    <script src="bootstrap/jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/test21.js"></script>
	<script src="bootstrap/jquery/jquery-1.11.1.min.js"></script>
    <script src="js/bootstable.js"></script>
    <script src="js/aud_view.js"></script>

   
    
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
			<li class=""><a href="aud_home_index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="active"><a href="#"><em class="fa fa-pencil fa-fw">&nbsp;</em> My Assignments</a></li>


		</ul>
	</div><!--/.sidebar-->
	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" id="sec_bar" >
		<div class="row" id="heading2">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">My Assignments</li>
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
<input class="form-control" style="height:35px;width:13%;display:inline;margin-left:px;margin-top:10px;border:1px solid black;" type="text" name="url" placeholder="URL" autocomplete="off" pattern='^[a-zA-Z0-9_-]+$' />

<!-- <input class="form-control" style="height:35px;width:16%;display:inline;margin-left:5px;border:1px solid black;" type="text" name="E-mail" placeholder="E-mail"  autocomplete="off"  />
<input class="form-control" style="height:35px;width:13%;display:inline;margin-left:5px;border:1px solid black;" type="text" name="Company_Name" placeholder="Company"  autocomplete="off" pattern='^[a-zA-Z0-9_-]+$' />
<input class="form-control" style="height:35px;width:13%;display:inline;margin-left:5px;border:1px solid black;" type="text" name="Role" placeholder="Role" autocomplete="off" pattern='^[a-zA-Z0-9_-]+$' />
<input class="form-control" style="height:35px;width:13%;display:inline;margin-left:5px;border:1px solid black;" type="text" name="Remarks" placeholder="Remarks" autocomplete="off" pattern='^[a-zA-Z0-9_-]+$' /> -->
<input type="submit" style="height:35px;" class="btn btn-primary btn-sm " value="search">
<br>
</form>
</DIV>

        <?php
//session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nic";
// Create connection
// include('thirdpage.php');
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$from=$_POST['from'];
//$to=$_POST['to'];
//print_r($_SESSION); 
// Print the result 
 

//WHERE auditor_name='". $_SESSION['username']."'
//echo('<h3 style="text-align:center;"><a href="http://localhost/public/nic/statusn.php">View More</a><h3>');
//echo('<h4>From : '.$from.'&nbsp;&nbsp;&nbsp;To : '.$to.'</h4>');
if(isset($_POST['save']))
{
   print_r(strlen($_POST));
   $J=0; 

   while(!empty($_POST['url'][$J])){
    $url=$_POST['url'][$J];

   }
   

}




if(!isset($_POST['url']))
{
     $_POST['url']='';

}
if(!isset($_POST['tn']))
{
	$_POST['tn']='';

}


$auditor_code=$_SESSION['userid'];
$url=$_POST['url'];
$tn=$_POST['tn'];

// if(!isset($_POST['Company_Name']))
// {
// 	$_POST['Company_Name']='';

// }
// if(!isset($_POST['Role']))
// {
// 	$_POST['Role']='';

// }
// if(!isset($_POST['Remarks']))
// {
// 	$_POST['Remarks']='';

// }

// $em=$_POST['E-mail'];
// $com=$_POST['Company_Name'];
// $rol=$_POST['Role'];
// $rem=$_POST['Remarks'];


// $result = mysqli_query($conn,"SELECT * FROM assignment WHERE auditor_name='". $_SESSION['username']."' AND url LIKE '%$url%'");
$result = mysqli_query($conn,"SELECT * FROM assignment WHERE auditor_code='$auditor_code' AND url LIKE '%$url%' ORDER BY date desc");

if (mysqli_num_rows($result) > 0 ) {
 echo '<div class="table-responsive table-condensed">';
	      echo '<table class="table table-hover table-expandable"'. 'style="margin-top:10px">';
	        echo '<thead>';
 				echo  '<tr style="background-color: #4db8ff;">';
 				echo     '<th onclick="sortTable(0)">'.'URL&nbsp;<em class="fa fa-long-arrow-down ">'.'<em class="fa fa-long-arrow-up ">'.'</em></th>';
 				echo     '<th onclick="sortTable(1)">'.'Assign Date&nbsp;<em class="fa fa-long-arrow-down ">'.'<em class="fa fa-long-arrow-up ">'.'</em></th>';
 				echo     '<th onclick="sortTable(2)">'.'Condition&nbsp;<em class="fa fa-long-arrow-down ">'.'<em class="fa fa-long-arrow-up ">'.'</em></th>';
 				echo     '<th onclick="sortTable(3)">'.'Remarks&nbsp;<em class="fa fa-long-arrow-down ">'.'<em class="fa fa-long-arrow-up ">'.'</em></th>';
				echo     '<th onclick="sortTable(4)">'.'Duration&nbsp;<em class="fa fa-long-arrow-down ">'.'<em class="fa fa-long-arrow-up ">'.'</em></th>';
				echo     '<th onclick="sortTable(5)">'.'Report&nbsp;<em class="fa fa-long-arrow-down ">'.'<em class="fa fa-long-arrow-up ">'.'</em></th>';
                echo "</tr>"; 
            echo '<tbody  class=""'.'id="myTable">';
            echo '<form action="" method="post">';
$k=0;
    // output data of each row
    while($row = mysqli_fetch_row($result)
    ) {
        if ($k<10000)
       // echo "id: " . $row["id"]. " - url: " . $row["url"]. " ASSIGN_DATE  " . $row["date"]. "<br>";
      { 
          print '<tr > <td>';
         print '<input type="text" value='."'$row[1]'". ' name="url[]" hidden>';
        echo $row[1]; //url
        print "</td> <td>";
        echo $row[4]; //assign date
        print "</td> <td>";
        // echo $row[4]; //condition
        print "</td> <td>";
        echo $row[5]; //remark
        print "</td> <td>";
        echo "-----";//duration
        echo '</td><td>';
        // print "</td> <td>";
        // echo '----'; 
        // print "</td> <td>";
        // echo '----'; 
        // print "</td> <td>";
        // echo '----'; 
        // print "</td> <td>";
        // echo '----'; 
        // if($row[2]==0) //report
        // {
            echo ' Not Uploaded';
        // }
        // else{echo 'Uploaded';}
        // Declare and define two dates 
// $date1 = strtotime("2016-06-01 22:45:00");  
// $date2 = strtotime("2017-09-21 10:44:01");  
// //$date3 = strtotime($to);  
  
// // Formulate the Difference between two dates 
// /$diff = abs($date3 - $date2);  
  
  
// // To get the year divide the resultant date into 
// // total seconds in a year (365*60*60*24) 
// //$years = floor($diff / (365*60*60*24));  
  
  
// // To get the month, subtract it with years and 
// // divide the resultant date into 
// // total seconds in a month (30*60*60*24) 
// $months = floor(($diff - $years * 365*60*60*24) 
//                                / (30*60*60*24));  
  
  
// // To get the day, subtract it with years and  
// // months and divide the resultant date into 
// // total seconds in a days (60*60*24) 
// $days = floor(($diff - $years * 365*60*60*24 -  
//              $months*30*60*60*24)/ (60*60*24)); 
  
  
// To get the hour, subtract it with years,  
// months & seconds and divide the resultant 
// date into total seconds in a hours (60*60) 

// echo '<div class="table-expandable-arrow up"></div>';
        //printf("%d years, %d months, %d days", $years, $months,$days); 
        print "</td> </tr>";
       
        // echo '<tr>';
        // echo '<td ><input type="file"></td>';
        // echo '</tr>';
        



	$k++;	}
	}
	echo '</tbody>';
    echo '</table>';

    echo '</div>';
	echo '<div class="col-md-12 text-center">';
	echo '<ul class="pagination pagination-lg pager" id="myPager"></ul>';
	echo '</div>';
	


} else {
    echo "<h2 style='text-align:center'>No record found!<h2>";
}
include("status_viewer.php");
die();
$conn->close();

?>









	</div>	
	<script src="bs/js/jquery-1.11.1.min.js"></script>
	<script src="bs/js/bootstrap.min.js"></script>
	<script src="bs/js/chart.min.js"></script>
	<script src="bs/js/chart-data.js"></script>
	<script src="bs/js/easypiechart.js"></script>
	<script src="bs/js/easypiechart-data.js"></script>
	<script src="bs/js/bootstrap-datepicker.js"></script>
	<script src="bs/js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
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