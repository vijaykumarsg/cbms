<?php
$id=$_GET['id'];
$sql="UPDATE `chef` set status='Approved' WHERE phno='$id'";
include 'dbconfig.php';
       if($conn->query($sql))
      {
          echo "<script>alert('Approved successfull')</script>";
          echo "<meta http-equiv='refresh' content='0;adminviewapproved.php'/>";
              
          
      }
      else{
          echo "<script>alert(' error')</script>";
          echo "<meta http-equiv='refresh' content='0;admin.php'/>";
          
      }
?>

