<?php
if(isset($_POST['login']))
{
    $phno=$_POST['phno'];
    $password=$_POST['password'];
    include 'dbconfig.php';
    $sql="select * from chef where phno='$phno' and password='$password' and status='Approved';";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        
        session_start();
        $_SESSION['cid']=$phno;
               
              echo "<meta http-equiv='refresh' content='0;indexhome.php'/>";

    }
 else 
     {
          echo "<script>alert('inavlid username or password')</script>";

          echo "<meta http-equiv='refresh' content='0;indexlogin.php'/>";
    
    }
}
 

else
    {
      echo "<meta http-equiv='refresh' content='0;indexlogin.php'/>";

}
    ?>      

