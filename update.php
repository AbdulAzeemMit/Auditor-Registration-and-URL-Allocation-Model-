<?php
include('connect.php');
$code = $_POST['name0'];
$auditor_name=$_POST['name1'];
$email = $_POST['name2'];
$company_name = $_POST['name3'];
$role = $_POST['name4'];
$remarks =$_POST['name6'];

mysqli_query($conn, "UPDATE `auditor` SET `auditor_name`='$auditor_name',`email`='$email',`company_name`='$company_name',`role`='$role',`remarks`='$remarks' WHERE code='$code' ");



?>

