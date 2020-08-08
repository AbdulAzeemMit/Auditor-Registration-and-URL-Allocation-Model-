<?php
  $f1=0;
            if (isset($_POST['login']) && !empty($_POST['userid'])&& !empty($_POST['password'])) 
            {
                    include('connect.php');
                        $result = mysqli_query($conn,"SELECT user.password, user.isadmin, user.code, auditor.auditor_name FROM user LEFT JOIN auditor ON user.code=auditor.code ");
                            if (mysqli_num_rows($result) > 0 ) {
                                while($row = mysqli_fetch_row($result))
                                    {
                                        if($row[0]==sha1($_POST['password'].'ab')&&$row[2]==$_POST['userid'])
                                            {
                                                $f1=1;
                                                if($_SESSION['cap_code']==$_POST['captcha'])
                                                {
                                                $_SESSION['isadmin']=$row[1];
                                                $_SESSION['permission']='allowed';
                                                if( $_SESSION['isadmin']==1)
                                                 {
                                                    $_SESSION['username']=$_POST['userid'];

                                                  header("Location:home_index.php");             
                                                 }
                                                else if ($_SESSION['isadmin']==0)
                                                 { 
                                                  $_SESSION['username']=$row[3];
                                                  $_SESSION['userid']=$row[2];
                                                  header("Location:aud_home_index.php");             
                                                 }
                                                }
                                                    
                                                    break;
                                            }
                                            else 
                                            {
                                              $f1=0;
                                            }
                                     }
                                    }
                    if($f1==0)
                        {
                    
                            echo '<h5 style="color: #ff0000;text-align:center;font-size: 17px;margin-top:10px">Wrong userid or password</h5>';
                        }
                     
                    
                    
                    
                    
                    
                    
            }
               
        ?>
