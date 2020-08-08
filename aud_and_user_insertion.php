<?php
if(!empty($_POST["save"])) {
    $conn = mysqli_connect("localhost","root","", "nic");
  
    $j=0;
    $duplicate=0;
    $entry=0;
    while(!empty($_POST['auditor_name'][$j])){ 
      $f=0;
      $auditor_name=$_POST["auditor_name"][$j];
      $email=$_POST["E-mail"][$j];
      $company_name=$_POST["Company_Name"][$j];
      $role=$_POST["Role"][$j];
      $remarks=$_POST["Remarks"][$j];
  
  
      $ch=substr($_POST["Company_Name"][$j], 0);
      $ch.=substr($_POST["auditor_name"][$j], 0);
  
      $result=mysqli_query($conn,"SELECT `code` FROM `auditor`");
          while($row = mysqli_fetch_row($result))
               {
                     if($ch==$row[0])
                         {
                          $duplicate++;
                       $f=1;
                          break;
  
                         }
        
              }
  
      if($f==0){
        $entry++;
        mysqli_query($conn,"INSERT INTO `user` (`user_id`, `password`, `isadmin`,`code`, `date`) VALUES (NULL, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', '0','$ch', CURRENT_TIMESTAMP)");
      mysqli_query($conn,"INSERT INTO `auditor` (`code`, `auditor_name`, `email`, `company_name`, `role`, `date`, `remarks`) VALUES ('$ch', '$auditor_name', '$email', '$company_name', '$role', CURRENT_TIMESTAMP, '$remarks')");
          }
      $j++;
    }
  
  if(!empty($_SESSION['twice'])) {
    unset($_SESSION["twice"]);
  }
  else
  {  
  $_SESSION['twice']='FULL';
  }
  }

?>