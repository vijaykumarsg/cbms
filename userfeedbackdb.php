  <?php

 if(isset($_POST['submit']))
 {
     $satisfy=$_POST['satisfy'];
     $sugg=$_POST['suggession'];
     $rating=$_POST['rating'];
      $sid=$_POST['sid'];
     $uid=$_POST['uid'];
      
     {
      
      include 'dbconfig.php';
      $sql="insert into feedback(chef_id,user_id,satisfy,suggession,ratings)values('$sid','$uid','$satisfy',' $sugg','$rating')";
      
       if($conn->query($sql))
      {
          echo "<script>alert('Thankyou for your feedback')</script>";
         echo "<meta http-equiv='refresh' content='0;userratings1.php'/>";
              
          
      }
      else{
          echo "<script>alert('error')</script>";
          echo "<meta http-equiv='refresh' content='0;userfeedback.php'/>";
          
      }
     }
     
         
             
 }
 else {
              echo "<script>alert('please enter details')</script>";

           echo "<meta http-equiv='refresh' content='0; userfeedback.php'/>";
     
}
 ?>
