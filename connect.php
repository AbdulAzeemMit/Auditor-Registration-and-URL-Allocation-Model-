<?php

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
// for different databases//no need to open another database
// $result = mysqli_query($conn,"SELECT nic.assignment.url, nic.assignment.auditor_code, nic.auditor.code FROM nic.auditor INNER JOIN nic.assignment ON nic.auditor.code=nic.assignment.auditor_code ");

// $result = mysqli_query($conn,"SELECT `id`, `url`, `critical_code`, `auditor_name`, DATE(`date`), `remarks` FROM assignment WHERE status='p' ORDER by auditor_name ");
// if (mysqli_num_rows($result) > 0 ) {
// }

// while($row = mysqli_fetch_row($result)
//     ) {
//        print "<tr> <td>";
//         echo $row[0]; }




//echo '<option value="val">valu</option></select>';

    // output data of each row
    
 


?>