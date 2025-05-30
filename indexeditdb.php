  <?php

 if(isset($_POST['reg']))
 {
      $cname=$_POST['cateringname'];

      $name=$_POST['name'];
       $exp=$_POST['exp'];
     $email=$_POST['email'];
     $loc=$_POST['location'];
      $expert=$_POST['expert'];
       $dishtype=$_POST['dish'];
      $nomem=$_POST['nomembers'];


     
     session_start();
     $cid=$_SESSION['cid'];
      include 'dbconfig.php';
      $sql="UPDATE `chef` SET `cateringname`='$cname',`name`='$name',`experience`='$exp',`email`='$email',`location`='$loc',`expert_in`='$expert',`dishtype`='$dishtype',`nomembers`='$nomem' WHERE  `phno`='$cid'" ;
      if($conn->query($sql))
      {
          echo "<script>alert(' updated successfully  ')</script>";
          echo "<meta http-equiv='refresh' content='0;indexviewdetails.php'/>";
              
          
      }
      else{
          echo "<script>alert(' error adding user,please check phnumber')</script>";
          echo "<meta http-equiv='refresh' content='0;indexeditdetails.php'/>";
          
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