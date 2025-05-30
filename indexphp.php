<?php

 if(isset($_POST['reg']))
 {
     $cname=$_POST['cateringname'];
     $name=$_POST['name'];
     $phno=$_POST['phno'];
     $exp=$_POST['exp'];
     $email=$_POST['email'];
     $location=$_POST['location'];
     $expert=$_POST['expert'];
      $dish=$_POST['dish'];
     $noofmem=$_POST['nomembers'];
     $password=$_POST['password'];
     $repass=$_POST['repassword'];
     if($password==$repass)
     {
      include 'dbconfig.php';
      $sql="insert into chef(status,cateringname,name,phno,experience,email,location,expert_in,dishtype,nomembers,password) values ('Requested','$cname','$name','$phno','$exp', '$email','$location','$expert','$dish','$noofmem', '$password')";
      if($conn->query($sql))
      {
          echo "<script>alert('registration successfull')</script>";
          echo "<meta http-equiv='refresh' content='0;indexlogin.php'/>";
              
          
      }
      else{
          echo "<script>alert(' error adding user,please check phnumber')</script>";
          echo "<meta http-equiv='refresh' content='0;indexregister.php'/>";
          
      }
     }
     else{
         echo "<script>alert(' password missmatch')</script>";
           echo "<meta http-equiv='refresh' content='0;indexregister.php'/>";         
     }
             
 }
 else {
           echo "<meta http-equiv='refresh' content='0;indexregister.php'/>";
     
}
 ?>
