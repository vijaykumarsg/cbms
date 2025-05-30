<!DOCTYPE html>
<html>
 
    <style>
    
body {font-family: Arial, Helvetica, sans-serif;}
 

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
 

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  background-color:white;
  padding: 16px;
  width:40%;
  margin-left:auto;
  margin-right:auto;
  margin-top:150px;
  margin-bottom:250px;
  border:2px solid black;
 
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
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
body{
    background-image:url('bg.jpg');
    
}
</style>
<head>
    <link rel="stylesheet" href="style1.css"/>
    

<style>
</style>
</head>
<body>
     
    <form action="userloginphp.php" method="post">
    <div>
         
         <img src="Frame12.png"  style="width: 10%;height: 100px;">
 <img src="Frame14.png"  style="width: 70%;height: 100px;">
   
   
     
     </div>
<ul>
    <li><a   href="index.php">Home</a></li>
     
    
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">User</a>
    <div class="dropdown-content">
        <a href="userregister.php">Register</a>
        <a href="userlogin.php">Login</a>
    </li>
</ul>



  <div class="container">
      <center>
<h2>LOGIN FORM</h2>
</center>
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter your email" name="email" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="login" value="login">Login</button><br><br>
     
    <center>
    <span>Don't have an account <a href="userregister.php">register</a></span>
     </center>
  </div>
 

   
</form>


</body>
</html>
