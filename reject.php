<?php
$id=$_GET['id'];
$sql="UPDATE `chef` set status='Rejected' WHERE phno='$id'";
include 'dbconfig.php';
       if($conn->query($sql))
      {
          echo "<script>alert('Rejected successfull')</script>";
          echo "<meta http-equiv='refresh' content='0;adminviewrejected.php'/>";
              
          
      }
      else{
          echo "<script>alert(' error')</script>";
          echo "<meta http-equiv='refresh' content='0;admin.php'/>";
          
      }
?>

