  <!DOCTYPE html>
<html>
<head>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style1.css">
        
<style>
h2{
    color:#008b8b;
    font-family: serif;
    text-align: center;
    font-size: 25px;
    
}
h1{
        font-family: serif;

    
}
.container{
    background-color:#fffacd;
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
</style> 

    
    
</head>
<body>
    <?php
   
    include 'dbconfig.php';
    session_start();
    $uid=$_GET['id'];
    
    $sql="SELECT * FROM `chef` where phno='$uid'" ;
    
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
           
            $cname=$row['cateringname'];
            $name=$row['name'];
              $exp=$row['experience'];
            $email=$row['email'];
            $loc=$row['location'];
             $exp1=$row['expert_in'];
             $dishtype=$row['dishtype'];
             $mem=$row['nomembers'];
        }
    }
    ?>
    


    <form action="indexeditdb.php" method="post">
        

 <div class="topnav">
     
      <a href="indexviewdetails.php" class="split"> Back </a>
</div>
          
  
   
</ul>
         
         <div class="container">
    <h2> UPDATE FORM</h2>
     <hr>

    <label for="cateringname"><b>Catering Name</b></label>
    <input type="text" placeholder="enter your catering name" name="cateringname"  value="<?php echo $cname; ?>" required>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter your name" name="name" id="name" value="<?php echo $name; ?>"required><br>

     
    <label for="experiencce"><b>Experience</b></label>
    <input type="text" placeholder="Number of experience" name="exp" value="<?php echo $exp; ?>"  required>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="enter your email" name="email"  value="<?php echo $email; ?>" required>
    
    <label for=" location"><b>Available Location</b></label>
    <input type="text" placeholder="enter your location" name="location"  value="<?php echo $loc; ?>" required>
    
    
    
    
    <b><label for="export">Expert In :  </label></b>
  <select name="expert"  value="<?php echo $exp1; ?>" class="expert" id="special">
     <option value="choose" class="choose">Choose</option>
     <option value="North indian">North indian</option>
    <option value="South indian">South indian</option>
    <option value="Italian">Italian</option>
    <option value="Chinese">Chinese</option>
  </select><br><br>
  <b><label for="dish">Dish Type :  </label></b>
  <select name="dish" value="<?php echo $dishtype; ?>" class="dish" id="special">
     <option value="choose" class="choose">Choose</option>
     <option value="veg">Veg</option>
    <option value="Non-veg">Non-veg</option>
    <option value="Veg and Non-veg">Veg and Non-veg</option>
   </select><br>
    
    
     
    <label for="noofmem"><b>Number of members</b></label>
    <input type="text" placeholder="Enter your group members" name="nomembers"  value="<?php echo $mem; ?>"  required>
     

    <button type="submit" name="reg" class="registerbtn">submit</button>
    
  </div>
  

   
   
</form>

</body>
</html>
