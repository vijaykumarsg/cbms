 <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="userstyle.css">
        <link rel="stylesheet" href="style1.css">

<style>
    body{
        background-color:white;
    }
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}


li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color:#f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}



</style>
</head>
<body>

<ul>
    <li><a href="indexhome.php">Home</a></li>
   <li><a href="indexviewdetails.php">View details</a></li>
   
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"> Orders</a>
    <div class="dropdown-content">
        <a href="indexvieworders.php"> View Orders</a>
        <a href="indexvieworderapproved.php">Approved Orders</a>
        <a href="indexvieworderrejected.php">Rejected Orders</a>
    
  </li> 
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Grades</a>
    <div class="dropdown-content">
        <a href="indexratings.php">ratings</a>
        <li style="float:right"><a class="active" href="indexlogin.php">Logout</a></li>
          <li style="float:right"><a  href="changepasschef.php">Change Password</a></li>


      
    </div>
  </li>
  <li><a href="indexabout.php">About</a></li>

</ul>

</body>
</html>


