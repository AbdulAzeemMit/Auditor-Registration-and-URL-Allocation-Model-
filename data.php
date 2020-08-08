<?php
include('connect.php');
if(isset($_POST['id'])){
$id=$_POST['id'];
if($id===""){
    echo "<option>select</option>";

  
}else{
echo '<option value="" hidden>Select</option>';
 $sql = mysqli_query($conn,"SELECT * FROM `auditor` WHERE company_name='$id'");
 while($row = mysqli_fetch_array($sql)){
 echo '<option value="'.$row['code'].'">'.$row['auditor_name'].'</option>';
 }
 }
}
?>