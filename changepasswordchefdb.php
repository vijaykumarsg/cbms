<?php
if(isset($_POST['login']))
{
    
     
     $old=$_POST['old'];
     $password=$_POST['password'];
    $cpassword=$_POST['repassword'];
    session_start();
    $phno=$_SESSION['cid'];
    if($password==$cpassword)
    {   
    
    include 'dbconfig.php';
    $sql1="select * from chef where phno='$phno' and password='$old';";
    $result=$conn->query($sql1);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
                $sql2="UPDATE `chef` SET `password`='$password' WHERE phno='$phno';";
                  
                if($conn->query($sql2))  
                {
                 echo "<script>alert('password change successfully')</script>";
                 echo "<meta http-equiv='refresh' content='0;indexhome.php'/>";
                  }
                  else
                  {
                   echo "<script>alert('failure')</script>";
                   echo "<meta http-equiv='refresh' content='0;changepasschef.php'/>";

                   }
        }
    }
    else 
        {
          echo "<script>alert('old password mismatch')</script>";

          echo "<meta http-equiv='refresh' content='0;changepasschef.php.php'/>";
    
        }
    }
 
}
else
    {
       
 echo "<script>alert('confirm password doesnot mismatch')</script>";
}

 ?>      





 