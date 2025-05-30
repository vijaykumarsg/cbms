 <?php

 if(isset($_POST['reg']))
 {
      $name=$_POST['name'];
     $phno=$_POST['phno'];
     $email=$_POST['email'];
     $add=$_POST['address'];
     $dob=$_POST['dob'];
     session_start();
     $uid=$_SESSION['uname'];
      include 'dbconfig.php';
      $sql= "UPDATE `user` SET `name`='$name',`phnumber`='$phno',`email`='$email',`address`='$add',`dob`='$dob' WHERE `email`='$uid'" ;
      
      if($conn->query($sql))
      {
          echo "<script>alert('updated successfully')</script>";
          echo "<meta http-equiv='refresh' content='0;userdetails.php'/>";
              
          
      }
      else{
          echo "<script>alert(' error a ')</script>";
          echo "<meta http-equiv='refresh' content='0;usereditdetails.php'/>";
          
      }
     }
      
 ?>




//<?php
//  if(isset($_POST['reg']))
//   {
//    $name=$_POST['name'];
//     $phno=$_POST['phno'];
//     $email=$_POST['email'];
//     $add=$_POST['address'];
//     $dob=$_POST['dob'];
//     
//    session_start();
//    $uid=$_SESSION['uname'];
//    include 'dbconfig.php';
//    $sql="UPDATE `user` SET `name`='$name',`phnumber`='$phno',`email`='$email'`address`='$add',`dob`='$dob' WHERE `email`='$uid'" ;
//     if($conn->query($sql))
//
//    {
//          echo "<script>alert('Your data is successfully updated')</script>";
//          echo "<meta http-equiv='refresh' content='0;userdetails.php'/>";
//              
//          
//      }
//      else{
//          echo "<script>alert(' error ')</script>";
//          echo "<meta http-equiv='refresh' content='0;usereditdetails.php'/>";
//          
//      }
//   }
// 
//    ?>