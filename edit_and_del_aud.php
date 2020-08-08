<?php
include('connect.php');
if(isset($_POST['confirm_delete']))
{
  include('edit_delete.php');
  echo 'deleted';
}

if(isset($_POST['save']))
{
include('update.php');
echo 'record is updated';
}

if(isset($_POST['id1']))
{
  $id=$_POST['id1'];
  $result = mysqli_query($conn,"SELECT `code`, `auditor_name`, `email`, `company_name`,`role`, DATE(date), `remarks` FROM auditor WHERE code = '$id' ");


  if (mysqli_num_rows($result) > 0 ) {

  	echo '<div class="">';
  	echo '<table class="table table-hover table-responsive table-condensed"'. 'style="margin-top:10px"'.' id="myTable">';
    echo  '<tr style="background-color: #4db8ff;"'.'id="tabhead">';
    echo     '<th >ID</th>';
    echo     '<th >Name</th>';
    echo     '<th >E-mail</th>';
    echo     '<th >Company</th>';
    echo     '<th >Role</th>';
    echo     '<th >Date of Joining</th>';
    echo     '<th >Remarks</th>';
    echo     '<th style="background-color:#ff4d4d;">Action</th>';
    echo "</tr>"; 
    echo '<tbody  id="tabbody">';
    echo '<form action="" method= "post">';

    while($row = mysqli_fetch_row($result)
    ) {
       print '<tr style="background-color:white"> <td id="d0"><input type ="text" value='."'$row[0]'".' name="name0" hidden>';
        echo $row[0]; 
        print '</td> <td id="text1" hidden><input type="text" style="width:80%" name="name1" autocomplete="off"  pattern="^[a-zA-Z0-9_ -]+$" value='."'$row[1]'".'required></td><td id="d1">';
        echo $row[1]; 
        print '</td> <td id="text2" hidden><input type="email" style="width:80%" name="name2" autocomplete="off"  value='."'$row[2]'".'></td><td id="d2">';
        echo $row[2]; 
        print '</td> <td id="text3" hidden><input type="text" style="width:80%" name="name3" autocomplete="off" pattern="^[a-zA-Z0-9_ -]+$"  value='."'$row[3]'".'required></td><td id="d3">';
        echo $row[3]; 
        print '</td> <td id="text4" hidden><input type="text" style="width:80%" name="name4" autocomplete="off"   pattern="^[a-zA-Z0-9_ -]+$"  value='."'$row[4]'".'></td><td id="d4">';
        echo $row[4]; 
		print "</td> <td>";
        echo $row[5]; 
		print '</td> <td id="text6" hidden><input type="text" style="width:80%" name="name6" autocomplete="off" pattern="^[a-zA-Z0-9_ -]+$" value='."'$row[6]'".'></td><td id="d6">';
		echo $row[6]; 
		
     	}

  echo '</td>';
  echo '<td id="savetd" hidden><input class=" btn btn-success" type="submit" name="save"  id="save" value="save" onclick="save()" hidden><input class="btn btn-danger" type="submit" id="confirm_delete" value="confirm" name="confirm_delete" hidden></td>';
  echo '<td id="delete"><span id="edit" onclick="edit()" class="glyphicon glyphicon-pencil btn btn-sm btn-default"></span><span onclick="del()" class="glyphicon glyphicon-trash btn btn-sm btn-default"></span></td>';
echo '</tbody>';
  echo '</table>';
	 echo '</form>';

	echo '</div>';
	echo '<div class="col-md-12 text-center">';
	echo '<ul class="pagination pagination-lg pager" id="myPager"></ul>';
	echo '</div>';



} else {
    echo "<h2 style='text-align:center'>No results found<h2>";
}
}
include("status_viewer.php");
die();
$conn->close();

?>
