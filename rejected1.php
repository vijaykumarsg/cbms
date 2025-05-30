  <?php
$id=$_GET['id'];
$sql="UPDATE `book1` set status='rejected' WHERE id='$id'";
include 'dbconfig.php';
       if($conn->query($sql))
      {
          echo "<script>alert('rejected successfull')</script>";
          echo "<meta http-equiv='refresh' content='0; indexvieworderrejected.php'/>";
              
          
      }
      else{
          echo "<script>alert(' error')</script>";
          echo "<meta http-equiv='refresh' content='0;indexhome.php'/>";
          
      }
?>
