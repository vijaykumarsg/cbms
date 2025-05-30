<?php
if(isset($_POST['login']))
{
    $username=$_POST['username1'];
    $password=$_POST['password1'];
    include 'dbconfig.php';
    $sql="select * from admin where username='$username' and password='$password';";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
               
              echo "<meta http-equiv='refresh' content='0;admin.php'/>";

    }
 else 
     {
          echo "<script>alert('inavlid username or password')</script>";

          echo "<meta http-equiv='refresh' content='0;adminlogin.php'/>";
    
    }
}
 

else
    {
      echo "<meta http-equiv='refresh' content='0;index.php'/>";

}
    ?>      

