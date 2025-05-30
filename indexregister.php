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
    
}
h1{
        font-family: serif;

    
}
.container{
    background-color:#fffacd;
}
  
 
    </style>

    
    
</head>
<body>
    
    


    
       <div>
         
         <img src="Frame12.png"  style="width: 10%;height: 100px;">
 <img src="Frame14.png"  style="width: 70%;height: 100px;">
   
   
     
     </div>   

<ul>
    <li><a  href="index.php">Home</a></li>
     
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Chef</a>
    <div class="dropdown-content">
        <a href="indexregister.php">Register</a>
        <a href="indexlogin.php">Login</a>
        
    </div>
   </li>
    
     
        
    </div>
        

 
   
</ul>
 <form action="indexphp.php" method="post">
  <div class="container">
     
      <center><h2>REGISTRATION FORM</h2></center>
     
    <hr>

    <label for="cateringname"><b>Catering Name</b></label>
    <input type="text" placeholder="enter your catering name" name="cateringname"   required>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter your name" name="name" id="name" required><br>

    <label for="phno"><b>Phone number</b></label>
<input type="text" placeholder="Enter your phone number" name="phno" required maxlength="10" pattern="[0-9]{10}">
    <label for="experiencce"><b>Experience</b></label>
    <input type="text" placeholder="Number of experience" name="exp"   required>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="enter your email" name="email"   required>
    
    <label for=" location"><b>Available Location</b></label>
    <input type="text" placeholder="enter your location" name="location"   required>
    
    
    
    
    <b><label for="export">Expert In :  </label></b>
  <select name="expert" class="expert" id="special">
     <option value="choose" class="choose">Choose</option>
     <option value="North indian">North indian</option>
    <option value="South indian">South indian</option>
    <option value="Italian">Italian</option>
    <option value="Chinese">Chinese</option>
  </select><br>
  
  <b><label for="dish">Dish Type :  </label></b>
  <select name="dish" class="dish" id="special">
     <option value="choose" class="choose">Choose</option>
     <option value="veg">Veg</option>
    <option value="Non-veg">Non-veg</option>
    <option value="Veg and Non-veg">Veg and Non-veg</option>
   </select><br>
    
     
    <label for="noofmem"><b>Number of members</b></label>
    <input type="text" placeholder="Enter your group members" name="nomembers"   required>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter your password" name="password"   required>
    <label for="repassword"><b>Re-Password</b></label>
    <input type="password" placeholder="Enter repassword" name="repassword"   required>
    <hr>
    <p>Already have an account please <a href="indexlogin.php">Login</a></p>

    <button type="submit" name="reg" class="registerbtn">Register</button>
    
  </div>
  
   
</form>

</body>
</html>
