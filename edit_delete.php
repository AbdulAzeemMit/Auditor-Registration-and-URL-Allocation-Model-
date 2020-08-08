<?php  
//action.php
include('connect.php');
$connect = mysqli_connect('localhost', 'root', '', 'nic');



$code = $_POST['name0'];
$query = "DELETE FROM auditor WHERE code = '".$code."'";
$query1 = "DELETE FROM user WHERE code = '".$code."'";

 mysqli_query($conn, $query);
 mysqli_query($conn, $query1);



?>

