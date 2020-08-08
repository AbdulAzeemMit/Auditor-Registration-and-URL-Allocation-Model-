<?php

include('connect.php');

if(!isset($_POST['id']))
{
	$_POST['id']='';

}
if(!isset($_POST['auditor_name']))
{
	$_POST['auditor_name']='';

}
if(!isset($_POST['E-mail']))
{
	$_POST['E-mail']='';

}
if(!isset($_POST['Company_Name']))
{
	$_POST['Company_Name']='';

}
if(!isset($_POST['Role']))
{
	$_POST['Role']='';

}
if(!isset($_POST['Remarks']))
{
	$_POST['Remarks']='';

}
$id=$_POST['id'];
$name=$_POST['auditor_name'];
$em=$_POST['E-mail'];
$com=$_POST['Company_Name'];
$rol=$_POST['Role'];
$rem=$_POST['Remarks'];


$result = mysqli_query($conn,"SELECT `code`, `auditor_name`, `email`, `company_name`,`role`, DATE(`date`), `remarks` FROM auditor WHERE code LIKE '%$id%' AND auditor_name LIKE '%$name%' AND email LIKE '%$em%' AND company_name LIKE '%$com%' AND role LIKE '%$rol%' AND remarks LIKE '%$rem%' ORDER BY date desc  ");
if (mysqli_num_rows($result) > 0 ) {
 echo '<div class="table-responsive">';
	      echo '<table class="table table-hover"'. 'style="margin-top:10px">';
  
          echo  '<tr style="background-color: #4db8ff;">';
 				echo     '<th onclick="sortTable(0)">'.'ID&nbsp;<em class="fa fa-long-arrow-down ">'.'<em class="fa fa-long-arrow-up ">'.'</em></th>';
 				echo     '<th onclick="sortTable(1)">'.'Name&nbsp;<em class="fa fa-long-arrow-down ">'.'<em class="fa fa-long-arrow-up ">'.'</em></th>';
 				echo     '<th onclick="sortTable(2)">'.'E-mail&nbsp;<em class="fa fa-long-arrow-down ">'.'<em class="fa fa-long-arrow-up ">'.'</em></th>';
 				echo     '<th onclick="sortTable(3)">'.'Company&nbsp;<em class="fa fa-long-arrow-down ">'.'<em class="fa fa-long-arrow-up ">'.'</em></th>';
 				echo     '<th onclick="sortTable(4)">'.'Role&nbsp;<em class="fa fa-long-arrow-down ">'.'<em class="fa fa-long-arrow-up ">'.'</em></th>';
 				echo     '<th onclick="sortTable(5)">'.'Date of Joining&nbsp;<em class="fa fa-long-arrow-down ">'.'<em class="fa fa-long-arrow-up ">'.'</em></th>';
 				echo     '<th onclick="sortTable(6)">'.'Assign Date&nbsp;<em class="fa fa-long-arrow-down ">'.'<em class="fa fa-long-arrow-up ">'.'</em></th>';
				echo     '<th onclick="sortTable(7)">'.'Remarks&nbsp;<em class="fa fa-long-arrow-down ">'.'<em class="fa fa-long-arrow-up ">'.'</em></th>';
                echo "</tr>"; 
                echo '<tbody  border=""'.'id="myTable">';

    while($row = mysqli_fetch_row($result)) 
    {
       print " <td>";
        echo $row[0]; 
        print "</td> <td>";
        echo $row[1]; 
        print "</td> <td>";
        echo $row[2]; 
        print "</td> <td>";
        echo $row[3]; 
        print "</td> <td>";
        echo $row[4]; 
        print "</td> <td>";
        echo $row[5];
        print "</td> <td>";
        echo "-----";
        print "</td> <td>";
        echo $row[6];
        print "</td> </tr>";
		
	    }
	echo '</tbody>';
	echo '</table>';
	echo '</div>';
	echo '<div class="col-md-12 text-center">';
	echo '<ul class="pagination pagination-lg pager" id="myPager"></ul>';
	echo '</div>';
	


} 
else {
    echo "<h2 style='text-align:center'>No results are found in this duration<h2>";
}
include("status_viewer.php");
die();
$conn->close();

?>
