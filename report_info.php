<?php
//session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nic2";
// Create connection
// include('thirdpage.php');
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if(!isset($_POST['id']))
{
	$_POST['id']='';

}
if(!isset($_POST['auditor_name']))
{
	$_POST['auditor_name']='';

}
if(!isset($_POST['current_auditor']))
{
	$_POST['current_auditor']='';

}

$id=$_POST['id'];
$name=$_POST['auditor_name'];
$ca=$_POST['current_auditor'];


$result = mysqli_query($conn,"SELECT `ticketID`, `baseURL` FROM detail WHERE ticketID LIKE '%$id%' AND baseURL LIKE '%$name%' ");

// $result = mysqli_query($conn,"SELECT `ticketID`, `baseURL` FROM detail WHERE ticketID LIKE '%$id%' AND baseURL LIKE '%$name%' ");
if (mysqli_num_rows($result) > 0 ) {
 echo '<div class="table-responsive">';
	      echo '<table class="table table-hover table-expandable"'. 'style="margin-top:10px">';
	        echo '<thead>';
 				echo  '<tr style="background-color: #4db8ff;">';
 				echo     '<th onclick="sortTable(0)">'.'ID&nbsp;<em class="fa fa-long-arrow-down ">'.'<em class="fa fa-long-arrow-up ">'.'</em></th>';
 				echo     '<th onclick="sortTable(1)">'.'URL&nbsp;<em class="fa fa-long-arrow-down ">'.'<em class="fa fa-long-arrow-up ">'.'</em></th>';
 				echo     '<th onclick="sortTable(2)">'.'T. Number&nbsp;<em class="fa fa-long-arrow-down ">'.'<em class="fa fa-long-arrow-up ">'.'</em></th>';
 				echo     '<th onclick="sortTable(3)">'.'T. Date&nbsp;<em class="fa fa-long-arrow-down ">'.'<em class="fa fa-long-arrow-up ">'.'</em></th>';
 				echo     '<th onclick="sortTable(5)">'.'Current Auditor&nbsp;<em class="fa fa-long-arrow-down ">'.'<em class="fa fa-long-arrow-up ">'.'</em></th>';
 				echo     '<th onclick="sortTable(6)">'.'Assign Date&nbsp;<em class="fa fa-long-arrow-down ">'.'<em class="fa fa-long-arrow-up ">'.'</em></th>';
				echo     '<th onclick="sortTable(7)">'.'Duration&nbsp;<em class="fa fa-long-arrow-down ">'.'<em class="fa fa-long-arrow-up ">'.'</em></th>';
                echo '<th></th>';
                echo '<th></th>';

                echo "</tr>"; 
            
echo '<tbody  class=""'.'id="myTable">';
$k=0;
    // output data of each row
    while($row = mysqli_fetch_row($result)
    ) {
        if ($k<1000)
      { 
          print "<tr > <td>";
        echo $row[0]; 
        print "</td> <td>";
        echo $row[1]; 
        print "</td> <td>";
        echo '----'; 
        print "</td> <td>";
        echo '----'; 
        print "</td> <td>";
        echo '----'; 
        print "</td> <td>";
        echo '----'; 
        print "</td> <td>";
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
echo "-----";

echo '<td>';
// echo '<div class="table-expandable-arrow up"></div>';
        //printf("%d years, %d months, %d days", $years, $months,$days); 

        print "</td> </tr>";
      print  '<tr>';
      print  '<td colspan="10"><h4>Additional information</h4>';
     print     '<ul>';
     print       '<li>Condition:</li>';
     print       '<li>Last Auditor:</li>';
     print       '<li>Last Assign Date:</li>';
     print       '<li>Remarks:</li>';

     print       '</ul></td>';
     print '</tr>';
        



	$k++;	}
	}
	echo '</tbody>';
	echo '</table>';
	echo '</div>';
	echo '<div class="col-md-12 text-center">';
	echo '<ul class="pagination pagination-lg pager" id="myPager"></ul>';
	echo '</div>';
	


} else {
    echo "<h2 style='text-align:center'>No results are found in this duration<h2>";
}
include("status_viewer.php");
die();
$conn->close();

?>
