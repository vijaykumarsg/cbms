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
    $uid=$_SESSION['uname'];
    
    $sql="SELECT * FROM `user` where email='$uid'" ;
    
     $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
           
             
            $name=$row['name'];
            $phno=$row['phnumber'];
             $email=$row['email'];
            $address=$row['address'];
            $dob=$row['dob'];
        }
    }
    ?>
    


    <form action="usereditdb.php" method="post">
        
  <div class="topnav">
     
      <a href="userdetails.php" class="split"> Back </a>
</div>
         <div class="container">
    <h2>UPDATE FORM</h2>
     <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" value="<?php echo $name; ?>" id="name" required><br>

    <label for="phoneno"><b>Phone number</b></label>
    <input type="text" placeholder="Enter phone number" name="phno" value="<?php echo $phno; ?>" id="phoneno" required><br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter your email" name="email" id="email" value="<?php echo $email; ?>" required><br>
    

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter your address" name="address" value="<?php echo $address; ?>"id="address" required><br>
    

    <label for="dob"><b>DOB</b></label>
    <input type="Date" placeholder="Enter date of birth" name="dob" value="<?php echo $dob; ?>" id="dob" required><br><br>
    

     
 
   <button type="submit" name="reg" class="registerbtn">Submit</button>
  </div>

         

   
   
</form>

</body>
</html>
