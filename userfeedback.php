<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="userstyle.css"/>
        <link rel="stylesheet" href="style.css"/>
                <link rel="style1" href="style.css"/>


    
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    h2{
     text-align: center;
     color:#008B8B;

     font-family:serif;
     font-size:30px;
     
     }
 textarea {
  width: 100%;
  height: 180px;
  padding: 12px 20px;
    border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}
B{
    text-align:center;
}
input[type=submit]{
     background-color:#008080;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
.container{
      
    background-color: #d3d3d9;
}
body{
        background-color:#fafad2;

}
.topnav a.split {
  float: left;
  background-color: #04AA6D;
  color: white;
}
.rating {
  display: inline-block;
  unicode-bidi: bidi-override;
  direction: rtl;
}

.rating input {
  display: none;
}

.rating label {
  float: right;
  cursor: pointer;
  color: #8b0000;
  font-size: 50px; /* Adjust the size of the stars */
  border: none; /* Remove any border */
}

.rating label:before {
  content: '★';
  
  margin: 5px;
}

.rating input:checked ~ label {
  color: orange;
}

</style>
    </head>

    <body>
    <?php 
    session_start();
    $sid=$_GET['cid'];
    $oid=$_GET['oid'];
    $uid=$_SESSION['uname'];
     
    $sql="UPDATE `book1` set f_submit='1' WHERE user_id='$uid' and id='$oid'";
    include 'dbconfig.php';
    $conn->query($sql);
    ?>
     

  <div class="topnav">
     
      <a href="userratings1.php" class="split"> Back </a>
</div>
    
    
    <h2>GIVE YOUR FEEDBACK </h2>   
    

       
            
  <div class="container">
  
      <form id="ratingForm" action="userfeedbackdb.php" method="POST">
        <input type="hidden" value="<?php echo $sid; ?>" name="sid">
          <input type="hidden" value="<?php echo $uid; ?>" name="uid">          
      <label><b>1.Do you satisfy with our service? </b></label>
    <br><br>
            <div class="radio-group"> 
                <input type="radio" id="yes" 
                       name="satisfy" value="yes" > 
                <label for="yes">Yes</label> 
  
                <input type="radio" id="no" 
                       name="satisfy" value="no"> 
                <label for="no">No</label> 
            </div>   <br><br>
  
  <label for="cateringname"><b>2.Write your suggestions: </b></label><br><br>
   <textarea id="w3review" name="suggession" rows="10" cols="50"> </textarea>
   <br></br>
 
  <label><b>3.Rate your experience </b></label></br><br>
  <div class="rating">

     <input type="radio" id="star5" name="rating" value="5"><label for="star5"></label>
    <input type="radio" id="star4" name="rating" value="4"><label for="star4"></label>
    <input type="radio" id="star3" name="rating" value="3"><label for="star3"></label>
    <input type="radio" id="star2" name="rating" value="2"><label for="star2"></label>
    <input type="radio" id="star1" name="rating" value="1"><label for="star1"></label>
         </DIV>

  <input type="submit" value="Submit" name="sub">
       </form>

 

      </DIV>
  
   

 

</body>
</html>
