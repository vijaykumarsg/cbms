 <?php
$id=$_GET['id'];
$sql="UPDATE `book1` set status='Approved' WHERE id='$id'";
include 'dbconfig.php';
       if($conn->query($sql))
      {
          echo "<script>alert('Approved successfull')</script>";
          echo "<meta http-equiv='refresh' content='0;indexvieworderapproved.php'/>";
              
          
      }
      else{
          echo "<script>alert(' error')</script>";
          echo "<meta http-equiv='refresh' content='0;indexhome.php'/>";
          
      }
?>
