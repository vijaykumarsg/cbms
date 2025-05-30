 <?php

 if(isset($_POST['reg']))
 {
     $name=$_POST['name'];
     $phno=$_POST['phno'];
     $email=$_POST['email'];
     $add=$_POST['address'];
     $dob=$_POST['dob'];
     $password=$_POST['password'];
     $repass=$_POST['repass'];
     if($password==$repass)
     {
      include 'dbconfig.php';
      $sql="insert into user(name,phnumber,email,address,dob,password)values('$name','$phno','$email','$add','$dob', '$password')";
      if($conn->query($sql))
      {
          echo "<script>alert('registration successfull')</script>";
          echo "<meta http-equiv='refresh' content='0;userlogin.php'/>";
              
          
      }
      else{
          echo "<script>alert(' error adding user,please check phnumber')</script>";
          echo "<meta http-equiv='refresh' content='0;userregister.php'/>";
          
      }
     }
     else{
         echo "<script>alert(' password missmatch')</script>";
echo "<script>alert('registration successfull')</script>";
          echo "<meta http-equiv='refresh' content='0;userregister.php'/>";         
     }
             
 }
 else {
           echo "<meta http-equiv='refresh' content='0;userregister.php'/>";
     
}
 ?>
