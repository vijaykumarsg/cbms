  <!DOCTYPE html>
   
<html>
<head>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style1.css">
        <style>
            body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create a right-aligned (split) link inside the navigation bar */
.topnav a.split {
  float: left;
  background-color: #04AA6D;
  color: white;
} 
h1{
    font-family:SERIF;
    font-size: 30px;
    color:#191970;
    
}
.container{
    background-color:#fffacd;
    
}



</style>
    
    
</head>
<body>
    <?php 
    date_default_timezone_set('Asia/kolkata');  
    $current_date = date('Y-m-d');  
    session_start();
    $sid=$_GET['id'];
    $uid=$_SESSION['uname'];
    include 'dbconfig.php';
    $sql="select * from user where email='$uid'";
     $result=$conn->query($sql);
     //echo $sql;
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
        $phno=$row['phnumber'];
        }
}


    
    
    ?>
    
    


    <form action="userbookingformphp.php" method="post">
         
        
    <div class="topnav">
     
        <a href="userfindchef.php" class="split"> Back </a>
</div>
        

 
   
</ul>
         
         <div class="container">
             <h1> CHEF BOOKING FORM </h1>
     <hr>
      
 <input type="hidden" value="<?php echo $current_date; ?>" name="odate">
     <input type="hidden" value="<?php echo $sid; ?>" name="sid">
          <input type="hidden" value="<?php echo $uid; ?>" name="uid">
                    <input type="hidden" value="<?php echo $phno; ?>" name="phno">


      

    <label for="name"><b>Number of peoples:</b></label>
    <input type="text" placeholder="Enter the total number of peoples" name="nopeople" id="nopeople" required><br>

    <label for="date"><b>Date:</b></label>
    <input type="date" placeholder="Enter the date" name="date" id="date" required><br>

    <label for="Location"><b>Location:</b></label>
    <input type="text" placeholder="Enter the cooking location" name="location" id="location" required><br>
    
    <b><label for="expert">Dish type:  </label></b>
  <select name="dish" class="expert" id="special">
     <option value="choose" class="choose">Choose</option>
     <option value="Veg">Veg</option>
    <option value="Non-veg">Non-veg</option>
  </select>
    
 
   <button type="submit" name="reg" class="registerbtn">Book</button>
  </div>

         

   
   
</form>

</body>
</html>
