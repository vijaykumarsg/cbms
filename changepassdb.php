<?php
if(isset($_POST['login']))
{ 
     $old=$_POST['old'];
     $password=$_POST['password'];
    $cpassword=$_POST['repassword'];
    session_start();
    $email=$_SESSION['uname'];
    if($password==$cpassword)
    {   
    
    include 'dbconfig.php';
    $sql1="select * from user where email='$email' and password='$old'";
    $result=$conn->query($sql1);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
                $sql2="UPDATE `user` SET `password`='$password' WHERE email='$email';";
               // echo $sql2;
                 if($conn->query($sql2))
                     {
                             
                                         echo "<script>alert('password change successfully')</script>";
                                         echo "<meta http-equiv='refresh' content='0;userhome.php'/>";
                            
                  }
                  else
                  {
                   echo "<script>alert('failure')</script>";
                   echo "<meta http-equiv='refresh' content='0;changepass.php'/>";

                   }
        }
    }
    else 
        {
          echo "<script>alert('old password mismatch')</script>";

          echo "<meta http-equiv='refresh' content='0;changepass.php.php'/>";
    
        }
    }
 
}
else
    {
       
 echo "<script>alert('confirm password doesnot mismatch')</script>";
}

 ?>      





 