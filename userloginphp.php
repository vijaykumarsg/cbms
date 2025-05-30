<?php
if(isset($_POST['login']))
{
     $email=$_POST['email'];
    $password=$_POST['password'];
    include 'dbconfig.php';
    $sql="select * from user where email='$email' and password='$password';";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        session_start();
        $_SESSION['uname']=$email;
              
              echo "<meta http-equiv='refresh' content='0;userhome.php'/>";

    }
 else 
     {
          echo "<script>alert('inavlid username or password')</script>";

          echo "<meta http-equiv='refresh' content='0;userlogin.php'/>";
    
    }
}
 

else
    {
      echo "<meta http-equiv='refresh' content='0;userlogin.php'/>";

}
    ?>      





 