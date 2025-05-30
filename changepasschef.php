<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="style1.css"/>
        <link rel="stylesheet" href="style.css"/>

    
 
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
     
    <form action="changepasswordchefdb.php" method="post">
     <div class="topnav">
     
      <a href="indexhome.php" class="split"> Back </a>
</div>

  <div class="container">
      <center>
<h2>CHANGE PASSWORD</h2>
</center>
    <label><b>Old password</b></label>
    <input type="text" placeholder="Enter your old password" name="old" required>

    <label><b> New password</b></label>
    <input type="password" placeholder="Enter new password" name="password" required>
    <label><b> Confirm Password</b></label>
    <input type="password" placeholder="Enter confirm Password" name="repassword" required>
        
    <button type="submit" name="login" value="login">Submit</button><br><br>
     
     
  </div>

   
</form>


</body>
</html>
